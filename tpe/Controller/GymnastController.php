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
        $this->chequearAdmin = $this->authHelper->checkRol()=="admin";
    }

    function showHome(){
        $this->authHelper->checkLoggedIn();
        $this->view->showHome();
        
    }

    function showGymnasts(){
        $this->authHelper->checkLoggedIn();
        if($this->chequearAdmin){
            $gymnasts = $this->model->getGymnasts();
            $aparatos = $this->aparatosModel->getAparatos();
            $this->view->showGymnasts($gymnasts, $aparatos);
        }else{
            $this->view->showError();
        }
        
    }

    function showGymnastsList(){
        if(!isset($_GET['page'])){
            $page = 0;
        }else{
            $page = $_GET['page'];
        }
        $gymnasts = $this->model->getGymnastsPaginated($page);
        $ultimaPag = count($gymnasts)/5;
        $this->view->showPublicList($gymnasts,$page,$ultimaPag);
    }

    function addGymnast(){
        $this->authHelper->checkLoggedIn();
        if($this->chequearAdmin){
            if(!empty($_POST)){
                if($_POST['nombre']!="" && $_POST['nacionalidad']!=""  && ($_POST['altura']!="" && $_POST['altura'] >0)  && ($_POST['edad']!="" && $_POST['edad']>0) ){
                    if($_FILES['gymnast_image']['type'] == "image/jpg" || $_FILES['gymnast_image']['type'] == "image/jpeg" 
                    || $_FILES['gymnast_image']['type'] == "image/png" ) {
                        $this->model->insertGymnast($_POST['nombre'], $_POST['nacionalidad'], $_POST['id_aparato'],$_POST['altura'],$_POST['edad'],$_FILES['gymnast_image']['tmp_name']);

                    }else{
                        $this->model->insertGymnast($_POST['nombre'], $_POST['nacionalidad'], $_POST['id_aparato'],$_POST['altura'],$_POST['edad']);
                    }

                    
                }
                $this->view->update();
            }
        }else{
            $this->view->showError(); 
        }
            
    }

    function deleteGymnast($id){
        $this->authHelper->checkLoggedIn();
        if($this->chequearAdmin){
            $this->model->deleteGymnastFromDB($id);
            $this->view->update();
        }else{
            $this->view->showError(); 
        }
        
    }
    
    function viewGymnast($id){
        $gymnast = $this->model->getGymnast($id);
        $userId = $this->authHelper->checkUserId();
        $this->view->showGymnast($gymnast,$userId);
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
        if($this->chequearAdmin){
            $gymnast = $this->model->getGymnast($id);
            $aparatos = $this->aparatosModel->getAparatos();
            $this->view->showEditForm($gymnast,$aparatos);
        }else{
            $this->view->showError();
        }
        
    }

    function editGymnast(){
        $this->authHelper->checkLoggedIn();
        if($this->chequearAdmin){
            if(!empty($_POST)){
                if($_POST['nombre']!="" && $_POST['nacionalidad']!=""  && $_POST['id_aparato'] !=""  && ($_POST['altura']!="" && $_POST['altura'] >0)  && ($_POST['edad']!="" && $_POST['edad']>0) ){
                    if($_FILES['gymnast_image']['type'] == "image/jpg" || $_FILES['gymnast_image']['type'] == "image/jpeg" 
                    || $_FILES['gymnast_image']['type'] == "image/png" ) {
                        var_dump($_FILES);
                        $this->model->editGymnast($_POST['nombre'], $_POST['nacionalidad'],$_POST['id_aparato'],$_POST['altura'],$_POST['edad'], $_POST['id_gimnasta'],$_FILES['gymnast_image']['tmp_name'] );

                    }else{
                        $this->model->editGymnast($_POST['nombre'], $_POST['nacionalidad'],$_POST['id_aparato'],$_POST['altura'],$_POST['edad'], $_POST['id_gimnasta']);
                    }
                    
                    
                }
                $this->view->update();
            }  
        }else{
            $this->view->showError();
        }
        
    }

    function busquedaAvanzada(){
        $this->authHelper->checkLoggedIn();
        if(empty($_POST['nacionalidad']) && empty($_POST['alturaMayor']) && empty($_POST['alturaMenor']) && empty($_POST['edadMayor']) && empty($_POST['edadMenor'])){
            $error = "Debes especificar al menos un criterio de Búsqueda";
            $this->view->mostrarFiltrados($error);
        }else{
            $gymnasts = $this->model->busquedaAvanzadaGymnast($_POST['nacionalidad'],$_POST['alturaMayor'],$_POST['alturaMenor'],$_POST['edadMayor'],$_POST['edadMenor']);
            $this->view->mostrarFiltrados("",$gymnasts);
        }
        
    }
}
