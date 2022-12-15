<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <?php require 'database.php' ?>
    <?php
      /**
     * Ejercicio 4
     * Rafael Tienda Gonzalez
     * Partes resueltas: 1
     */
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $id = $_POST["id"];

        $sql_eliminar = "DELETE FROM ciudades WHERE id = '$id';";

        $conexion->query($sql_eliminar);
    }
    ?>
    <h1>Listado de ciudades</h1>
    <br>
    <div class="container">
    <div class="row">
            <div class="col-9">
    <table class="table table-striped table-hover">
    <thead class="table table-dark">
        <tr>
            <th>Ciudad</th>
            <th>Comunidad autónoma</th>
            <th>Población</th>
            <th></th>
        </tr>
</thead>
<tbody class="table">
        <?php
        $sql = "SELECT * FROM ciudades";
        $resultado = $conexion -> query($sql);
        
        if ($resultado -> num_rows > 0) {
            while($row = $resultado->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $row["ciudad"] ?></td>
                <td><?php echo $row["comunidad_autonoma"] ?></td>
                <td><?php echo $row["poblacion"] ?></td>
                <td>
                    <form action="" method="post">
                        <button class="btn btn-danger" type="submit">Borrar</button>
                        <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
                    </form>
                </td>

            </tr>
            <?php
            }
        } else {
            echo "No se han encontrado ciudades";
        }      
        ?>
        </tbody>
    </table>
    </div>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>