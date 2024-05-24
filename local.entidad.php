<?php
require_once 'conexion.php';
class Local
{
private $idusuario;
private $username;
private $password;
public function __GET($k)
{
return $this->$k;
}
public function __SET($k, $v)
{
return $this->$k = $v;
}
}