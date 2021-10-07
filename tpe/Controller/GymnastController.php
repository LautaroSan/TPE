<?php
require_once "./Model/GymnastModel.php";
require_once "./View/GymnastView.php";
require_once "Helpers/AuthHelper.php";

class GymnastController{

    private $model;
    private $view;
    private $authHelper;

    function __construct(){
        $this->model = new GymnastModel();
        $this->view = new GymnastView();
        $this->authHelper = new AuthHelper();
    }

    function showHome(){
        $this->authHelper->checkLoggedIn();
        $this->view->showHome();
        
    }

    function showGymnasts(){
        $this->authHelper->checkLoggedIn();
        $gymnasts = $this->model->getGymnasts();
        $aparatos = $this->model->getAparatos();
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
        $this->view->showGymnast($gymnast);
    }
    function viewGymnastByAparato(){
        if(!empty($_POST)){
            $gymnasts = $this->model-> getGymnastsByAparato($_POST['id_aparato']);
            $aparato = $this->model-> getAparato($_POST['id_aparato']);
            $this->view->showGymnastsByAparato($gymnasts, $aparato);
        }
        
    }
    function getEditForm($id){
        $this->authHelper->checkLoggedIn();
        $gymnast = $this->model->getGymnast($id);
        $aparatos = $this->model->getAparatos();
        $this->view->showEditForm($gymnast,$aparatos);
    }

    function editGymnast(){
        $this->authHelper->checkLoggedIn();
        var_dump($_POST);
        if(!empty($_POST)){
            if($_POST['nombre']!="" && $_POST['nacionalidad']!=""  && $_POST['id_aparato'] !=""  && ($_POST['altura']!="" && $_POST['altura'] >0)  && ($_POST['edad']!="" && $_POST['edad']>0) ){
                $this->model->editGymnast($_POST['nombre'], $_POST['nacionalidad'],$_POST['id_aparato'],$_POST['altura'],$_POST['edad'], $_POST['id_gimnasta']);
                
            }
            $this->view->update();
        }  
    }
}
