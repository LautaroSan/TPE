<?php
require_once "./Model/UserModel.php";
require_once "./View/LoginView.php";


class LoginController{
    private $model;
    private $view;

    function __construct(){
        $this->model= new UserModel();
        $this->view = new LoginView();
        
    }

    function showLogin(){
        $this->view->showLogin();
    }

    function logout(){
        session_start();
        session_destroy();
        $this->view->showLogin("Te deslogueaste!");
    }

    function verifyLogin(){
        if(!empty($_POST['nombre']) && !empty($_POST['password'])){
            $nombre = $_POST['nombre'];
            $pass = $_POST['password'];

            $user = $this->model->getUser($nombre);
            if($user && password_verify($pass, $user->clave)){
                session_start();
                $_SESSION['nombre'] = $nombre;
                $this->view->showHome();
            }else{
                $this->view->showLogin("Acceso denegado");
            }
        }
    }

    function register(){
        if(!empty($_POST['nombre']) && !empty($_POST['password'])) {
            $nombre = $_POST['nombre'];
            $pass = password_hash($_POST['password'],PASSWORD_BCRYPT);

            $users = $this->model->getUsers();
            if(!$this->existe($users,$nombre)){
                $this->model->addUser($nombre,$pass);
                $this->view->showLogin("cuenta creada satisfactoriamente");
            }else{
                $this->view->showLogin("nombre de usuario ya existe");
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
}

