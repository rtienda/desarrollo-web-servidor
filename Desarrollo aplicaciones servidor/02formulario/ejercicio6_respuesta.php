
<?php

/*
Formulario que reciba un número y devuelva su factorial.
*/

$factorial=$_GET["factorial"];
$resultado=1;
if($factorial>=1){
for($i=1;$i<=$factorial;$i++){
    $resultado=$resultado*$i;
}
echo "<p>El factorial de $factorial es $resultado</p>";
}else{
    echo "<p>El numero debe ser igual o mas que 1</p>";
}
?>