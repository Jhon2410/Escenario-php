<?php
 function imprimir($puestos){
    $aux = 1;
     $cantidades = [0,0,0]; 
    foreach ($puestos as $filas){
       
        echo "<tr><td>$aux </td>";
        foreach ($filas as $columnas ){
            if($columnas=="L"){
                $cantidades[0]++;
                echo "<td style=color:green; padding:5px; margin:1px;'>$columnas</td>" ;
            }
            if($columnas=="R"){
                $cantidades[1]++;
                echo "<td style=color:yellow; padding:5px; margin:1px;'>$columnas</td>" ;
            }
            if($columnas=="V"){
                $cantidades[2]++;
                echo "<td style=color:red; padding:5px; margin:1px;'>$columnas</td>" ;
            }
            
        }
        $aux++;
        echo "</tr>";
       
    }

    
    echo "<div class='text-center pb-2 text-uppercase '> <span style=color:green;>$cantidades[0] Libres</span> <span style=color:yellow;>$cantidades[1] Reservados </span> <span style=color:red;>$cantidades[2] Vendidos </span></div>";
}


