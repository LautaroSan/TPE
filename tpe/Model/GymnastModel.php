<?php

class GymnastModel{

    private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=web2;charset=utf8', 'root', '');
    }

    function getGymnasts(){
        $sentencia = $this->db->prepare( "select gimnastas.*, aparatos.nombre as aparato from gimnastas join aparatos on gimnastas.id_aparato = aparatos.id");
        $sentencia->execute();
        $gymnasts = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $gymnasts;
    }

    function getGymnastsPaginated($page){
        $sentencia = $this->db->prepare( "select gimnastas.*, aparatos.nombre as aparato from gimnastas join aparatos on gimnastas.id_aparato = aparatos.id
        order by id_gimnasta limit ".($page *5).",5");
        $sentencia->execute();
        $gymnasts = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $gymnasts;
    }

    

    function insertGymnast($nombre, $nac,$id, $alt,$edad){
        $sentencia = $this->db->prepare("INSERT INTO gimnastas(nombre, nacionalidad, id_aparato, altura, edad) VALUES(?, ?, ?, ?,?)");
        $sentencia->execute(array($nombre,$nac,$id, $alt, $edad ));
    }

    function deleteGymnastFromDB($id){
        $sentencia = $this->db->prepare("DELETE FROM gimnastas WHERE id_gimnasta =?");
        $sentencia->execute(array($id));
    }

    function getGymnast($id){
        $sentencia = $this->db->prepare( "select gimnastas.*, aparatos.nombre as aparato from gimnastas join aparatos on gimnastas.id_aparato = aparatos.id WHERE id_gimnasta=?");
        $sentencia->execute(array($id));
        $gymnast = $sentencia->fetch(PDO::FETCH_OBJ);
        return $gymnast;
    }
   
    function getGymnastsByAparato($id){
        $query = $this->db->prepare("select gimnastas.*, aparatos.nombre as aparato from gimnastas join aparatos on gimnastas.id_aparato = aparatos.id where id_aparato = ?");
        $query->execute(array($id));
        $gymnasts = $query->fetchAll(PDO::FETCH_OBJ);
        return $gymnasts;
    }
    function editGymnast($nombre, $nac,$idAparato, $alt,$edad, $id){
        $query = $this->db->prepare("update gimnastas set nombre = ? , nacionalidad = ? , id_aparato = ? , altura = ? , edad = ? where id_gimnasta = ? ");
        $query->execute(array($nombre,$nac,$idAparato,$alt,$edad,$id));

    }

    function busquedaAvanzadaGymnast($nac,$altMayor,$altMenor,$edadMayor,$edadMenor){
        $queryString = "select gimnastas.*, aparatos.nombre as aparato from gimnastas join aparatos on gimnastas.id_aparato = aparatos.id where ? ";
        $array = array(true);
        if(!empty($nac)){
            $queryString.="and nacionalidad = ?";
            $array[] = $nac;
        }
        if(!empty($altMayor)){
            $queryString.="and altura > ? ";
            $array[] = $altMayor;    
        }else if(!empty($altMenor)){
            $queryString.="and altura < ? "; 
            $array[] = $altMenor;  
        }
        if(!empty($edadMayor)){
            $queryString.="and edad > ? ";
            $array[] = $edadMayor;     
        }else if(!empty($edadMenor)){
            $queryString.="and edad < ? ";
            $array[] = $edadMenor;  
        }
        $query = $this->db->prepare($queryString);
        $query->execute($array);
        $gymnasts = $query->fetchAll(PDO::FETCH_OBJ);
        return $gymnasts;
        
    }
}