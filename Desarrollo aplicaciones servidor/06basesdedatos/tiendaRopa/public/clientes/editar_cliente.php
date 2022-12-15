<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
<?php require "../../utils/control_acceso.php"?>

    <?php
    require "../header.php";
    require "../../utils/database.php";
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $id = $_GET["id"];
        $usuario = $_GET["usuario"];
        $nombre = $_GET["nombre"];
        $primer_apellido=$_GET["primer_apellido"];
        $segundo_apellido=$_GET["segundo_apellido"];
        $fecha_nacimiento=$_GET["fecha_nacimiento"];
        $rol=$_GET["rol"];

    }
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $id = $_POST["id"];
        $usuario = $_POST["usuario"];
        $nombre = $_POST["nombre"];
        $primer_apellido=$_POST["primer_apellido"];
        $segundo_apellido=$_POST["segundo_apellido"];
        $fecha_nacimiento=$_POST["fecha_nacimiento"];
        $rol=$_POST["rol"];

        $sql="UPDATE clientes SET 
                usuario='$usuario',
                nombre='$nombre',
                primer_apellido='$primer_apellido',
                segundo_apellido='$segundo_apellido',
                fecha_nacimiento='$fecha_nacimiento',
                rol='$rol'
            WHERE id='$id'";
        if($conexion -> query($sql)=="TRUE"){
            ?>
                    <!-- ------------------------------------------- -->
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Se ha modificado el cliente
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
        }else{
            echo "<p>Error al modificar</p>";
        }
    }
    ?>
    
    <div class="container">
        <h1>Editar cliente</h1>
        <div class="row">
        <div class="row">
            <div class="col-6">
                <form action="" method="post">
                    <div class="form-group mb-3">
                        <label class="form-label">Usuario</label>
                        <input class="form-control" type="text" name="usuario" value="<?php echo $usuario ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Nombre</label>
                        <input class="form-control" type="text" name="nombre" value="<?php echo $nombre ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Primer apellido</label>
                        <input class="form-control" type="text" name="primer_apellido" value="<?php echo $primer_apellido ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Segundo apellido</label>
                        <input class="form-control" type="text" name="segundo_apellido" value="<?php echo $segundo_apellido ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Fecha de nacimiento</label>
                        <input class="form-control" type="date" name="fecha_nacimiento" value="<?php echo $fecha_nacimiento ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Rol</label>
                        <input class="form-control" type="text" name="rol" value="<?php echo $rol ?>">
                    </div>
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <button class="btn btn-primary" type="submit">Editar</button>
                    <a class="btn btn-secondary" href="index.php">Volver</a>
                    <!-- <button class="btn btn-primary  mt-3    " type="submit">Crear</button> -->
    

                    
                </form>
            </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>