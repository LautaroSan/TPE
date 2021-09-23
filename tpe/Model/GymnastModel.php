<?php

class GymnastModel{

    private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=web2;charset=utf8', 'root', '');
    }

    function getGymnasts(){
        $sentencia = $this->db->prepare( "select * from gimnastas");
        $sentencia->execute();
        $gymnasts = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $gymnasts;
    } 

    function insertGymnast($nombre, $nac, $esp,$id, $alt,$edad){
        $sentencia = $this->db->prepare("INSERT INTO gimnastas(nombre, nacionalidad, aparato, id_aparato, altura, edad) VALUES(?, ?, ?, ?, ?,?)");
        $sentencia->execute(array($nombre,$nac,$esp,$id, $alt, $edad ));
    }

    function deleteGymnastFromDB($id){
        $sentencia = $this->db->prepare("DELETE FROM gimnastas WHERE id_gimnasta =?");
        $sentencia->execute(array($id));
    }

    function getGymnast($id){
        $sentencia = $this->db->prepare( "select * from gimnastas WHERE id_gimnasta=?");
        $sentencia->execute(array($id));
        $gymnast = $sentencia->fetch(PDO::FETCH_OBJ);
        return $gymnast;
    }
    function getAparatos(){
        $query = $this->db->prepare( "select * from aparatos ");
        $query->execute();
        $aparatos = $query->fetchAll(PDO::FETCH_OBJ);
        return $aparatos;
    }
    function getGymnastsByAparato($aparato){
        $query = $this->db->prepare("select * from gimnastas where aparato = ?");
        $query->execute(array($aparato));
        $gymnasts = $query->fetchAll(PDO::FETCH_OBJ);
        return $gymnasts;
    }
    function editGymnast($nombre, $nac, $esp,$idAparato, $alt,$edad, $id){
        $query = $this->db->prepare("update gimnastas set nombre = ? , nacionalidad = ? , aparato = ? , id_aparato = ? , altura = ? , edad = ? where id_gimnasta = ? ");
        $query->execute(array($nombre,$nac,$esp,$idAparato,$alt,$edad,$id));

    }
}