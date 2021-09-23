<?php
require_once "./Model/AparatosModel.php";
require_once "./View/AparatosView.php";

class AparatosController{
    private $model;
    private $view;

    function __construct(){
        $this->model = new AparatosModel();
        $this->view = new AparatosView();

    }

    function showHome(){
        $aparatos = $this->model->getAparatos();
        $this->view->showAparatos($aparatos);
    }

    function addAparato(){
        if(!empty($_POST)){
            if($_POST['nombre']!="" && $_POST['descripcion']!=""){
                $this->model->insertAparato($_POST['nombre'], $_POST['descripcion'], $_POST['orden_olimpico']);
                
            }
            $this->view->showHomeLocation();
        }
    }
    function deleteAparato($id){
        $this->model->deleteAparato($id);
        $this->view->showHomeLocation();
    }
    function getEditFormAparato($id){
        $aparato = $this->model->getAparato($id);
        $this->view->showEditForm($aparato);
    }
    function editAparato(){
        if(!empty($_POST)){
            if($_POST['nombre']!="" && $_POST['descripcion']!=""){
                $this->model->editAparato($_POST['nombre'], $_POST['descripcion'], $_POST['orden_olimpico'], $_POST['id']);
            }
        $this->view->showHomeLocation();
        }
    }
}



