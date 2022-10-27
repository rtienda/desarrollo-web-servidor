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
    $numeros_pares=[];
    for($i=0;$i<50;$i++){
        if(($i+1)%2==0){
            $numeros_pares[$i]=$i+1;
        }
    }
    $numeros_pares = array_values($numeros_pares);
    // $numeros_pares=[1..50];
    foreach($numeros_pares as $numero_par){
        
        echo $numero_par."<br>";
    }
    echo "</br>";

    shuffle($numeros_pares);
    foreach($numeros_pares as $numero_par){
        
        echo $numero_par."<br>";
    }
    echo "<br>";

    array_multisort($numeros_pares,SORT_DESC,$numeros_pares);
    echo "<ul>";
    foreach($numeros_pares as $numero_par){
        
        echo "<li>".$numero_par."</li>";
    }
    echo "</ul>";
    // print_r($numeros_pares);
    ?>
</body>
</html>