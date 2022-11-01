<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <?php
    $estudiantes = [
        ["Luis", rand(0,10)],
        ["Alfredo",rand(0,10)],
        ["Elena",rand(0,10)]
    ]
    ?>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Nota</th>
            <th>Calificacion</th>
        </tr>
        <?php
        foreach ($estudiantes as $estudiante){
            list($nombre,$nota) = $estudiante;
        
        }
        ?>
            <tr>
                <td><?php echo $nombre ?></td>
                <td><?php echo $nota ?></td>
                <td>
                    <?php
                        if($nota <5 ){
                            echo "Suspenso";
                        }else if($nota >=5 && $nota < 7){
                            echo "Aprobado";
                        }else if ($nota >=7 && $nota <9){
                            echo "Notable";
                        }else{
                            echo "Sobresaliente";
                        }


                    ?>
                </td>
            </tr>
       
    

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">

            </script>
</body>
</html>