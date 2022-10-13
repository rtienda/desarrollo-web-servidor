<html>  
<head>
    <link rel="stylesheet" href="estilo2.css">
</head>
<body>
    <h1>Ejercicio 6</h1>
    <p>Formulario que reciba un número y devuelva su factorial.</p>
<form action="ejercicio6_respuesta.php" method="get" >
    <label>Factorial de:</label>
    <input type="number" name="factorial" class="numberButton"><br></br>

    
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