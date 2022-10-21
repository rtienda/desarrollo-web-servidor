<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica_01</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Practica 01</h1>
    <p id="ej1">Ejercicio 1</p>
    <form action="#ej1" method="post">
        <label>Primer numero</label>
        <input type="number" name="primerNumero" class="numberButton"><br></br>
        <label>Segundo numero</label>
        <input type="number" name="segundoNumero" class="numberButton"><br></br>
        <input type="hidden" name="f" value="ej1">
        <input type="submit" value="Enviar" class="button1">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if($_POST["f"]=="ej1"){
                require 'funciones/EsPrimo.php';
                $longitud = $_POST["primerNumero"];
                $inicial = $_POST["segundoNumero"];
                $contador=1;
                //$resultado=$numero2;
                
                
                    for($i=$inicial;$contador<=$longitud;$i++){
                        if(esPrimo($i)){
                           // echo (esPrimo($i))."</br>";
                            echo "$i, ";
                            $contador++;
                        }
                }

            }
        }

    ?>
    <div>-----------------------------</div>
    <p id="ej2">Ejercicio 2</p>
    <form action="#ej2" method="post">
        <label>Inserte DNI</label>
        <input type="text" name="dni"><br></br>
        <input type="hidden" name="f" value="ej2">
        <input type="submit" value="Enviar" class="button1">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if($_POST["f"]=="ej2"){
                require "funciones/dniValido.php";
                $dni=$_POST["dni"];
                if(dniValido($dni)){
                    echo "<p>El Dni $dni es valido</p>";
                }else{
                    echo "<p>El Dni no es valido</p>";
                }
            }
        }
    ?>

    <div>-----------------------------</div>
    <p id="ej2">Ejercicio 3</p>
        <form action="#ej2" method="post">
            
            <input type="hidden" name="f" value="ej3">
            <input type="submit" value="Enviar" class="button1" style="margin: bottom 20px;">
        </form>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if($_POST["f"]=="ej3"){
                require "funciones/ConstruyeTablas.php";
                multiplicarNumero();
            }
        }
    ?>

</body>
</html>