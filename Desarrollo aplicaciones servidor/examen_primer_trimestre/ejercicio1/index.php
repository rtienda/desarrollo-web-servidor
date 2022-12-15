<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
      <table>
      <p>Tabla 1 valores con orden insertado</p>
    <?php
    /**
     * Ejercicio 1
     * Rafael Tienda Gonzalez
     * Partes resueltas: 1-2-3
     */
    //PARTE 1
    $juegos_mesa = [
            ["Catan",16,8,"Bandai"],
            ["Bang",8,12, "Banpresto"],
            ["Monopoly", 12, 4, "Monopoly Enterprise"]
        ];
        //PARTE 2
        //Añado juego de mesa
        array_push($juegos_mesa,["Catan2", 8,10,"Banpresto"]);

        //Elimino un juego de mesa
        unset($juegos_mesa[1]);

        //Modifico juego de mesa
        $juegos_mesa[0] = ["Uno",16,6,"Banpresto"];

        //PARTE 3
        //Cabecera
        echo "<tr>";
        echo "<th>Titulo</th>";
        echo "<th>Edad recomendada</th>";
        echo "<th>Numero de jugadores</th>";
        echo "<th>Marca</th>";

        echo "</tr>";
        foreach ($juegos_mesa as $juego_mesa) {
            echo "<tr>";
            list($titulo, $edad_recom, $num_jugadores,$marca) = $juego_mesa;
        
            //Tabla
            echo "<td>" . $titulo . "</td>";
            echo "<td>" . $edad_recom . "</td>";
            echo "<td>" . $num_jugadores . "</td>";
            echo "<td>" . $marca . "</td>";

        }
    ?>
    </table>

    <br>

    <table>
    <p>Tabla 2 valores con orden alfabetico por marca y ordenados por titulo</p>
        <?php

        $marca= array_column($juegos_mesa, 3);
        $titulo= array_column($juegos_mesa, 0);

        array_multisort($marca, SORT_ASC,$titulo,SORT_ASC, $juegos_mesa);

        //Cabecera
        echo "<tr>";
        echo "<th>Titulo</th>";
        echo "<th>Edad recomendada</th>";
        echo "<th>Numero de jugadores</th>";
        echo "<th>Marca</th>";

        foreach ($juegos_mesa as $juego_mesa) {
            echo "<tr>";
            list($titulo, $edad_recom, $num_jugadores,$marca) = $juego_mesa;


            //Tabla
            echo "<td>" . $titulo . "</td>";
            echo "<td>" . $edad_recom . "</td>";
            echo "<td>" . $num_jugadores . "</td>";
            echo "<td>" . $marca . "</td>";
        }

        ?>
    </table>
 
</body>
</html>