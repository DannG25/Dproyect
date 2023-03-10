<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
  <body>
    <?php    

$host = "localhost";
$usuario = "root";
$clave = "";
$bd = "usuario";

$conexion = mysqli_connect($host, $usuario, $clave, $bd);

if ($conexion) {
    echo "Se ha conectado correctamente";
} else {
    echo "No se pudo conectar";
}
      ?> 
  </body>
</html>
