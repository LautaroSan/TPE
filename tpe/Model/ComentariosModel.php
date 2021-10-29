<?php


Class ComentariosModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=web2;charset=utf8', 'root', '');
    }

    function obtenerComentarios($id){
        $query = $this->db->prepare("select comentarios.* , usuarios.nombre as nombre from comentarios join usuarios on comentarios.id_usuario = usuarios.id where id_gimnasta = ? ");
        $query->execute(array($id));
        $comentarios = $query->fetchAll(PDO::FETCH_OBJ);
        return $comentarios;
    }

    function obtenerComentario($id){
        $query = $this->db->prepare ("select * from comentarios where id = ?");
        $query->execute(array($id));
        $comentario = $query->fetch(PDO::FETCH_OBJ);
        return $comentario;
    }

    function eliminarComentario($id){
        $query = $this->db->prepare("delete from comentarios where id = ?");
        $query->execute(array($id));
    }

    function insertarComentario($texto,$puntaje,$usuario,$gimnasta){
        $query = $this->db->prepare("insert into comentarios (texto,puntaje,id_usuario,id_gimnasta) values (?,?,?,?)");
        $query->execute(array($texto,$puntaje,$usuario,$gimnasta));
        return $this->db->lastInsertId();
    }
}