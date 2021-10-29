<?php
require_once "./Model/GymnastModel.php";
require_once "./View/GymnastView.php";
require_once "Helpers/AuthHelper.php";
require_once "./Model/AparatosModel.php";

class GymnastController{

    private $model;
    private $view;
    private $authHelper;
    private $aparatosModel;

    function __construct(){
        $this->model = new GymnastModel();
        $this->view = new GymnastView();
        $this->authHelper = new AuthHelper();
        $this->aparatosModel = new AparatosModel();
    }

    function showHome(){
        $this->authHelper->checkLoggedIn();
        $rol= $this->authHelper->checkRol();
        $this->view->showHome($rol);
        
    }

    function showGymnasts(){
        $this->authHelper->checkLoggedIn();
        $gymnasts = $this->model->getGymnasts();
        $aparatos = $this->aparatosModel->getAparatos();
        $this->view->showGymnasts($gymnasts, $aparatos);
    }

    function showGymnastsList(){
        $gymnasts = $this->model->getGymnasts();
        $this->view->showPublicList($gymnasts);
    }

    function addGymnast(){
        $this->authHelper->checkLoggedIn();
        if(!empty($_POST)){
            if($_POST['nombre']!="" && $_POST['nacionalidad']!=""  && ($_POST['altura']!="" && $_POST['altura'] >0)  && ($_POST['edad']!="" && $_POST['edad']>0) ){
                $this->model->insertGymnast($_POST['nombre'], $_POST['nacionalidad'], $_POST['id_aparato'],$_POST['altura'],$_POST['edad']);
                
            }
            $this->view->update();
        }    
    }

    function deleteGymnast($id){
        $this->authHelper->checkLoggedIn();
        $this->model->deleteGymnastFromDB($id);
        $this->view->update();
    }
    
    function viewGymnast($id){
        $gymnast = $this->model->getGymnast($id);
        $rol= $this->authHelper->checkRol();
        $userId = $this->authHelper->checkUserId();
        $this->view->showGymnast($gymnast,$rol,$userId);
    }
    function viewGymnastByAparato(){
        if(!empty($_POST)){
            $gymnasts = $this->model-> getGymnastsByAparato($_POST['id_aparato']);
            $aparato = $this->aparatosModel-> getAparato($_POST['id_aparato']);
            $this->view->showGymnastsByAparato($gymnasts, $aparato);
        }
        
    }
    function getEditForm($id){
        $this->authHelper->checkLoggedIn();
        $gymnast = $this->model->getGymnast($id);
        $aparatos = $this->aparatosModel->getAparatos();
        $this->view->showEditForm($gymnast,$aparatos);
    }

    function editGymnast(){
        $this->authHelper->checkLoggedIn(); 
        if(!empty($_POST)){
            if($_POST['nombre']!="" && $_POST['nacionalidad']!=""  && $_POST['id_aparato'] !=""  && ($_POST['altura']!="" && $_POST['altura'] >0)  && ($_POST['edad']!="" && $_POST['edad']>0) ){
                $this->model->editGymnast($_POST['nombre'], $_POST['nacionalidad'],$_POST['id_aparato'],$_POST['altura'],$_POST['edad'], $_POST['id_gimnasta']);
                
            }
            $this->view->update();
        }  
    }
}
