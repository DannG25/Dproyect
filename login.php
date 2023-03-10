<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <meta charset="UTF-8">
    <title>login </title>
</head>
<link rel="stylesheet" href="Vista/CSS/login styles.css">

<body>
    <header class="header-2">
        <h2>Bienvenido! ingresa a tu cuenta</h2>
    </header>
    <main>
        <form method="POST" name="ingresar" class="form-login" action="Modelo\loguear.php">
            <h4 class="titulo-pagina ">Iniciar Sesión</h4>
            <Input class="controls " type="text " name="usuario" pattern="[a-zA-Z0-9]+" placeholder="usuario" required />
            <input class="controls " type="password" name="clave" placeholder="contraseña" required />
            <div>
                <label class="control-label" style=" font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ;top:4px;">Clase de usuario: </label>
                <select name="tipoUsuario" class="form-control" id="TipoUsuario" required>
                    <option value="Administrador">Administrador</option>
                    <option value="Moderador">Moderador</option>
                    <option value="Usuario">Usuario</option>
                </select>
            </div><br><br>
            <button class="buttons" type="submit" name="Login" value="Ingresar" href="proyectoSCA/dashboard.php">Ingresar</button>
            <div class="forget">
                <a href="alternative-pass.html">Olvidaste tu contraseña?</a>
                <a href="Pagina de registro.php">Crear nueva cuenta</a>
            </div>
        </form>
    </main>
    <?php
    ?>
</body>

</html>