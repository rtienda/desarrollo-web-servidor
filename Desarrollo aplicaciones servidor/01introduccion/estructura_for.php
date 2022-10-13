<h1>Estructura For</h1>

<ul>
<?php

    for($i = 1; $i <= 10 ; $i++){
        //echo "<li>$i</li>";
    }

    /*
        Mediante for mostrar la secuencia:
        5,10,15... hasta 50

    */
    
    for($i = 5; $i <= 50; $i=$i+5){
        //echo "<li>$i</li>"; 
    }

    /*
        Generar dos numeros aleatorios:
        - Uno entre 1 y 10
        - Otro entre 11 y 20

        Crear uun bucle for que se ejecute entre el primer numero y el segundo

        a = 4
        b = 12

        Resultado:
        4
        5
        6
        7
        ...
        12
        */
        $i = rand(1,10);
        $j = rand(11,20);

        for($z = $i;$z<=$j; $z++){
            echo "<li>$z</li>";
        }
?>
</ul>