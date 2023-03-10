<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Facturaciones DAIA ©</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container" center >
	<h2 class="page-header text-center">Data Usuarios</h2>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
		<a href="#addnewU" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Nuevo Registro</a>
	<?php 

	if(isset($_SESSION['message'])){
		?>
		<div class="alert alert-info text-center" style="margin-top:20px;">
			<?php echo $_SESSION['message']; ?>
		</div>
	<?php

		unset($_SESSION['message']);
	}
?>
<table class="table table-bordered table-striped" style="margin-top:20px;">
	<thead>
		<th>ID_usuario</th>
		<th>Nombres</th>
		<th>Apellidos</th>
		<th>Usuarios</th>
		<th>E-mail</th>
		<th>Contraseña</th>
	</thead>
	<tbody>
		<?php
			//incluimos el fichero de conexion
			include_once('dbconect.php');

			$database = new Connection();
			$db = $database->open();
			try{	
				$sql = 'SELECT * FROM dbusuarios';
				foreach ($db-> query($sql) as $row) {
					?>
					<tr>
						<td><?php echo $row['idUsuario']; ?></td>
						<td><?php echo $row['Nombres']; ?></td>
						<td><?php echo $row['Apellidos']; ?></td>
						<td><?php echo $row['Usuario']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['Contraseña']; ?></td>
						<td>
							<a href="#edit_<?php echo $row['idUsuario']; ?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Editar Usuario</a>
							<a href="#delete_<?php echo $row['idUsuario']; ?>" class="btn btn-danger btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-trash"></span> Borrar Usuario</a>
						</td>
						<?php include('BorrarEditarModalU.php'); ?>
					</tr>
					<?php 
				}
			}
			catch(PDOException $e){
				echo "Hubo un problema en la conexión: " . $e->getMessage();
			}

			//Cerrar la Conexion
			$database->close();

		?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php include('AgregarModalU.php'); ?>
<script src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>