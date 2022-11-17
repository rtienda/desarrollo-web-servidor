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
        require "../utils/database.php";
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $usuario= $_POST["usuario"];
            $contraseña=$_POST["contraseña"];
            $nombre=$_POST["nombre"];
            $hash_contraseña=password_hash($contraseña,PASSWORD_DEFAULT);
            $primer_apellido=$_POST["primer_apellido"];
            $segundo_apellido=$_POST["segundo_apellido"];
            $fecha_nacimiento=$_POST["fecha_nacimiento"];
            $rol=$_POST["rol"];
            if(!empty($usuario) && !empty($nombre) && !empty($primer_apellido) && !empty($fecha_nacimiento) && !empty($rol)){
                $segundo_apellido = !empty($segundo_apellido) ? "'$segundo_apellido'" : "NULL";

                $sql="INSERT INTO clientes (usuario,nombre,contrasena,primer_apellido,segundo_apellido,
                fecha_nacimiento,rol) VALUES ('$usuario','$nombre','$hash_contraseña','$primer_apellido',
                $segundo_apellido,'$fecha_nacimiento','$rol')";


            

            if($conexion -> query($sql)=="TRUE"){
                echo "<p>Usuario registrado</p>";
                header("location:iniciar_sesion.php");
            }else{
                echo "<p>Error en el registro</p>";
            }
        }
    }
    ?>
    <div class="container">
        <h1>Registrate</h1>
        <div class="row">
            <div class="col-6">
                <form action="" method="post">
                    <div class="form-group mb-3">
                        <label class="form-label">Usuario</label>
                        <input class="form-control" name="usuario">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Contraseña</label>
                        <input type="password" class= "form-control" name="contraseña">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Nombre</label>
                        <input class="form-control" name="nombre" type="text">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Primer Apellido</label>
                        <input class="form-control" name="primer_apellido" type="text">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Segundo Apellido</label>
                        <input class="form-control" name="segundo_apellido" type="text">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Fecha de nacimiento</label>
                        <input class="form-control" name="fecha_nacimiento" type="date">
                    </div>
                    <div class="form-group mb-3">
                        <select class="form-select" name="rol">
                            <option value="" selected disabled hidden>--Selecciona un rol--</option>
                            <option value="administrador">Administrador</option>
                            <option value="usuario">Usuario</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <button class="btn btn-primary" type="submit">Registrarse</button>
                    </div>
                </form>
            </div>
        </div>
    </div>    



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>