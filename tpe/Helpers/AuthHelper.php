<?php

class AuthHelper{

    function __construct(){
    }

    function checkLoggedIn(){
        session_start();
        if(!isset($_SESSION["nombre"])){
            header("Location: ".BASE_URL."login");
        }

    }

    function checkRol(){
        if(session_status() === PHP_SESSION_NONE) session_start();

        if(isset($_SESSION['rol'])){
            return $_SESSION['rol'];
        }
    }

    function checkUserId(){
        if(session_status() === PHP_SESSION_NONE) session_start(); 
        if(isset($_SESSION['idUser'])){
            return $_SESSION['idUser'];
        }
    }

}