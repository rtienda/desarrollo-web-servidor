<html>  
<head>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Ejercicio 2</h1>
    <p>Ejercicio de introducir un numero y pasarlo como parametro</p>
<form action="ejercicio2_respuesta.php" method="get" >
    <label>Numero</label>
    <input type="number" name="numero"><br></br>
    <div class="wrap">
    <input type="submit" value="Enviar" class="button1">
</div>
</form>
<!-- <div class="wrap">
<a href="./index.html"><button>Volver</button></a>
</div> -->
<?php
    require 'footer.php';
?>
</body>
</html>






