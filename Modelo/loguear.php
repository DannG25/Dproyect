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
        include 'conexion.php';
        extract($_POST);
        session_start();
        
        $usuario = $_POST["usuario"];
        $clave = $_POST["clave"];
        $tipoUsuario = $_POST['tipoUsuario'];

        echo $usuario;
        echo $clave;
        echo $tipoUsuario;


           
            $q = "SELECT COUNT(*) as contar from login where usuario= '$usuario' and clave='$clave' and tipoUsuario='$tipoUsuario'";
            $consulta = mysqli_query($conexion, $q);
            $array1 = mysqli_fetch_array($consulta);
           
                
                switch ($tipoUsuario) {

                    case 'Administrador':
                        if ($array1['contar'] > 0) { 
                        $_SESSION['username'] = $usuario;
                        header("Location: ../Vista/HTML/moduloAdministrador.php");
                    } break;
                    case 'Moderador':
                        if ($array1['contar'] > 0) { 
                        $_SESSION['username'] = $usuario;
                        header("Location: ../Vista/HTML/moduloModerador.php");
                    } break;
                    case 'Usuario':
                        if ($array1['contar'] > 0) { 
                        $_SESSION['username'] = $usuario;
                        header("Location: ../Vista/HTML/moduloUsuario.php");
                    } 
                else {
                    echo "Datos incorrectos";
                }
                break;
            default:
                echo "Usuario incorrecto";
        }
                
            
    
    
        ?>
</body>
</html>
     