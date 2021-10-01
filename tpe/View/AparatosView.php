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

    function showAparatosPublico($aparatos){
        $this->smarty->assign('titulo', 'Lista de Aparatos');
        $this->smarty->assign('aparatos', $aparatos);
        $this->smarty->display('templates/AparatosList.tpl');
     }

    function showEditForm($aparato){
        $this->smarty->assign('titulo', 'Editar Aparato:');
        $this->smarty->assign('aparato',$aparato);
        $this->smarty->display('EditAparatoForm.tpl');
    }

    function update(){
        header("Location: ".BASE_URL."administrarAparatos");
    }
}





