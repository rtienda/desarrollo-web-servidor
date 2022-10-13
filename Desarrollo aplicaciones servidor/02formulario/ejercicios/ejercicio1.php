
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Ejercicio1</h1>
    <form action="ejercicio1_respuesta.php" method="post">
        <label>Nombre</label>
        <input type="text" name="nombre"><br></br>
        <label>Edad</label>
        <input type="text" name="edad"><br></br>
        <input type="submit" value="Enviar" class="button1">
    </form>
<br></br>
<?php
    require 'footer.php';
?>
</body>
</html>