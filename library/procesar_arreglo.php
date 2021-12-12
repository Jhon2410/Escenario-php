<?php
function Procesar($arr, $f,$c ,$estado){

    if($arr[$f -1][$c - 1] == "L"){
        $arr[$f -1][$c - 1] = $estado; 
        echo '<div class="alert p-3 position-absolute top-50 start-50 translate-middle alert-success col-6 mx-auto" role="alert">
  agregada con exito
</div>';
    }else if($arr[$f -1][$c - 1] == "V"){
        echo '<div class="alert p-3 position-absolute top-50 start-50 translate-middle alert-danger col-6 mx-auto" role="alert">
  La posicion ya esta Vendida
</div>';
    }else if($arr[$f -1][$c - 1] == "R"){
          $arr[$f -1][$c - 1] = $estado;
          echo '<div class="alert p-3 position-absolute top-50 start-50 translate-middle alert-warning col-6 mx-auto" role="alert">
  Cambiado con exito
</div>';
    }
    return $arr;   
}

function acomodar($puestos){
    $p = [];
    
    for($i = 0; $i<5; $i++){
        for($j = 0; $j < 5; $j++){ 
            $p[$i][$j] = $puestos[5*$i+$j]; 
        }
    }
    return $p;
}
