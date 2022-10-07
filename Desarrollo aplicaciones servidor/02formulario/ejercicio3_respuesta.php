


<?php

    /*
        Crear un formulario que reciba el nombre y la edad de una persona y
        muestre por pantalla si es menor de edad, es adulta, o está jubilada en función
        a su edad. Además:
            - Convertir la edad a un número entero
            - Convertir el nombre introducido a minúsculas salvo la primera letra, que será mayúscula
    */

    $nombre=$_GET["nombre"];
    $edad=$_GET["edad"];
    
    $nombre=ucwords(strtolower($nombre));
    $edad=intval($edad);

    if($edad<18){
        echo "<p>$nombre es menor de edad";
    }else if($edad>64){
        echo "<p>$nombre es jubilado";
    }else{
        echo "<p>$nombre es adulte";
    }
    


?>