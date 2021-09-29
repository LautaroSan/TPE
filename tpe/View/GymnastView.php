<?php
require_once 'libs\smarty-3.1.39\libs\Smarty.class.php';

class GymnastView {
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showGymnasts($gymnasts){
        $this->smarty->assign('titulo', 'Lista de Gimnastas Masculinos');        
        $this->smarty->assign('gymnasts', $gymnasts);

        $this->smarty->display('templates/GymnastsTable.tpl');
    }

    function showGymnast($gymnast){
        $this->smarty->assign('gymnast', $gymnast);
        $this->smarty->display('templates/GymnastDetail.tpl');
     }

     function showAparatos($aparatos){
        $this->smarty->assign('titulo', 'Lista de Aparatos');
        $this->smarty->assign('aparatos', $aparatos);
        $this->smarty->display('templates/AparatosList.tpl');
     }
     function showGymnastsByAparato($gymnasts,$aparato){
        $this->smarty->assign('titulo', 'Gimnastas especialistas en ');
        $this->smarty->assign('aparato', $aparato);
        $this->smarty->assign('gymnasts', $gymnasts);
        $this->smarty->display('templates/GymnastsByAparato.tpl');
     }
     function showEditForm($gymnast){
         $this->smarty->assign('titulo', 'Editar Gimnasta:');
         $this->smarty->assign('gymnast',$gymnast);
         $this->smarty->display('EditGymnastForm.tpl');
     }

    function showHomeLocation(){
        header("Location: ".BASE_URL."home");
    }

    
}