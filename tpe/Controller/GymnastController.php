<?php
require_once "./Model/GymnastModel.php";
require_once "./View/GymnastView.php";

class GymnastController{

    private $model;
    private $view;

    function __construct(){
        $this->model = new GymnastModel();
        $this->view = new GymnastView();
    }

    function showHome(){
        $gymnasts = $this->model->getGymnasts();
        $this->view->showGymnasts($gymnasts);
    }

    function addGymnast(){
        if(!empty($_POST)){
            if($_POST['nombre']!="" && $_POST['nacionalidad']!=""  && ($_POST['altura']!="" && $_POST['altura'] >0)  && ($_POST['edad']!="" && $_POST['edad']>0) ){
                $this->model->insertGymnast($_POST['nombre'], $_POST['nacionalidad'], $_POST['id_aparato'],$_POST['altura'],$_POST['edad']);
                
            }
            $this->view->showHomeLocation();
        }    
    }

    function deleteGymnast($id){
        $this->model->deleteGymnastFromDB($id);
        $this->view->showHomeLocation();
    }
    
    function viewGymnast($id){
        $gymnast = $this->model->getGymnast($id);
        $this->view->showGymnast($gymnast);
    }
    function viewAparatos(){
       $aparatos = $this->model->getAparatos();
       $this->view->showAparatos($aparatos);
    }
    function viewGymnastByAparato(){
        if(!empty($_POST)){
            $gymnasts = $this->model-> getGymnastsByAparato($_POST['id_aparato']);
            $aparato = $this->model-> getAparato($_POST['id_aparato']);
            $this->view->showGymnastsByAparato($gymnasts, $aparato);
        }
        
    }
    function getEditForm($id){
        $gymnast = $this->model->getGymnast($id);
        $this->view->showEditForm($gymnast);
    }

    function editGymnast(){
        var_dump($_POST);
        if(!empty($_POST)){
            if($_POST['nombre']!="" && $_POST['nacionalidad']!=""  && $_POST['id_aparato'] !=""  && ($_POST['altura']!="" && $_POST['altura'] >0)  && ($_POST['edad']!="" && $_POST['edad']>0) ){
                $this->model->editGymnast($_POST['nombre'], $_POST['nacionalidad'],$_POST['id_aparato'],$_POST['altura'],$_POST['edad'], $_POST['id_gimnasta']);
                
            }
            $this->view->showHomeLocation();
        }  
    }
}
