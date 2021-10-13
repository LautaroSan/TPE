<?php
require_once "./Model/AparatosModel.php";
require_once "./View/AparatosView.php";
require_once "Helpers/AuthHelper.php";

class AparatosController{
    private $model;
    private $view;
    private $authHelper;

    function __construct(){
        $this->model = new AparatosModel();
        $this->view = new AparatosView();
        $this->authHelper = new AuthHelper();

    }

    function showAparatos(){
        $this->authHelper->checkLoggedIn();
        $aparatos = $this->model->getAparatos();
        $this->view->showAparatos($aparatos);
    }

    function showAparatosPublico(){
        $aparatos = $this->model->getAparatos();
        $this->view->showAparatosPublico($aparatos);
    } 

    function addAparato(){
        $this->authHelper->checkLoggedIn();
        if(!empty($_POST)){
            if($_POST['nombre']!="" && $_POST['descripcion']!=""){
                $this->model->insertAparato($_POST['nombre'], $_POST['descripcion'], $_POST['orden_olimpico']);
                
            }
            $this->view->update();
        }
    }
    function deleteAparato($id){
        $this->authHelper->checkLoggedIn();
        $mostrarAparatos=$this->model->deleteAparato($id);
        if($mostrarAparatos){
            $this->view->update();
        }else{
            $this->view->errorAlEliminar();
        }
        
    }
    function getEditFormAparato($id){
        $this->authHelper->checkLoggedIn();
        $aparato = $this->model->getAparato($id);
        $this->view->showEditForm($aparato);
    }
    function editAparato(){
        $this->authHelper->checkLoggedIn();
        if(!empty($_POST)){
            if($_POST['nombre']!="" && $_POST['descripcion']!=""){
                $this->model->editAparato($_POST['nombre'], $_POST['descripcion'], $_POST['orden_olimpico'], $_POST['id']);
            }
        $this->view->update();
        }
    }
}



