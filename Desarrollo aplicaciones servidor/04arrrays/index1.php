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


        $series = [
            'El juego del calamar',
            'La casa de papel',
            'Alice in borderland',
            'The Witcher'
        ];    
        //  Inserta elementos al final del array
        array_push($series, "Cuéntame", "Dark");

        $series[] = "Big Bang Theory";

        $series[10] = "La que se avecina";

        array_push($series, "Haikyuu");

        $series[10] = "Aquí no hay quien viva";
        $personas = [
            "77223451T" => "Juan Alberto",
            "88443311L" => "Sergio",
            "99554332R" => "Alejandro"
        ];
        unset($series[10]);

         $series = array_values($series);

        foreach ($series as $indice => $serie) {
            echo $indice . " => " . $serie . "<br>";
        }

        /*  MEDIANTE FOR EACH, MOSTRAR TODAS LAS PERSONAS
            Y SUS DNI EN UNA TABLA
        */
        echo "<br><br>";
        
        echo "<table class='customTable'>";
        echo "<tr>";
        echo "<th>Dni</th>";
        echo "<th>Nombre</th>";
        echo "</tr>";
        foreach ($personas as $dni => $nombre){
            echo "<tr>";
            echo "<td>" . $dni . "</td>";
            echo "<td>" . $nombre . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<br><br>";
        $videojuegos1 = array(
            "juego1" => "Cyberpunk 2077",
            "juego2" => "Minecraft",
            "juego3" => "My little Ponny"
        );
        // print_r($videojuegos1);
        // echo "<br></br>";
        $consolas = [
            "consola1" => "PS4",
            "consola2" => "PS5",
            "consola3" => "Nintendo Switch"
        ];
        // print_r($consolas);
        // echo "<br></br>$consolas[consola1]";
        // echo "<br></br>";
       
        print_r($personas);
        $personas["12345678D"] = "Rodolfo";
        $personas["99554332R"] = "Ruperto";
        unset($personas["88443311L"]);
        echo "<br></br>";
        print_r($personas);

        $personass = array_values($personas);
        echo "<br></br>";
        print_r($personas);
        echo "<br></br>";
        echo "Hay " . count($personas) . " personas";

        /*
            ORDENAR LAS PERSONAS POR DNI, DE MENOR A MAYOR
            ORDENAR LAS PERSONAS POR NOMBRE, EN ORDEN ALFABETICO INVERSO
        */
        //Ordenar por nombre
        asort($personas);

        //Ordenar por DNI al reves
        krsort($personas);

        ?>
    <ul>
        <?php
        sort($series);
        for ($i=0;$i<count($series);$i++){
            ?>
        <li><?php echo $series[$i] ?></li>
        <?php
        }
        ?>
    </ul>
    <ol>
        <?php
        $i = 0;
        while ($i < count($series)){
        ?>
        <li><?php echo $series[$i] ?></li>
        <?php
        $i++;
        }
        ?>
    </ol>
    <?php
        $frutas_1 = ["Melocoton" => 0.5,"Sandia" => 1,"Kiwi" => 2];
        $frutas_2 = ["Sandia" => 1,"Melocoton" => 0.5,"Kiwi" => 2];

        if($frutas_1==$frutas_2){
            echo "<p>Los arrays tienen los mismos elementos</p>";
            if($frutas_1 === $frutas_2){
                echo "<p>Las frutas son las mismas y estan igual ordenadas</p>";
            }else{
                echo "<p>Las frutas no son las mismas o no estan igual ordenadas</p>";
            }
        }else{
            echo "<p>Los arrays no tienen los mismos elementos</p>";
        }

      

    ?>
</body>

</html>