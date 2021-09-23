<?php
if(!empty($_GET)){
    $monto = $_GET['monto'];
    $interes = $_GET['interes'];
    echo '<table>';
    for ($i=0; $i <12 ; $i++) { 
        $total = $monto * ((100 + $interes)/100);
        echo '<tr>';
            echo '<td>'. $monto . '</td>';
            echo '<td>'. $interes . '</td>';
            echo '<td>'. $total . '</td>';
        $monto = $total;
        echo '</tr>';
    }
}




?>