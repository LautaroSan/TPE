<?php
require_once 'libs\smarty-3.1.39\libs\Smarty.class.php';

class GymnastView {
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showGymnasts($gymnasts,$aparatos){
        $this->smarty->assign('titulo', 'Lista de Gimnastas Masculinos');        
        $this->smarty->assign('gymnasts', $gymnasts);
        $this->smarty->assign('aparatos', $aparatos);
        $this->smarty->display('templates/GymnastsTable.tpl');
    }

    function showPublicList ($gymnasts){
        $this->smarty->assign('titulo', 'Lista de Gimnastas Masculinos');
        $this->smarty->assign('gymnasts', $gymnasts);
        $this->smarty->display('templates/GymnastsPublicList.tpl');
    }

    function showGymnast($gymnast,$rol,$userId){
        $this->smarty->assign('gymnast', $gymnast);
        $this->smarty->assign('rol', $rol);
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

     function showHome($rol){
         $this->smarty->assign('rol', $rol);
        $this->smarty->assign("titulo", "Bienvenido");
        $this->smarty->display('templates/home.tpl');
     }

    function update(){
        header("Location: ".BASE_URL."administrarGymnasts");
    }

    
}