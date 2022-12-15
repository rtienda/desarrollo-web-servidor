<!DOCTYPE html>
<html lang="en">

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>

<body>
    <?php require './database.php' ?>
    <?php require './create.php' ?>

    <!-- Crea aquí la tabla que muestre todos los objetos de la BD -->

    <div class="container">
    <h1>Ver personajes</h1>
        <div class="row">
            <div class="col-9">
                <br>
             
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Edad </th>
                            <th>Genero</th>
                            <th>Videojuego</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php


                        $sql = "SELECT * FROM personajes ORDER BY videojuego ASC, nombre ASC ";

                        $resultado = $conexion->query($sql);

                        if ($resultado->num_rows > 0) {
                            while ($row = $resultado->fetch_assoc()) {
                                $nombre = $row["nombre"];
                                $edad = $row["edad"];
                                $genero = $row["genero"];
                                $videojuego = $row["videojuego"];

                                ?>

                                <tr>
                                    <td><?php echo $nombre ?></td>
                                    <td><?php echo $edad ?></td>
                                    <td><?php echo $genero ?></td>
                                    <td><?php echo $videojuego ?></td>
                                </tr>
                                <?php

                            }
                        }

                        ?>
                    </tbody>


            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</body>

</html>