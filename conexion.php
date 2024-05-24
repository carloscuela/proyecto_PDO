<?php
class conectar{
    protected $conexion;
    public function __construct(){
      
        try{
            $this ->conexion=new PDO('mysql:host=localhost;dbname=bdminimarket','root','');
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            echo "conexion establecida";
        } catch(Exception $e){
            echo "falla de conexion";}
    }
}
?>