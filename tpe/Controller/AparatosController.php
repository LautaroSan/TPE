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
        $this->chequearAdmin = $this->authHelper->checkRol()=="admin";
        $this->gymnastView = new GymnastView();

    }

    function showAparatos(){
        $this->authHelper->checkLoggedIn();
        if($this->chequearAdmin){
            $aparatos = $this->model->getAparatos();
            $this->view->showAparatos($aparatos);
        }else{
            $this->gymnastView->showError();
        }
        
    }

    function showAparatosPublico(){
        $aparatos = $this->model->getAparatos();
        $this->view->showAparatosPublico($aparatos);
    } 

    function addAparato(){
        $this->authHelper->checkLoggedIn();
        if($this->chequearAdmin){
            if(!empty($_POST)){
                if($_POST['nombre']!="" && $_POST['descripcion']!=""){
                    $this->model->insertAparato($_POST['nombre'], $_POST['descripcion'], $_POST['orden_olimpico']);
                    
                }
                $this->view->update();
            }   
        }else{
            $this->gymnastView->showError();
        }
        
    }
    function deleteAparato($id){
        $this->authHelper->checkLoggedIn();
        if($this->chequearAdmin){
            $mostrarAparatos=$this->model->deleteAparato($id);
            if($mostrarAparatos){
                $this->view->update();
            }else{
                $this->view->errorAlEliminar();
            } 
        }else{
            $this->gymnastView->showError();
        }
        
        
    }
    function getEditFormAparato($id){
        $this->authHelper->checkLoggedIn();
        if($this->chequearAdmin){
            $aparato = $this->model->getAparato($id);
            $this->view->showEditForm($aparato); 
        }else{
            $this->gymnastView->showError();
        }
        
    }
    function editAparato(){
        $this->authHelper->checkLoggedIn();
        if($this->chequearAdmin){
            if(!empty($_POST)){
                if($_POST['nombre']!="" && $_POST['descripcion']!=""){
                    $this->model->editAparato($_POST['nombre'], $_POST['descripcion'], $_POST['orden_olimpico'], $_POST['id']);
                }
            $this->view->update();
            }  
        }else{
            $this->gymnastView->showError();
        }
        
    }
}



