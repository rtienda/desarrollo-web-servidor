<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

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

            if(isset($titulo) && isset($precio)){
                echo "<p>$titulo</p>";
                echo "<p>$precio</p>";
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
        <p><input type="submit" name="Crear"></p>
    </form>

    
</body>
</html>