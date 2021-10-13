<?php

class AparatosModel{

    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=web2;charset=utf8', 'root', '');
    }

    function getAparatos(){
        $sentencia = $this->db->prepare( "select * from aparatos");
        $sentencia->execute();
        $aparatos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $aparatos;
    } 

    function insertAparato($nombre, $desc, $orden){
        $sentencia = $this->db->prepare("INSERT INTO aparatos(nombre, descripcion, orden_olimpico) VALUES(?, ?, ?)");
        $sentencia->execute(array($nombre,$desc,$orden));
    }
    function deleteAparato($id){
        $query = $this->db->prepare("delete from aparatos where id = ? ");
        try{$query->execute(array($id));
            return true;
        }catch(PDOException $e){
            return false;
        }
        
    }
    function getAparato($id){
        $query = $this->db-> prepare("select * from aparatos where id = ? ");
        $query->execute(array($id));
        $aparato = $query->fetch(PDO::FETCH_OBJ);
        return $aparato;
    }
    function editAparato($nombre,$desc,$orden,$id){
        $query = $this->db->prepare("update aparatos set nombre = ? , descripcion = ? , orden_olimpico = ? where id = ? ");
        $query->execute(array($nombre,$desc,$orden,$id));
    }
}







