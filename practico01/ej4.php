<?php 

if(!empty($_GET)){
$peso = (double)$_GET['peso'];
$altura =(double) $_GET['altura'];
$imc = $peso/$altura/$altura;
$minimo =18.50;
$normal =24.99;
$sobrepeso = 25;
$obesidad = 30;
if($imc < $minimo){
    echo ' <p> Bajo peso </p>';
}else{
    if($imc > $minimo && $imc <= $normal){
        echo ' <p>  normal </p>';
    }else{
        if($imc >= $sobrepeso && $imc < $obesidad){
            echo ' <p>  sobrepeso </p>';
        }else{
            echo ' <p>  obesidad </p>';
        }
    }
}
}
?>