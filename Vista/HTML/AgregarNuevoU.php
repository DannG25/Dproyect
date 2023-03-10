<?php
session_start();
include_once('dbconect.php');

if(isset($_POST['agregar'])){
	$database = new Connection();
	$db = $database->open();
	try{
		//hacer uso de una declaración preparada para prevenir la inyección de sql
		$stmt = $db->prepare("INSERT INTO dbusuarios (Nombres, Apellidos, Usuario, Email, Contraseña) VALUES (:nombres, :apellidos, :usuario, :email, :contraseña)");
		//instrucción if-else en la ejecución de nuestra declaración preparada
		$_SESSION['message'] = ( $stmt->execute(array(':nombres' => $_POST['nombres'] , ':apellidos' => $_POST['apellidos'] , ':usuario' => $_POST['usuario'], ':email' => $_POST['email'], ':contraseña' => $_POST['contraseña'])) ) ? 'Usuario Añadido correctamente' : 'Lo sentimos, Algo salió mal. No se puede agregar Usuario';	
	
	}
	catch(PDOException $e){
		$_SESSION['message'] = $e->getMessage();
	}

	//cerrar la conexion
	$database->close();
}

else{
	$_SESSION['message'] = 'Llene el formulario';
}

header('location: indexU.php');
	
?>