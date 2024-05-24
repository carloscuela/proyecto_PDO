<?php
require_once 'conexion.php';
require_once 'local.entidad.php';
require_once 'local.model.php';
$loc = new Local();
$model = new LocalModel();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="loguin">
        <h1>MINIMARKET</h1>
        <h3>Ingresa tu usuario y contraseña</h3>
        <form method="POST" action="loguin_usuario.php">
            <label >Usuario:</label>
            <input type="text" id="username" name="username" >
            <label >Contraseña:</label>
            <input type="password" id="password"  name="password" >
            <div class="wrap">
            <button type="submit" onclick="">
                    entrar
                </button>
            </div>
        </form>
       
    </div>
</body>
</html>