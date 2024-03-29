<?php
require_once "./Model/ComentariosModel.php";
require_once "./View/ApiView.php";

Class ApiComentariosController{

    private $model;
    private $view;

    function __construct(){
        $this->model = new ComentariosModel();
        $this->view = new ApiView();
    }

    function obtenerComentarios($params = null){
        $id = $params[":ID"];
        if(isset($_GET['sortBy']) && isset($_GET['orden']) && !empty($_GET['sortBy']) && !empty($_GET['orden'])){
            $comentariosOrdenados = $this->model->obtenerComentariosOrdenados($_GET['sortBy'],$_GET['orden'],$id);
                return $this->view->response($comentariosOrdenados,200); 
            
        }else if (isset($_GET['filterByPuntaje']) && !empty($_GET['filterByPuntaje'])){
            $comentariosFiltrados = $this->model->obtenerComentariosFiltrados($id,$_GET['filterByPuntaje']);
                return $this->view->response($comentariosFiltrados,200); 
        }
        else{
            $comentarios = $this->model->obtenerComentarios($id);
            return $this->view->response($comentarios,200);
            
        }
            
        
        
           
    }

    /*function obtenerComentario($params = null){
        $id = $params[":ID"];
        $comentario = $this->model->obtenerComentario($id);
        if($comentario){
            return $this->view->response($comentario,200);
        }else{
            return $this->view->response("El comentario con el id=$id no existe", 404);
        }
    }*/

    function eliminarComentario($params = null){
        $id = $params[":ID"];
        $comentario = $this->model->obtenerComentario($id);
        if($comentario){
            $this->model->eliminarComentario($id);
            return $this->view->response("El comentario con el id = $id fue eliminado",200);
        }else{
            return $this->view->response("El comentario con el id=$id no existe", 404);
        }
        
    }

    function insertarComentario(){
        $body = $this->getBody();
        if(!empty($body->texto) && !empty($body->puntaje) && !empty($body->id_usuario) && !empty($body->id_gimnasta) ){
            $id = $this->model->insertarComentario($body->texto, $body->puntaje, $body->id_usuario, $body->id_gimnasta);
            if ($id != 0) {
                $this->view->response("el comentario se insertó con el id=$id", 200);
            } else {
                $this->view->response("el comentario no se pudo insertar", 500);
            }
        }else{
            $this->view->response("formato incorrecto", 400);
        }

        
    }

    private function getBody() {
        $bodyString = file_get_contents("php://input");
        return json_decode($bodyString);
    }

}



