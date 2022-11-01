<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- AÑADIR AL FORMULARIO DE VIDEOJUEGOS:

        - Consola (select con al menos 4 opciones) (PS4, PS5, SWITCH...)
        El select de consolas tendrá una opción por defecto vacía

        - Descripción (area de texto con 255 caracteres máximo)

        Añadir mensajes de error -->

</head>

<body>

    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            // echo htmlspecialchars($_POST["titulo"]);
            // echo "<br>";
            // echo htmlspecialchars($_POST["precio"]);
            // var_dump(trim($_POST["titulo"]));
            // var_dump(stripslashes($_POST["titulo"]));

            // echo depurar($_POST["titulo"]);
            // echo "<br>";
            // echo depurar($_POST["precio"]);

            $temp_titulo = depurar($_POST["titulo"]);
            $temp_precio = depurar($_POST["precio"]);
            if(isset($_POST["listaConsolas"])){
                $temp_consola = depurar($_POST["listaConsolas"]);
            }else{
                $temp_consola="";
            }
            $temp_descripcion = $_POST["descripcion"];

            if(empty($temp_descripcion)){
                $err_descripcion="La descripcion es obligatoria";
            }else{
                if(strlen($temp_descripcion)>255){
                    $err_descripcion = "La descripcion no puede tener mas de 255 caracteres";
                }else{
                    $descripcion=$temp_descripcion;
                }
            }
            

            $file_name = $_FILES["imagen"]["name"];
            $file_temp_name = $_FILES["imagen"]["tmp_name"];
            $file_size = $_FILES["imagen"]["size"];
            $file_type = $_FILES["imagen"]["type"];
            $extension = pathinfo($file_name,PATHINFO_EXTENSION);
            /*
                Validar el fichero introducido
                - Es obligatorio introducir un fichero
                - Tiene que ser una imagen de extension JPG, JPEG, PNG
                - La imagen no puede tener mas de 1 mega
            */
            if(!empty($file_name)){
                if($extension=="png"||$extension=="jpg"||$extension=="jpeg"){
                    if($file_size<1000000){
                        $new_file_name = "videojuego_".$temp_titulo.".".$extension;
                        $path = "./images/" . $new_file_name;
                        // echo "<p>La extension es $ext</p>";
            
                        if(move_uploaded_file($file_temp_name,$path)){
                            echo "<p>Fichero movido con exito</p>";
                        }else{
                            $err_imagen = "<p>No se ha podido mover el fichero</p>";
                        }
                    }else{
                        $err_imagen = "<p>No se admiten imagenes con tamaño superior a 1 megabyte</p>";
                    }
                }else{
                    $err_imagen = "<p>Solo se admiten extensiones: png, jpg, jpeg</p>";
                }
            }else{
                $err_imagen = "<p>Es obligatorio adjuntar una foto</p>";
            }


            

            
            
            if(empty($temp_titulo)){
                $err_titulo = "El titulo es obligatorio";
                // validar que como mucho tenga 40 caracteres
                

            }else{
                if(strlen($temp_titulo)>40){
                    $err_titulo = "El titulo no puede tener mas de 40 caracteres";
                }else{
                    $titulo = $temp_titulo;
                }
            }


            if(empty($temp_consola)){
                $err_consola = "Debes elegir una consola";
            }else{
                $listaConsolas=$temp_consola;
            }

            if(empty($temp_precio)){
                $err_precio = "El precio es obligatorio";
            }else{
                $temp_precio=filter_var($temp_precio,FILTER_VALIDATE_FLOAT);

                if(!$temp_precio){
                    $err_precio = "El precio debe ser un numero";
                }else{
                    $temp_precio=round($temp_precio,2);
                    if($temp_precio<0){
                        $err_precio="El precio no puede ser negativo";
                    }else if ($temp_precio >= 10000){
                        $err_precio="El precio no puede ser igual o superior a 10000";
                    
                    }else{

                        $precio=$temp_precio;
                    }
                }
            }

            if(isset($titulo) && isset($precio) && isset($descripcion) && isset($listaConsolas)){
                echo "<p>$titulo</p>";
                echo "<p>$precio</p>";
                echo "<p>$listaConsolas</p>";
                echo "<p>$descripcion</p>"; 
            }
        }
        function depurar($dato){
            $dato = trim($dato);
            $dato = stripslashes($dato);
            $dato=htmlspecialchars($dato);
            return $dato;
        }
            
    ?>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h2>Nuevo videojuego</h2>
                <form action="" method="post" enctype="multipart/form-data">
                    <div>
                    <label class="form-label">Titulo: </label>
                        <input type="text" name="titulo" class="form-control">
                        <span class="error">
                            * <?php if(isset($err_titulo)) echo $err_titulo ?>
                        </span>
                    
                    </div>  
                    <div>
                    <label class="form-label">Precio: </label><input type="text" name="precio" class="form-control">
                        <span class="error">
                            * <?php if(isset($err_precio)) echo $err_precio ?>
                        </span>
                        </div>
                    <div><label class="form-label">Consola: </label>
                        <select id="consolas" name="listaConsolas" class="form-select">
                            <option value="" selected disabled hidden>Elige consola</option>
                            <option value="ps4">Ps4</option>
                            <option value="switch">Switch</option>
                            <option value="xbox">Xbox One</option>
                            <option value="steam">Steam Deck</option>
                        </select>
                        <span class="error">
                            * <?php if(isset($err_consola)) echo $err_consola ?>
                        </span>
                    </div>
                    <div><label class="form-label">Descripcion: </label>
                    <textarea name="descripcion" class="form-control">
                    </textarea>
                        <span class="error">
                            * <?php if(isset($err_descripcion)) echo $err_descripcion ?>
                        </span>
                    </div>

                    <div><label class="form-label">Imagen: </label>
                    <input type="file" name="imagen" class="form-control">
                        <span class="error">
                            * <?php if(isset($err_imagen)) echo $err_imagen;?>
                        </span>
                    </div>

                    <!-- <input type="submit" name="Crear"> -->
                    <button type="submit" class="btn btn-primary">Crear</button>

                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

</body>

</html>