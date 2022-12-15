<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php require 'database.php' ?>
    <?php require 'create.php' ?>

    <!-- Crea aquí la tabla que muestre todos los objetos de la BD -->
    <div class="container">
                <div class="row">
                    <div class="col-12">
    <h3>Tabla de juegos de mesa</h3>
    <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Titulo</th>
                            <th>Edad recomendada</th>
                            <th>Numero de jugadores</th>
                            <th>Marca</th>     
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM juegos_de_mesa ORDER BY marca ASC, titulo ASC ";

                        $resultado = $conexion->query($sql);

                        if ($resultado->num_rows > 0) {
                            while ($row = $resultado->fetch_assoc()) {
                                $titulo = $row["titulo"];
                                $edad_recomendada = $row["edad_recomendada"];
                                $num_jugadores = $row["numero_de_jugadores"];
                                $marca = $row["marca"];

                                ?>

                                <tr>
                                    <td><?php echo $titulo ?></td>
                                    <td><?php echo $edad_recomendada ?></td>
                                    <td><?php echo $num_jugadores ?></td>
                                    <td><?php echo $marca ?></td>
                                </tr>
                                <?php

                            }
                        }
                        ?>
                    </tbody>
                    </table>
                    </div>
                    </div>
                    </div>
</body>
</html>