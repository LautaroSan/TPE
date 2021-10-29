<?php

require_once 'libs/Router.php';
require_once 'Controller/ApiComentariosController.php';

// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('gimnastas/:ID/comentarios', 'GET', 'ApiComentariosController', 'obtenerComentarios');
//$router->addRoute('gimnastas/:ID/comentarios', 'GET', 'ApiComentariosController', 'obtenerComentario');
$router->addRoute('gimnastas/:ID/comentarios', 'DELETE', 'ApiComentariosController', 'eliminarComentario');
$router->addRoute('gimnastas/comentarios', 'POST', 'ApiComentariosController', 'insertarComentario');

// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);