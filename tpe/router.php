<?php
require_once "Controller/GymnastController.php";
require_once "Controller/AparatosController.php";
require_once "Controller/LoginController.php";


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'login'; // acción por defecto si no envían
}

$params = explode('/', $action);

$gymnastController = new GymnastController();
$aparatosController = new AparatosController();
$loginController = new LoginController();



// determina que camino seguir según la acción
switch ($params[0]) {
    case 'login': 
        $loginController->showLogin();
        break;
    case 'verify': 
        $loginController->verifyLogin();
        break;
    case 'logout': 
        $loginController->logout();
        break;
    case 'showRegisterForm': 
        $loginController->showRegisterForm();
        break;
    case 'register': 
        $loginController->register();
        break;
    case 'verListaPublica': 
        $gymnastController->showGymnastsList();
        break;
    case 'viewGymnast': 
        $gymnastController->viewGymnast($params[1]); 
        break;
    case 'viewAparatos': 
        $aparatosController->showAparatosPublico(); 
        break;
    case 'viewGymnastByAparato': 
        $gymnastController->viewGymnastByAparato(); 
        break;
    case 'home': 
        $gymnastController->showHome();
        break;
    case 'administrarGymnasts':
        $gymnastController->showGymnasts(); 
        break;
    case 'administrarAparatos':
        $aparatosController->showAparatos(); 
        break;    
    case 'addGymnast': 
        $gymnastController->addGymnast(); 
        break;
    case 'deleteGymnast': 
        $gymnastController->deleteGymnast($params[1]); 
        break;
    case 'getEditForm': 
        $gymnastController->getEditForm($params[1]); 
        break;
    case 'editGymnast': 
        $gymnastController->editGymnast(); 
        break;
    case 'busquedaAvanzada': 
        $gymnastController->busquedaAvanzada(); 
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
    case 'administrarUsuarios': 
        $loginController->showUsers(); 
        break;
    case 'otorgarPermiso': 
        $loginController->otorgarPermiso($params[1]); 
        break;
    case 'deleteUser': 
        $loginController->deleteUser($params[1]); 
        break;
        
        
        
    default: 
        echo('404 Page not found'); 
        break;
}


?>