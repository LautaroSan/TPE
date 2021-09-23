<?php

class AparatosView{

    private $smarty;

    function __construct(){
        $this-> smarty = new smarty();
    }

    function showAparatos($aparatos){
        $this->smarty->assign('titulo', 'Lista de Aparatos');        
        $this->smarty->assign('aparatos', $aparatos);

        $this->smarty->display('templates/AparatosTable.tpl');
    }
    function showEditForm($aparato){
        $this->smarty->assign('titulo', 'Editar Aparato:');
        $this->smarty->assign('aparato',$aparato);
        $this->smarty->display('EditAparatoForm.tpl');
    }

    function showHomeLocation(){
        header("Location: ".BASE_URL."home");
    }
}





