<html>  
<head>
    <link rel="stylesheet" href="estilo2.css">
</head>
<body>
    <h1>Ejercicio 3</h1>
    <p>    Crear un formulario que reciba el nombre y la edad de una persona y
            muestre por pantalla si es menor de edad, es adulta, o está jubilada en función
            a su edad. Además:
                - Convertir la edad a un número entero
                - Convertir el nombre introducido a minúsculas salvo la primera letra, que será mayúscula</p>
<form action="ejercicio3_respuesta.php" method="get" >
    <label>Nombre</label>
    <input type="text" name="nombre"><br></br>
    <label>Edad</label>
    <input type="number" name="edad" class="numberButton"><br></br>
    
    <div class="wrap">
        <!-- <button class="button1">Submit</button> -->
        <input type="submit" value="Enviar" class="button1">
    </div>
    
    <br></br>
    <!-- <div class="wrap">
    <button><a href="index.html">Volver</a></button>
    <div> -->
    <?php
    require 'footer.php';
?>
</form>
</body>
</html>

