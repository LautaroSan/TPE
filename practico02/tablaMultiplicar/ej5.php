<?php

function showTabla ( $limite ){
        echo'<table>';
        for ($i=1; $i <=$limite ; $i++) { 
            echo '<tr>' ;
            for ($b=1; $b <= $limite; $b++) { 
                $td = $i *$b;
                echo '<td>'. $td. '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
}

?>