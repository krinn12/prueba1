
<?php

    for ($i=0; $i < 8; $i++) { 
        for ($j=0; $j < 8; $j++) { 
             $lugar = array_rand(array_flip($piezasDisponibles));
             $tablero[$i][$j] = $lugar;
        }
    }

    echo '<table id="table">';
    
    for ($i=0; $i < 8; $i++) { 
        echo '<tr class="tr">';
        for ($j=0; $j < 8; $j++) { 
            echo '<td class="td"><img class="img" src="img/' . $tablero[$i][$j] . '.jpg"></td>';
        }
        echo '</tr>';
    }

    echo '</table>';
?>
