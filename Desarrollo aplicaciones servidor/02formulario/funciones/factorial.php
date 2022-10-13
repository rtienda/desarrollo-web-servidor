
<?php

/*
Formulario que reciba un número y devuelva su factorial.
*/

function factorial(int $factorial){

    $resultado=1;
    if($factorial>=1){
        for($i=1;$i<=$factorial;$i++){
            $resultado=$resultado*$i;
        }
        
    }else{
        $resultado=-1;
    }
    return $resultado;
}
?>