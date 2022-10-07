


<?php

/*
Formulario que reciba dos números. Devolver el resultado de elevar el primero al segundo.
*/

$base=$_GET["base"];
$exponente=$_GET["exponente"];
$resultado=1;
for($i=0;$i<$exponente;$i++){
    $resultado=$resultado*$base;
}

echo $resultado;
?>