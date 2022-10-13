
<html>  
<head>
    <link rel="stylesheet" href="estilo2.css">
</head>
<body>
    <h1>Ejercicio 4</h1>
    <p>  Crear un formulario que reciba una frase y un número del 1 al 6. Habrá que mostrar la frase
    en un encabezado de dicho número.

    Si introducimos "5" y "Hola mundo" se mostrará un encabezado h5Hola mundoh5</p>
<form action="ejercicio4_respuesta.php" method="get" >
    <label>Frase</label>
    <input type="text" name="frase"><br></br>
    <label>Numero</label>
    <input type="number" name="numero" class="numberButton" min="1" max="6"><br></br>
    
    <div class="wrap">
        <!-- <button class="button1">Submit</button> -->
        <input type="submit" value="Enviar" class="button1">
    </div>
    <!-- <div class="wrap">
    <button><a href="index.html">Volver</a></button>
</div> -->
<?php
    require 'footer.php';
?>
</form>
</body>
</html>
