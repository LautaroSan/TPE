<?php
require_once "./Model/UserModel.php";
require_once "./View/LoginView.php";
require_once "./Model/AparatosModel.php";
require_once "Helpers/AuthHelper.php";


class LoginController{
    private $model;
    private $view;
    private $aparatosModel;
    private $authHelper;

    function __construct(){
        $this->model= new UserModel();
        $this->view = new LoginView();
        $this->aparatosModel = new AparatosModel();
        $this->authHelper = new AuthHelper();
        $this->chequearAdmin = $this->authHelper->checkRol()=="admin";
        $this->gymnastView = new GymnastView();
        
    }

    function showLogin(){
        $aparatos = $this->aparatosModel->getAparatos();
        $this->view->showLogin($aparatos);
    }

    function logout(){
        if(session_status() === PHP_SESSION_NONE) session_start();
        session_destroy();
        $aparatos = $this->aparatosModel->getAparatos();
        $this->view->showLogin($aparatos,"Te deslogueaste!");
    }

    function verifyLogin(){
        if(!empty($_POST['nombre']) && !empty($_POST['password'])){
            $nombre = $_POST['nombre'];
            $pass = $_POST['password'];

            $user = $this->model->getUser($nombre);
            if($user && password_verify($pass, $user->clave)){
                session_start();
                $_SESSION['nombre'] = $nombre;
                $_SESSION['rol'] = $user->rol;
                $_SESSION['idUser'] = $user->id;
                $this->view->showHome();
            }else{
                $aparatos = $this->aparatosModel->getAparatos();
                $this->view->showLogin($aparatos,"Acceso denegado");
            }
        }
    }

    function register(){
        if(!empty($_POST['nombre']) && !empty($_POST['password'])) {
            $nombre = $_POST['nombre'];
            $pass = password_hash($_POST['password'],PASSWORD_BCRYPT);

            $users = $this->model->getUsers();
            $aparatos = $this->aparatosModel->getAparatos();
            if(!$this->existe($users,$nombre)){
                $this->model->addUser($nombre,$pass);
               $this->verifyLogin($nombre,$_POST['password'] );
            }else{
                $this->view->showLogin($aparatos,"nombre de usuario ya existe");
            }
        }
        
    }

    function existe ($users,$nombre){
        foreach ($users as $user) {
            if(strtolower($user->nombre) == strtolower( $nombre)){
                return true;
            }
        }
        return false;
    }

    function showRegisterForm(){
        $this->view->showRegisterForm();
    }

    function showHome (){
        $this->view->showHome();    
    }

    function showUsers(){
        $this->authHelper->checkLoggedIn();
        if($this->chequearAdmin){
            $users = $this->model->getUsers();
            $this->view->showUsers($users);
        }else{
            $this->gymnastView->showError();
        }
        
    }

    function otorgarPermiso($id){
        $this->authHelper->checkLoggedIn();
        if($this->chequearAdmin){
            if(!empty($_POST)){
                $permiso = $_POST['permiso'];
            }
            $this->model->otorgarPermiso($permiso,$id);
            $this->view->update();  
        }else{
            $this->gymnastView->showError();
        }
        
    }

    function deleteUser($id){
        $this->authHelper->checkLoggedIn();
        if($this->chequearAdmin){
            $this->model->deleteUser($id);
            $this->view->update();
        }else{
            $this->gymnastView->showError();
        }
        

    }

}

