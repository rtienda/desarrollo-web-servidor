<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver prenda</title>
</head>
<body>
    <h1>Ver prenda</h1>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="GET"){
            $id = $_GET["id"];
            echo "<p>$id</p>";
        }
        ?>
</body>
</html>