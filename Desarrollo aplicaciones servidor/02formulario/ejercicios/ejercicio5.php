<html>  
<head>
    <link rel="stylesheet" href="estilo2.css">
</head>
<body>
    <h1>Ejercicio 5</h1>
    <p>Formulario que reciba dos números. Devolver el resultado de elevar el primero al segundo. </p>
<form action="ejercicio5_respuesta.php" method="get" >
    <label>Base</label>
    <input type="number" name="base" class="numberButton"><br></br>
    <label>Exponente</label>
    <input type="number" name="exponente" class="numberButton"><br></br>
    
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