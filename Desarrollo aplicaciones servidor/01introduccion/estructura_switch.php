<h1>Estructura Switch</h1>

<?php
    //  rand(a,b) => numero aleatorio entre a y b
    $numero=rand(1,3);
    //echo "<p>El numero es $numero</p>";

    switch($numero){
        case 1:
            echo "<p>$numero es igual a 1</p>";
            break;
        case 2:
            echo "<p>$numero es igual a 2</p>";
            break;
        case 3:
            echo "<p>$numero es igual a 3</p>";
            break;
        
        }
        //ESTRUCTURA MATCH
        $dia = match($d) {
            "Monday" => "Lunes",
            "Tuesday" => "Martes",
            "Wednesday" => "Miércoles",
            "Thursday" => "Jueves",
        };

        /*
            Ejercicio notas con switch
        */
        $alumno = "Pepe";
        $nota= 5;

        switch($nota){
            case 0:
            case 1:
            case 2:
            case 3:
            case 4:
                echo "<p>$alumno ha suspendido</p>";
                break;
            case 5:
            case 6:
                echo "<p>$alumno ha aprobado</p>";
                break;
            case 7:
            case 8:
                echo "<p>$alumno ha sacado un notable</p>";
                break;
            default:
                echo "<p>$alumno ha sacado un sobresaliente</p>";
                break;  

        }

?>