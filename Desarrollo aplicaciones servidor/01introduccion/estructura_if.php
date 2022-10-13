<h1>Estructura IF<h1>

<?php
    $numero = -4;

    if ($numero > 0){
        echo "<p> El número es positivo</p>";
    } else if ($numero < 0){
        echo "<p>El numero es negativo</p>";
    }else{
        echo "<p>El numero es cero</p>";
    }

    if($numero % 2 ==0){
        echo "<p>El numero $numero es par</p>";
    }else{
        echo "<p>El numero $numero es impar</p>";
    }

    /*
        Crear una variable $alumno y una variable $nota
        Mostrar por pantalla el nombre del alumno junto a su calificacion. 
        Su calificacion será:
            - Suspenso si es menos que 5
            - Aprobado si esta entre 5 y 6
            - Notable si esta entre 7 y 8
            - Sobresaliente si esta entre 9 y 10

    */

    $alumno = "Pepe";
    $nota = 9;
    
    echo "<p>Alumno: $alumno</p>";
    echo "<p>Ha sacado un ";
    if($nota<5&&$nota>=0){
        echo "suspenso";
    }else if($nota<=6&&$nota>=5){
        echo "aprobado";
    }else if($nota<=8&&$nota>=7){
        echo "notable";
    }else if($nota<=10&&$nota>=9){
        echo "sobresaliente";
    }else{
        echo "error";
    }
    echo "</p>";

    /*
        Crear dos variables:
        $usuario = "admin"
        $contraseña = "123"

        Si $usuario y $contraseña son correctos, mostrar el mensaje "Sesion iniciada"
        Si $usuario o "contraseña son erroneos, mostrar los mensajes aadecuados
    */
    echo "</br>";
    echo "</br>";
    echo "</br>";
    $usuario = "admin";
    $contrasenia = "123";

    if($usuario!="admin"){
        echo "<p>Usuario no existe</p>";
    }else if($contrasenia!="123"){
        echo "<p>Contraseña incorrecta</p>";
    }else if($usuario=="admin"&&$contrasenia=="123"){
        echo "<p>Sesion iniciada</p>";
    }

?>