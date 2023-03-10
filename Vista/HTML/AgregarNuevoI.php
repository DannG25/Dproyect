<?php
session_start();
include_once('dbconect.php');

if(isset($_POST['agregar'])){
	$database = new Connection();
	$db = $database->open();
	try{
		//hacer uso de una declaración preparada para prevenir la inyección de SQL
		$stmt = $db->prepare("INSERT INTO dbinventario (, Nombre_del_producto, Tipo_de_producto, Estado, Precio, Stock_producto, Descripcion) VALUES ( :nombre_del_producto, :tipo_de_producto, :estado, :precio, :stock_producto, :descripcion)");
		//instrucción if-else en la ejecución de nuestra declaración preparada
		$_SESSION['message'] = ( $stmt->execute(array(':nombre_del_producto' => $_POST['nombre_del_producto'] ,':tipo_de_producto' => $_POST['tipo_de_producto'] ,':estado' => $_POST['estado'] ,':precio' => $_POST['precio'] , ':stock_producto' => $_POST['stock_producto'] , ':descripcion' => $_POST['descripcion'])) ) ? 'Producto guardado correctamente' : 'UPS! Algo salió mal. No se puede agregar tu producto';	
	
	}
	catch(PDOException $e){
		$_SESSION['message'] = $e->getMessage();
	}

	//cerrar la conexion
	$database->close();
}

else{
	$_SESSION['message'] = 'Complete el formulario';
}

header('location: indexI.php');
	
?>