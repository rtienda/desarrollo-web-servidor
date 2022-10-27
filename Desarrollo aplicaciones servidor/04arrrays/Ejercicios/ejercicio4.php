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
            ["El vigilante","Netflix",2],
            ["Vikings","HBO",6],
            ["Andor","Disney Plus",1],
            ["Dora la exploradora","Disney Plus",3]
        ]


    ?>
    <table class="customTable">
        <tr>
            <th>Titulo</th>
            <th>Plataforma</th>
            <th>Temporadas</th>
        </tr>
        <?php

        foreach($series as $serie){
            list($titulo,$plataforma,$temporadas) = $serie;
            ?>
            <tr>
                <td><?php echo $titulo ?></td>
                <td><?php echo $plataforma ?></td>
                <td><?php echo $temporadas ?></td>
            </tr>
            <?php
        }
            
        ?>
    </table>
        

</body>
</html>