<h1>Ejercicios</h1>

<?php
    echo "<p>Esto funciona</p>";

    /*
        Vamos a generar 10 numeros aleatorios entre 1 y 10
        Mostrar dichos numeros indicando si son pares o impares
        Mostrarlos  en una lista

    */
    echo "<ul>";
    for($i=0;$i<=10;$i++){
        $number=rand(1,10);
        if($number%2==0){
            echo "<li>El $number es par</li>";
        }else{
            echo "<li>El $number es impar</li>";
        }
    }
    echo "</ul>";

    /*
        Ejercicio 2
        Imprimir los multiplos de 3 entre 0 y 30 en formato array
        [3,6,9...30]

    */

    echo "<p>[";

    for($i=3;$i<=30;$i=$i+3){
        if($i==30){
            echo "$i";
        }else{
            echo "$i,";
        }
    }
    echo "]</p>";

?>