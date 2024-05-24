<?php

session_start();
include_once 'conexion.php';
$username = $_POST['username'];
$password = $_POST['password'];
$sentecia = $conexion->prepare('select * from loguin where username = ? and password = ?;');
$sentencia -> execute([$username,$password]);
$datos = $sentencia->fetch(PDO::FETCH_OBJ);
print_r($datos);

class usuario{
public function userLogin($usuario,$password){
    try{
        
    }
    catch(PDOException $e){

    }
}

}

?>