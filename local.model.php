<?php
require_once 'conexion.php';


class LocalModel extends conectar{
    public function Listar(){
        try
        {
            $result = array();
            $stm = $this->conexion->prepare("SELECT * FROM loguin order by idusuario");
            $stm->execute();
            foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
            {
            $loc = new Local();
            $loc->__SET('idusuario', $r->idusuario);
            $loc->__SET('username', $r->username);
            $loc->__SET('password', $r->password);
            $result[] = $loc;
            }
            return $result;
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }
    public function Obtener($idusuario){
        try{
            $stm = $this->conexion->prepare("SELECT * FROM loguin WHERE idusuario = ?");
            $stm->execute(array($idusuario));
            $r = $stm->fetch(PDO::FETCH_OBJ);
            $loc = new Local();
            $loc->__SET('idusuario', $r->idusuario);
            $loc->__SET('username', $r->username);
            $loc->__SET('password', $r->passwaord);
            return $loc;} 
            
        catch (Exception $e){
            die($e->getMessage()); }
    }

    public function Eliminar($idusuario){
        try{
            $stm = $this->conexion->prepare("DELETE FROM bdminimarket WHERE idusuario = ?");
            $stm->execute(array($idusuario));} 
        catch (Exception $e){
            die($e->getMessage()); }
    }

    public function Actualizar(Local $data){
        try{
            $sql = "UPDATE bdminimarket SET
            username = ?,
            password = ?
            WHERE idusuario = ?";
            $this->conexion->prepare($sql)->execute( array( $data->__GET('username'), $data->__GET('password'),$data->__GET('idusuario') ));} 
        catch (Exception $e){
            die($e->getMessage());}
    }

    public function Registrar(Local $data){
        try{
            $sql = "INSERT INTO loguin (username, password) VALUES (?, ?)";
            $this->conexion->prepare($sql) ->execute(array($data->__GET('username'),$data->__GET('password')));
        }
        catch (Exception $e){
            die($e->getMessage());}
    }

    public function loguin(){


    }

}



?>