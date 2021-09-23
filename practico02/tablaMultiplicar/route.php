<?php
require_once "ej5.php";
require_once "home.php";

if(isset($_GET['action'])){
    if($_GET['action']!=""){
        $action = $_GET['action'];
    }
    else{
        $action= 'home';  
    }
}

$params = explode('/', $action);

switch ($params[0]) {
    case 'tabla': 
        showTabla($params[1]);
        break;
    case 'home': 
        showHome(); 
        break;
    default: 
        echo('404 Page not found'); 
        break;
}






?>