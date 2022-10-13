

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
            <th style="min-width: 80px;">Enlace</th>
        </tr>
        <tr>
          <td><p id="ej1">Formulario get/post</p>
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
          <td><a href="ejercicios/ejercicio1.php"><button>Ejercicio1</button></a>
        
        </td>
        </tr>
        <tr>
            <td>Ejercicio de introducir un numero y pasarlo como parametro</td>
            <td><a href="ejercicios/ejercicio2.php"><button>Ejercicio2</button></a></td>
        </tr>
          <tr>
            <td>Crear un formulario que reciba el nombre y la edad de una persona y
                muestre por pantalla si es menor de edad, es adulta, o está jubilada en función
                a su edad. Además:
                    - Convertir la edad a un número entero
                    - Convertir el nombre introducido a minúsculas salvo la primera letra, que será mayúscula</td>
            <td><a href="ejercicios/ejercicio3.php"><button>Ejercicio3</button></a></td>
        </tr>
        <tr>
            <td>Crear un formulario que reciba una frase y un número del 1 al 6. Habrá que mostrar la frase
                en un encabezado de dicho número.
            
                Si introducimos "5" y "Hola mundo" se mostrará un encabezado h5Hola mundoh5</td>
            <td><a href="ejercicios/ejercicio4.php"><button>Ejercicio4</button></a></td>
        </tr>
        <tr>
            <td>Formulario que reciba dos números. Devolver el resultado de elevar el primero al segundo. </td>
            <td><a href="ejercicios/ejercicio5.php"><button>Ejercicio5</button></a></td>
        </tr>
        <tr>
            <td>Formulario que reciba un número y devuelva su factorial.</td>
            <td><a href="ejercicios/ejercicio6.php"><button>Ejercicio6</button></a></td>
        </tr>
      </table>
    </div>
</body>
</html>