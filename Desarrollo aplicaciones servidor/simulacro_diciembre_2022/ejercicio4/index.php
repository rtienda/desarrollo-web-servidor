<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>

<body>
    <?php require './database.php' ?>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $id = $_POST["id"];

        $sql_eliminar = "DELETE FROM paises WHERE id = '$id';";

        $conexion->query($sql_eliminar);
    }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-6">

                <h1>Listado de países</h1>
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>País</th>
                            <th>Continente</th>
                            <th>Población</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM paises";
                        $resultado = $conexion->query($sql);

                        if ($resultado->num_rows > 0) {
                            while ($row = $resultado->fetch_assoc()) {
                        ?>
                                <tr>
                                    <td><?php echo $row["pais"] ?></td>
                                    <td><?php echo $row["continente"] ?></td>
                                    <td><?php echo $row["poblacion"] ?></td>
                                    <td>
                                        <form action="" method="post">
                                            <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
                                            <button class="btn btn-primary mt-3" type="submit" name="eliminar">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                        <?php
                            }
                        } else {
                            echo "No se han encontrado películas";
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>