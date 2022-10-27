<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $videojuegos = [
        ["Fortnite","Pc",2],
        ["Satisfactory","Pc",3],
        ["Apex Legends","Ps4",4],
        ["Smash Bros","Switch",5]
    ];

    $nuevo_juego = ["Fruit Ninja","Movil",0];

    array_push($videojuegos,$nuevo_juego);
    unset($videojuegos[3]);
    $titulo = array_column($videojuegos,0);
    $consola = array_column($videojuegos,1);
    array_multisort($consola,SORT_ASC,$titulo,SORT_DESC,$videojuegos);

    ?>
    <table class="customTable">
        <tr>
            <th>Titulo</th>
            <th>Consola</th>
            <th>Precio</th>
        </tr>
        <?php

    foreach ($videojuegos as $videojuego){
        list($nombre,$consola,$precio) = $videojuego;
        ?>
        <tr>
            <td><?php echo $nombre ?></td>
            <td><?php echo $consola ?></td>
            <td><?php echo $precio ?></td>
        <!-- echo "Nombre: ".$nombre."<br>";
        echo "Consola: ".$consola."<br>";
        echo "Precio: ".$precio."<br></br>"; -->
        <tr>
        <?php
    }

   

    // print($videojuegos);

    ?>
</body>
</html>