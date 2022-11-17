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
        require "header.php";
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $usuario= $_POST["usuario"];
            $contraseña=$_POST["contraseña"];


            $sql = "Select * from clientes where usuario = '$usuario'";
            $resultado = $conexion -> query($sql);
            if($resultado -> num_rows>0){
                while ($fila = $resultado -> fetch_assoc()){
                    $hash_contraseña = $fila["contrasena"];
                }
                $acceso_valido=password_verify($contraseña,$hash_contraseña);

                if($acceso_valido==true){
                    echo "<h2>Acceso valido</h2>";
                    session_start();
                    $_SESSION["usuario"] = $usuario;
                    header("location: index.php");
                }else{
                    echo "<h2>Contraseña equivocada</h2>";
                }
            }
        }
    ?>
    <div class="container">
        <h1>Iniciar sesion</h1>
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
                        <button class="btn btn-primary" type="submit">Iniciar sesion</button>
                    </div>
                </form>
            </div>
        </div>
    </div>    




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>