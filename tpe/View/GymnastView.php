<?php
require_once 'libs\smarty-3.1.39\libs\Smarty.class.php';

class GymnastView {
    private $smarty;
    private $rol;
    private $authHelper;

    function __construct() {
        $this->smarty = new Smarty();
        $this->authHelper = new AuthHelper();
        $this->rol = $this->authHelper->checkRol();
    }

    function showGymnasts($gymnasts,$aparatos){
        $this->smarty->assign('titulo', 'Lista de Gimnastas Masculinos');        
        $this->smarty->assign('gymnasts', $gymnasts);
        $this->smarty->assign('aparatos', $aparatos);
        $this->smarty->display('templates/GymnastsTable.tpl');
    }

    function showPublicList ($gymnasts,$page,$ultimaPag){
        $this->smarty->assign('titulo', 'Lista de Gimnastas Masculinos');
        $this->smarty->assign('gymnasts', $gymnasts);
        $this->smarty->assign('page', $page);
        $this->smarty->assign('rol', $this->rol);
        $this->smarty->assign('ultimaPag', $ultimaPag);
        $this->smarty->display('templates/GymnastsPublicList.tpl');
    }

    function showGymnast($gymnast,$userId){
        $this->smarty->assign('gymnast', $gymnast);
        $this->smarty->assign('rol',  $this->rol);
        $this->smarty->assign('userId', $userId);
        $this->smarty->display('templates/GymnastDetail.tpl');
     }
     
     function showGymnastsByAparato($gymnasts,$aparato){
        $this->smarty->assign('titulo', 'Gimnastas especialistas en ');
        $this->smarty->assign('aparato', $aparato);
        $this->smarty->assign('gymnasts', $gymnasts);
        $this->smarty->display('templates/GymnastsByAparato.tpl');
     }
     function showEditForm($gymnast,$aparatos){
         $this->smarty->assign('titulo', 'Editar Gimnasta:');
         $this->smarty->assign('gymnast',$gymnast);
         $this->smarty->assign('aparatos', $aparatos);
         $this->smarty->display('EditGymnastForm.tpl');
     }

     function showHome(){
         $this->smarty->assign('rol',  $this->rol);
        $this->smarty->assign("titulo", "Bienvenido");
        $this->smarty->display('templates/home.tpl');
     }

    function update(){
        header("Location: ".BASE_URL."administrarGymnasts");
    }

    function mostrarFiltrados($error ="",$gymnasts=[]){
        $this->smarty->assign('titulo', 'Busqueda Avanzada De Gimnastas');
        $this->smarty->assign('error',$error);
        $this->smarty->assign('gymnasts', $gymnasts);
        $this->smarty->display('templates/filtrados.tpl');

    }

    function showError(){
        $this->smarty->assign('titulo', "Error de Permisos");
        $this->smarty->display('errorDePermisos.tpl');
    }

    
}