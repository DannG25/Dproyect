<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Facturaciones DAIA ©</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container">
	<!-- Brand and toggle get grouped for better mobile display --> 
<div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="Modelo\loguear.php" style="color:forestgreen ;">facturaciones DAIA ©</a> </div>
 <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
		<br>
		<li><input type="search" name="busquedacodigo" pattern="[A-Za-z0-9]{8,20}" title="Un código válido consiste en una cadena con 8 a 20 caracteres, cada uno de los cuales es una letra o un dígito" required>
		<input type="submit" action="<?php echo $row['codigo_producto']; ?>"><span class="sr-only">(current)</span></a></li>
      </ul> 
    </div>
 <!--navbar-collapse-->
 </div>
 <!--container-fluid-->
 </nav>
<div class="container">
	<h2 style="color: darkblue;" class="page-header text-center">INVENTARIO 1.0</h2>
	<div class="row">
	<div class="col-sm-8 col-sm-offset-2">
			<a href="#addnew" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Nuevo Producto</a>
<?php 
	session_start();
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
		<th>Codigo Nro</th>
		<th>Producto</th>
		<th>Tipo de producto</th>
		<th>Estado</th>
		<th>Precio</th>
		<th>Stock</th>
		<th>Descripción</th>
	</thead>
	<tbody>
		<?php
			//incluimos el fichero de conexion
			include_once('dbconect.php');

			$database = new Connection();
			$db = $database->open();
			try{	
				$sql = 'SELECT * FROM dbinventario';
				foreach ($db->query($sql) as $row) {
					?>
					<tr>
						<td><?php echo $row['codigo_producto']; ?></td>
						<td><?php echo $row['nombre_del_producto']; ?></td>
						<td><?php echo $row['tipo_de_producto']; ?></td>
						<td><?php echo $row['estado']; ?></td>
						<td><?php echo $row['precio']; ?></td>
						<td><?php echo $row['stock_producto']; ?></td>
						<td><?php echo $row['descripcion']; ?></td>
						<td>
							<a href="#edit_<?php echo $row['codigo_producto']; ?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Editar</a>
							<a href="#delete_<?php echo $row['codigo_producto']; ?>" class="btn btn-danger btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-trash"></span> Borrar</a>
						</td>
						<?php include('BorrarEditarModalI.php'); ?>
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

<?php include('AgregarModalI.php'); ?>
<script src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>