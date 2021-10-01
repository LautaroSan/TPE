<?php

class UserModel{
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=web2;charset=utf8', 'root', '');
    }

    function getUser($nombre){
        $query = $this->db->prepare("select * from usuarios where nombre = ?");
        $query->execute([$nombre]);
        $user = $query->fetch(PDO::FETCH_OBJ);
        return $user;
    }

    function addUser($nombre,$pass){
        $query = $this->db->prepare("INSERT INTO usuarios (nombre, clave) VALUES (?,?)");
        $query->execute(array($nombre,$pass));
    }

    function getUsers(){
        $query = $this->db->prepare("select * from usuarios");
        $query->execute();
        $users = $query->fetchAll(PDO::FETCH_OBJ);
        return $users;
    }
}





