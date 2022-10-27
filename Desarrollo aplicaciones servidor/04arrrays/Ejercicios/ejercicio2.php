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
    $array_numeros=[];
    for($i=0;$i<10;$i++){
        $array_numeros[$i]=rand(0,100);
    }
    rsort($array_numeros);
    echo "<ul>";
    for($i=0;$i<count($array_numeros);$i++){
        echo "<li>".$array_numeros[$i]."</li>";
    }
    echo "</ul><br>";
    sort($array_numeros);
    echo "<ul>";
    for($i=0;$i<count($array_numeros);$i++){
        echo "<li>".$array_numeros[$i]."</li>";
    }
    echo "</ul><br>";
    ?>
</body>
</html>