<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica_02</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Practica 02</h1>
    <!-- DNI, Nombre, Primer apellido, Segundo apellido, Edad y Correo electrónico -->



    <!-- -El DNI deberá contener 8 caracteres y una letra. Tenemos que comprobar que la letra sea correcta.
    -El nombre y los apellidos no deberán contener caracteres especiales y 
        habrá que mostrarlos con la primera letra en mayúscula y las demás en minúscula,
        aunque se hayan introducido en mayúsculas o minúsculas.
    -Si se es menor de 18 años se deberá mostrar un aviso de que se es menor de edad.
        Además, la edad deberá ser siempre un número, y nunca inferior a 0 o superior a 120.
    -El correo electrónico deberá estar en formato correcto.
        No se permitirán además correos electrónicos que contengan palabras malsonantes 
        (basta con que vetéis 3 palabras malsonantes). Utilizar la función str_contains.
         -->
    <form action="" method="post" style="margin:50px; margin-left:25px; margin-right:400px">
        <label>Dni:</label>
        <input type="text" name="dni" class="numberButton"><br></br>
        <label>Nombre:</label>
        <input type="text" name="nombre" class="numberButton"><br></br>
        <label>Primer Apellido:</label>
        <input type="text" name="primer_apellido" class="numberButton"><br></br>
        <label>Segundo Apellido:</label>
        <input type="text" name="segundo_apellido" class="numberButton"><br></br>
        <label>Edad:</label>
        <input type="number" name="edad" class="numberButton"><br></br>
        <label>Email:</label>
        <input type="text" name="email" class="numberButton"><br></br>
        <!-- <input type="hidden" name="f" value="ej1"> -->
        <input type="submit" value="Enviar" class="button1">
    </form>

</body>
</html>