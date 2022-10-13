


<?php

/*
Formulario que reciba dos números. Devolver el resultado de elevar el primero al segundo.
*/

$base=$_GET["base"];
$exponente=$_GET["exponente"];
$resultado=1;
if($exponente<0){
    echo"<p>El exponente debe ser positivo</p>"

}else if ($exponente==1){
    echo "<p>$resultado</p>";
}else{

    for($i=0;$i<$exponente;$i++){
        $resultado=$resultado*$base;
    }
    echo $resultado;
}


?>