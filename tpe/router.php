<?php
require_once "Controller/GymnastController.php";
require_once "Controller/AparatosController.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

$params = explode('/', $action);

$gymnastController = new GymnastController();
$aparatosController = new AparatosController();


// determina que camino seguir según la acción
switch ($params[0]) {
    case 'home': 
        $gymnastController->showHome(); 
        $aparatosController->showHome();
        break;
    case 'addGymnast': 
        $gymnastController->addGymnast(); 
        break;
    case 'deleteGymnast': 
        $gymnastController->deleteGymnast($params[1]); 
        break;
    case 'viewGymnast': 
        $gymnastController->viewGymnast($params[1]); 
        break;
    case 'viewAparatos': 
        $gymnastController->viewAparatos(); 
        break;
    case 'viewGymnastByAparato': 
        $gymnastController->viewGymnastByAparato(); 
        break;
    case 'getEditForm': 
        $gymnastController->getEditForm($params[1]); 
        break;
    case 'editGymnast': 
        $gymnastController->editGymnast(); 
        break;
    case 'addAparato': 
        $aparatosController->addAparato(); 
        break;
    case 'deleteAparato': 
        $aparatosController->deleteAparato($params[1]); 
        break;
    case 'getEditFormAparato': 
        $aparatosController->getEditFormAparato($params[1]); 
        break;
    case 'editAparato': 
        $aparatosController->editAparato(); 
        break;
        
    default: 
        echo('404 Page not found'); 
        break;
}


?>