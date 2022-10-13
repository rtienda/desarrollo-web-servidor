<?php
    
    /*
    Crear un formulario que reciba un numero
    Habra que crear una lista con tantos numeros como se haya indicado
    Numero = 3
    <ul>
        <li>1</li>
        <li>2</li>
        <li>3</li>
    </ul>
    */
    $numero=$_GET["numero"];
    echo "<ul>";
    for($i=0;$i<=$numero;$i++){
        echo "<li> $i</li>";
    }
    echo "</ul>";


?>