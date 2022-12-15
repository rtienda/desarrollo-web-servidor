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
    <?php

    $personajes = [
            ["Picachu",10,"H","Pokemon"],
            ["Mario",5,"H", "Mario Bros"],
            ["Laura", 12, "M", "Laura Game"]
        ];
        //Añado personaje a la tabla
        array_push($personajes,["Bob", 5,"H","Bob Esponja"]);

        //Borro personaje Picachu
        unset($personajes[0]);

        //Modifico personaje Mario
        $personajes[1] = ["Coco",5,"H","Coco Game",];

        echo "<tr>";
        echo "<th>Nombre</th>";
        echo "<th>Edad</th>";
        echo "<th>Genero</th>";
        echo "<th>Juego</th>";


        echo "</tr>";
        foreach ($personajes as $personaje) {
            echo "<tr>";
            list($nombre, $edad, $genero,$juego) = $personaje;
        

            //Contenido de la tabla
            echo "<td>" . $nombre . "</td>";
            echo "<td>" . $edad . "</td>";
            echo "<td>" . $genero . "</td>";
            echo "<td>" . $juego . "</td>";

        }
    ?>
    </table>

    <br>

    <table>
    <h3>Tabla 2: Ordenado por orden alfabético del juego</h3>
        <?php

        $juego= array_column($personajes, 3);
        $nombre= array_column($personajes, 0);

        array_multisort($juego, SORT_ASC,$nombre,SORT_ASC, $personajes);

        //Cabecera de la tabla
        echo "<tr>";
        echo "<th>Nombre</th>";
        echo "<th>Edad</th>";
        echo "<th>Genero</th>";
        echo "<th>Juego</th>";

        foreach ($personajes as $personaje) {
            echo "<tr>";
            list($nombre, $edad, $genero,$juego) = $personaje;


            //Contenido de la tabla
            echo "<td>" . $nombre . "</td>";
            echo "<td>" . $edad . "</td>";
            echo "<td>" . $genero . "</td>";
            echo "<td>" . $juego . "</td>";
        }

        ?>
    </table>
 
    
</body>
</html>