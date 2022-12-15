<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<style>
.error {
    color: red;
}

</style>
</head>
<body>
    <?php
    /**
     * Ejercicio 3
     * Rafael Tienda Gonzalez
     * Partes resueltas: 1-2-3
     */
        require "./database.php";

        //  Escribe aquí el código para insertar en la BD
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $temp_titulo = depurar($_POST["titulo"]);
            $temp_marca = depurar($_POST["marca"]);
            $temp_num_jugadores = depurar($_POST["n_jugadores"]);
    
            //Validación del titulo
            if(empty($temp_titulo)){
                $err_titulo = "El titulo es obligatorio";
            }else{
                //patron para el titulo
                    $pattern = "/^[a-zA-Z áéíóúÑñ 0-9]+$/";
                    if (!preg_match($pattern, $temp_titulo)) {
                        $err_titulo = "El titulo solo puede contener letras numeros y espacios";
                    } else {
                        $titulo=$temp_titulo;
                        // echo "<p>$titulo</p>";
                    }
                
            }
            //Validación de la marca
            if(empty($temp_marca)){
                $err_marca = "La marca es obligatoria";
            }else{
                //patron para la marca
                    $pattern = "/^[a-zA-Z áéíóúÑñ 0-9]+$/";
                    if (!preg_match($pattern, $temp_marca)) {
                        $err_marca = "La marca solo puede contener letras numeros y espacios";
                    } else {
                        $marca=$temp_marca;
                        // echo "<p>$marca</p>";
                    }
                
            }
  
        //validacion de numero de jugadores
        if (empty($temp_num_jugadores)) {
            $err_num_jugadores = "El numero de jugadores es obligatorio";
        } else {
            if ($temp_num_jugadores < 0|| $temp_num_jugadores>99) {
                $err_num_jugadores = "El numero de jugadores no puede ser menor que 0 ni mayor que 99";
            } else {
               
                    $num_jugadores = $temp_num_jugadores;
                    // echo "<p>$num_jugadores</p>";
            
            }
        }
    

            // Validacion de la edad recomendada
            if (isset($_POST["edad_recomendada"])) {
                $temp_edad_recomendada = depurar($_POST["edad_recomendada"]);
            }else{
                $temp_edad_recomendada="";
            }
            if(empty($temp_edad_recomendada)&&$temp_edad_recomendada==0) {
                $edad_recomendada = $temp_edad_recomendada;
            }else if(empty($temp_edad_recomendada)){
                $err_edad_recomendada = "La edad recomendada no puede estar vacia";
            
            } else {
                $edad_recomendada = $temp_edad_recomendada;
                // echo "<p>$edad_recomendada</p>";
    
            }
            //--------------------------
            //Insertamos en la base de datos si podemos
            if (!isset($err_titulo) && !isset($err_marca) && !isset($err_num_jugadores) && !isset($err_edad_recomendada)) {
                // echo "<p>va perfe</p>";
                $sql = "INSERT INTO juegos_de_mesa (titulo, edad_recomendada, numero_de_jugadores, marca) 
                VALUES ('$titulo','$edad_recomendada','$num_jugadores','$marca')";
    
    
    
                if ($conexion->query($sql) == "TRUE") {
        ?>
                <!-- <p>Bieen</p> -->
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Éxito!</strong> Juego de mesa insertado correctamente.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php
                } else {
                ?>
                <!-- <p>Error</p> -->
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>¡Error!</strong> No se ha podido insertar el juego de mesa
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
        <?php
                }
            }else{
                // echo "<p>titulo.$titulo. num_jug .$num_jugadores. marca.$marca. edad.$edad_recomendada</p>";

                // echo "<p>no va bien</p>";
            }
        }
    
            function depurar($dato)
            {
                $dato = trim($dato);
                $dato = htmlspecialchars($dato);
                $dato = htmlspecialchars($dato);
                return $dato;
            }
                

    ?>

    <!-- Escribe aquí el formulario para introducir los datos a insertar en la BD -->
    <div class="container">
                <div class="row">
                    <div class="col-6">
                    <h3>Nuevo juego de mesa</h3>

            <form action="" method="post">
            <div class="form-group mb-3">
                <label class="form-label">Titulo: </label>
                <input class="form-control" type="text" name="titulo">
                <span class="error">
                        *<?php
                            if (isset($err_titulo)) echo $err_titulo;
                            ?>
                    </span>
                </div>
                <div class="form-group mb-3">
                <label>Edad recomendada:</label>
                <select class="form-select" name="edad_recomendada">Edad recomendada: 
                    <option value="" selected disabled hidden>-- Selecciona la edad recomendada --</option>
                    <option value="0">+0</option>
                    <option value="3">+3</option>
                    <option value="7">+7</option>
                    <option value="13">+13</option>
                    <option value="18">+18</option>
                </select>
                <span class="error">
                        *<?php
                            if (isset($err_edad_recomendada)) echo $err_edad_recomendada;
                            ?>
                    </span>
                </div>
                
                <div class="form-group mb-3">
                <label class="form-label">Número de jugadores: </label>
                <input class="form-control"  type="text" name="n_jugadores">
                <span class="error">
                *<?php
                            if (isset($err_num_jugadores)) echo $err_num_jugadores;
                            ?>
                    </span>
                </div>
                <div class="form-group mb-3">
                <label class="form-label">Marca: </label>
                <input class="form-control" type="text" name="marca">
                <span class="error">
                *<?php
                            if (isset($err_marca)) echo $err_marca;
                            ?>
                    </span>
                </div>
                <div class="form-group mb-3">
                <input class="btn btn-primary mt-3" type="submit" value="Enviar">
                </div>  
            </form>
                </div>
                </div>
        </div>
        <br>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>