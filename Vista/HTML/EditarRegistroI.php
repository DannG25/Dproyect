<?php
	session_start();
	include_once('dbconect.php');

	if(isset($_POST['editar'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$id = $_GET['id'];
			$nombre_del_producto = $_POST['nombre_del_producto'];
			$tipo_de_producto = $_POST['tipo_de_producto'];
			$estado = $_POST['estado'];
			$precio = $_POST['precio'];
			$stock_producto = $_POST['stock_producto'];
			$descripcion = $_POST['descripcion'];

			$sql = "UPDATE dbinventario SET  Nombre_del_producto = '$nombre_del_producto', Tipo_de_producto = '$tipo_de_producto', Estado = '$estado', Precio = '$precio', Stock_producto = '$stock_producto', Descripcion = '$descripcion' WHERE código_producto = '$id'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Producto actualizado correctamente' : 'No se puso actualizar tu producto';

		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//Cerrar la conexión
		$database->close();
	}
	else{
		$_SESSION['message'] = 'Llene el formulario con sus datos!';
	}

	header('location: indexI.php');

?>