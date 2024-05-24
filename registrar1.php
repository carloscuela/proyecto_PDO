<?php
require_once 'conexion.php';
require_once 'local.entidad.php';
require_once 'local.model.php';
$username= $_REQUEST['username'];
$password=$_REQUEST['password'];
$loc = new Local();
 $loc->__SET('username', $username);
 $loc->__SET('password', $password);

$model = new LocalModel();
 $model->Registrar($loc);
echo 'El usuario '.$username. ' ha sido registrado...';
echo '<br><br>';
echo '<a href="index1.php"><button>Volver</button></a>';
?>