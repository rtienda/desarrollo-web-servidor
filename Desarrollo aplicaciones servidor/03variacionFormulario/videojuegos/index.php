<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

    <!-- AÑADIR AL FORMULARIO DE VIDEOJUEGOS:

        - Consola (select con al menos 4 opciones) (PS4, PS5, SWITCH...)
        El select de consolas tendrá una opción por defecto vacía

        - Descripción (area de texto con 255 caracteres máximo)

        Añadir mensajes de error -->

</head>
<body>
    <h2>Nuevo videojuego</h2>
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
    <form action="" method="post">
        <p>Titulo: <input type="text" name="titulo">
        <span class="error">
            * <?php if(isset($err_titulo)) echo $err_titulo ?>
        </span></p>
        <p>Precio: <input type="text" name="precio">
        <span class="error">
            * <?php if(isset($err_precio)) echo $err_precio ?>
        </span></p>
        <p>Consola: 
            <select id="consolas" name="listaConsolas">
                <option value="" selected disabled hidden>Elige consola</option>
                <option value="ps4">Ps4</option>
                <option value="switch">Switch</option>
                <option value="xbox">Xbox One</option>
                <option value="steam">Steam Deck</option>
            </select>
        <span class="error">
            * <?php if(isset($err_consola)) echo $err_consola ?>
        </span></p>
        <p>Descripcion: <textarea  name="descripcion"></textarea>
            <span class="error">
                * <?php if(isset($err_descripcion)) echo $err_descripcion ?>
            </span></p>
        <p><input type="submit" name="Crear"></p>
    </form>

    
</body>
</html>