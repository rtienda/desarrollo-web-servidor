<?php
    echo date("l j \of Y");


    /*
        Mostrar el formatoo de fecha y hora igual que el reloj del ordenador

        10:38
        06/10/2022
    */
    echo "<p>".date("G\:i")."</p>";
    echo "<p>".date("h\:i A")."</p>";
    echo "<p>".date("d\/m\/Y")."</p>";

    /*
        Usar la estructura switch para mostrar el dia actual enn español

    */

    $dia_actual=date("l");
    $mes=date("F");
    echo $dia_actual;
    echo "</br>";
    echo $mes;
    switch($dia_actual):

        case "Monday":
            $dia_actual="Lunes";
            break;
        case "Tuesday":
            $dia_actual="Martes";
            break;
        case "Wenesday":
            $dia_actual="Miercoles";
            break;
        case "Thursday":
            $dia_actual="Jueves";
            break;
        case "Friday":
            $dia_actual="Viernes";
            break;
        case "Saturday":
            $dia_actual="Sabado";
            break;
        case "Sunday":
            $dia_actual="Domingo";
            break;
        endswitch;
    echo "</br>";
    echo $dia_actual;

    switch($mes):
        case "January":
            $mes="Enero";
            break;
        case "February":
            $mes="Febrero";
            break;
        case "March":
            $mes="Marzo";
            break;
        case "April":
            $mes="Abril";
            break;
        case "May":
            $mes="Mayo";
            break;
        case "June":
            $mes="Junio";
            break;
        case "July":
            $mes="Julio";
            break;
        case "August":
            $mes="Agosto";
            break;
        case "September":
            $mes="Septiembre";
            break;
        case "October":
            $mes="Octubre";
            break;
        case "November":
            $mes="Noviembre";
            break;
        case "December":
            $mes="Diciembre";
            break;
    endswitch;
    echo "</br>";
    echo $mes;


?>