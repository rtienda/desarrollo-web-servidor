

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Ejercicios de clase de formularios</h1>
    <div>
    <table class="customTable">
        <tr>
            <th>Enunciado</th>
            <!-- <th style="min-width: 80px;">Enlace</th> -->
        </tr>
        <tr>
          <td><p id="ej1"><b>Ejercicio 1 </b>Formulario get/post</p>
            <form action="#ej1" method="post">
                <label>Nombre</label>
                <input type="text" name="nombre"><br></br>
                <label>Edad</label>
                <input type="text" name="edad"><br></br>
                <input type="hidden" name="f" value="ej1">
                <input type="submit" value="Enviar" class="button1">
            </form>
            <?php
                if($_SERVER["REQUEST_METHOD"]=="POST"){
                    if($_POST["f"]=="ej1"){
                        $nombre = $_POST["nombre"];
                        $edad = $_POST["edad"];
                        echo "<p>$nombre</p>";
                        echo "<p>$edad</p>";
                    }
                }
            ?>
          </td>
          <!-- <td><a href="ejercicios/ejercicio1.php"><button>Ejercicio1</button></a>
        
        </td> -->
        </tr>
        <tr>
            <td><b>Ejercicio 2 </b>Ejercicio de introducir un numero y pasarlo como parametro</td>
            <!-- <td><a href="ejercicios/ejercicio2.php"><button>Ejercicio2</button></a></td> -->
        </tr>
          <tr>
            <td><b>Ejercicio 3 </b>Crear un formulario que reciba el nombre y la edad de una persona y
                muestre por pantalla si es menor de edad, es adulta, o está jubilada en función
                a su edad. Además:
                    - Convertir la edad a un número entero
                    - Convertir el nombre introducido a minúsculas salvo la primera letra, que será mayúscula</td>
            <!-- <td><a href="ejercicios/ejercicio3.php"><button>Ejercicio3</button></a></td> -->
        </tr>
        <tr>
            <td><b>Ejercicio 4 </b>Crear un formulario que reciba una frase y un número del 1 al 6. Habrá que mostrar la frase
                en un encabezado de dicho número.
            
                Si introducimos "5" y "Hola mundo" se mostrará un encabezado h5Hola mundoh5</td>
            <!-- <td><a href="ejercicios/ejercicio4.php"><button>Ejercicio4</button></a></td> -->
        </tr>
        <tr>
            <td><p><b>Ejercicio 5 </b>Formulario que reciba dos números. Devolver el resultado de elevar el primero al segundo.</p> 
            <form action="" method="post" >
                <label>Base</label>
                <input type="number" name="base" class="numberButton"><br></br>
                <label>Exponente</label>
                <input type="number" name="exponente" class="numberButton"><br></br>
                <input type="hidden" name="f" value="ej5">
                <input type="submit" value="Enviar" class="button1">
            </form>
            <?php
                if($_SERVER["REQUEST_METHOD"]=="POST"){
                    if($_POST["f"]=="ej5"){
                        require 'funciones/potencia.php';
                        $base = $_POST["base"];
                        $exponente = $_POST["exponente"];
                        $resultado = potencia($base,$exponente);
                        if($resultado == -1){
                            echo "<p>El numero no puede ser negativo</p>";

                        }else{
                            echo "<p>El resultado es $resultado</p>";
                        }
                    }
                }
            ?>
            </td>
            <!-- <td><a href="ejercicios/ejercicio5.php"><button>Ejercicio5</button></a></td> -->
        </tr>
        <tr>
            <td><p id="ej6"><b>Ejercicio 6 </b>Formulario que reciba un número y devuelva su factorial.</p>
            <form action="#ej6" method="post" >
                <label>Factorial de:</label>
                <input type="number" name="factorial" class="numberButton"><br></br>
                <input type="hidden" name="f" value="ej6">
                <input type="submit" value="Enviar" class="button1">

            </form>
            <?php
                if($_SERVER["REQUEST_METHOD"]=="POST"){
                    if($_POST["f"]=="ej6"){
                        require 'funciones/factorial.php';
                        $factorial = $_POST["factorial"];
                        $resultado = factorial($factorial);
                        if($resultado == -1){
                            echo "<p>El numero no puede ser negativo o cero</p>";

                        }else{
                            echo "<p>El resultado es $resultado</p>";
                        }
                    }
                }
            ?>
            </td>
            <!-- <td><a href="ejercicios/ejercicio6.php"><button>Ejercicio6</button></a></td> -->
        </tr>
        <tr>
        <td><p id="ej8"><b>Ejercicio 8 </b>Crear un formulario que reciba un número. Mostrar la tabla de multiplicar de ese número.</p>
            <form action="#ej8" method="post" >
                <label>Tabla de multiplicar de:</label>
                <input type="number" name="numero" class="numberButton"><br></br>
                <input type="hidden" name="f" value="ej8">
                <input type="submit" value="Enviar" class="button1">

            </form>
            <?php
                if($_SERVER["REQUEST_METHOD"]=="POST"){
                    if($_POST["f"]=="ej8"){
                        $numero = $_POST["numero"];

                        

                        //$resultado = factorial($factorial);
                        if($numero == -1){
                            echo "<p>El numero no puede ser negativo o cero</p>";

                        }else{
                            echo "<table class='customTable'>";
                            echo "<tr><th>Operacion</th><th>Resultado</th></tr>";
                            for($i=1;$i<=10;$i++){
                                $resultado=$numero*$i;
                                echo "<tr><td>$numero x $i</td><td>$resultado</td></tr>";
                            }
                            echo "</table>";
                        
                        }
                    }
                }
            ?>
            </td>

        <tr>

      </table>
    </div>
</body>
</html>