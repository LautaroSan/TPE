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
        date_default_timezone_set('America/Buenos_Aires');
        $fecha = date('Y-m-d H:i:s');
        $query = $this->db->prepare("insert into comentarios (texto,puntaje, fecha,id_usuario,id_gimnasta) values (?,?,?,?,?)");
        $query->execute(array($texto,$puntaje,$fecha,$usuario,$gimnasta));
        return $this->db->lastInsertId();
    }

    function obtenerComentariosOrdenados($criterio,$orden,$id){
        $query = $this->db->prepare("select comentarios.*, usuarios.nombre as nombre from comentarios join usuarios on comentarios.id_usuario = usuarios.id where id_gimnasta = ?
        order by $criterio"." $orden ");
        $query->execute(array($id));
        $comentarios = $query->fetchAll(PDO::FETCH_OBJ);
        return $comentarios;
    }

    function obtenerComentariosFiltrados($id,$puntaje){
        $query = $this->db->prepare("select comentarios.*, usuarios.nombre as nombre from comentarios join usuarios on comentarios.id_usuario = usuarios.id where id_gimnasta = ?
         and puntaje = ? ");
         $query->execute(array($id,$puntaje));
         $comentarios = $query->fetchAll(PDO::FETCH_OBJ);
         return $comentarios;
    }
}