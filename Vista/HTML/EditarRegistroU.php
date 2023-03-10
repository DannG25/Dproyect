<?php
	session_start();
	include_once('dbconect.php');

	if(isset($_POST['editar'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$id = $_GET['id'];
			$nombres = $_POST['nombres'];
			$apellidos = $_POST['apellidos'];
			$Usuario = $_POST['Usuario'];
			$email = $_POST['email'];
			$Contraseña = $_POST['Contraseña'];
			

			$sql = "UPDATE dbusuarios SET Nombres = '$nombres', Apellidos = '$apellidos', Usuario = '$Usuario', Email = '$email', Contraseña = '$Contraseña' WHERE idUsuario = '$id'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Usuario actualizado correctamente' : 'UPS! No se puso actualizar el Usuario';

		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//Cerrar la conexión
		$database->close();
	}
	else{
		$_SESSION['message'] = 'Complete el formulario de edición';
	}

	header('location: indexU.php');

?>