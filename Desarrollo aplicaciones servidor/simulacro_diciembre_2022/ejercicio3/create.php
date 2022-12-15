<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear personaje</title>
</head>

<body>
    <?php
    //  Escribe aquí el código para insertar en la BD
    require "./database.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temp_nombre = depurar($_POST["nombre"]);
        $temp_edad = depurar($_POST["edad"]);
        $temp_videojuego = depurar($_POST["videojuego"]);
        $temp_genero = $_POST["genero"];

        // validación genero
         if (empty($temp_genero)) {
            $err_genero = "* Debes escoger un genero";
        } else {
            $genero = $temp_genero;
        }


        //validación nombre
        if (empty($temp_nombre)) {
            $err_nombre = "El nombre es obligatorio";
        } else {
            //patron para el nombre
            $pattern = "/^[a-zA-Z áéíóúÑñ 0-9]+$/";

            if (!preg_match($pattern, $temp_nombre)) {
                $err_nombre = "El nombre solo puede contener letras numeros y espacios";
            } else {
                $nombre = $temp_nombre;
                echo "<p>$nombre</p>";
            }
        }

        //validación juego
        if (empty($temp_videojuego)) {
            $err_videojuego = "El videojuego es obligatorio";
        } else {
            //patron para el juego
            $pattern = "/^[a-zA-Z áéíóúÑñ 0-9]+$/";

            if (!preg_match($pattern, $temp_videojuego)) {
                $err_videojuego = "El videojuego solo puede contener letras numeros y espacios";
            } else {
                $videojuego = $temp_videojuego;
                echo "<p>$videojuego</p>";
            }
        }

        //validacion edad
        if (empty($temp_edad)) {
            $err_edad = "Tu edad es obligatoria";
        } else {
            if ($temp_edad < 0) {
                $err_edad = "Tu edad no puede ser menor que 0";
            } else {

                $edad = $temp_edad;
                echo "<p>$edad</p>";
            }
        }





        if (!isset($err_nombre) && !isset($err_edad) && !isset($err_genero) && !isset($err_videojuego)) {


            $sql = "INSERT INTO personajes (nombre, edad, genero, videojuego) 
            VALUES ('$nombre','$edad','$genero','$videojuego')";



            if ($conexion->query($sql) == "TRUE") {
    ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Éxito!</strong> Personaje insertado correctamente.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            } else {
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>¡Error!</strong> No se ha podido insertar el personaje
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
    <?php
            }
        }
    }

    function depurar($dato)
    {
        $dato = trim($dato);
        $dato = stripslashes($dato);
        $dato = htmlspecialchars($dato);
        return $dato;
    }

    ?>

    <div class="container">
        <h1>Nuevo personaje</h1>
        <div class="row">
            <div class="col-6">
                <form action="" method="post" enctype="multipart/form-data">

                    <div class="form-group mb-3">
                        <label class="form-label">Nombre</label>
                        <input class="form-control" type="text" name="nombre" id="nombre">
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">Edad</label>
                        <input class="form-control" type="text" name="edad" id="edad">
                    </div>


                    <div class="form-group mb-3">
                        <select class="form-select" name="genero">Género
                            <option selected disabled hidden>Selecciona género</option>
                            <option value="H">Hombre</option>
                            <option value="M">Mujer</option>
                            <option value="O">Otro</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">Videojuego</label>
                        <input class="form-control" type="text" name="videojuego" id="videojuego">
                    </div>


                    <button class="btn btn-primary mt-3" type="submit" name="btnCrear">Crear</button>
               

                </form>

            </div>
        </div>
    </div>


</body>

</html>