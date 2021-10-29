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
        $rolPorDefecto = "noAdmin";
        $query = $this->db->prepare("INSERT INTO usuarios (nombre, clave, rol) VALUES (?,?,?)");
        $query->execute(array($nombre,$pass,$rolPorDefecto));
    }

    function getUsers(){
        $query = $this->db->prepare("select * from usuarios");
        $query->execute();
        $users = $query->fetchAll(PDO::FETCH_OBJ);
        return $users;
    }

    function otorgarPermiso($permiso,$id){
        $query = $this->db->prepare("update usuarios set rol = ? where id = ?");
        $query->execute(array($permiso, $id));
    }

    function deleteUser($id){
        $query = $this->db->prepare("delete from usuarios where id = ? ");
        $query->execute(array($id));
    }
}





