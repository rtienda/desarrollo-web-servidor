<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            $nombre = $_POST["nombre"];
            $apellidos = $_POST["apellidos"];
            $temp_dni = $_POST["dni"];
            $pattern = "/^[a-zA-Z áéíóúÁÉÍÓÚÑñ]+$/";
            $pattern_dni = "/^[0-9]{8}[a-zA-ZñÑ]+$/";
            if(preg_match($pattern,$nombre)){
                echo "<p>$nombre sigue el patron</p>";
            }else{
                echo "<p>$nombre no sigue el patron</p>";
            }
            if(empty($temp_dni)){
                $err_dni="El Dni es obligatorio";
            }else{
                if(strlen($temp_dni)<9 || strlen($temp_dni)>9){
                    $err_dni="El Dni tiene que tener 9 caracteres";
                }else{
                    if(preg_match($pattern_dni,$temp_dni)){
                        $dni=$temp_dni;
                    }else{
                        $err_dni="El Dni no tiene el formato correcto";
                    }
                }
            }
        }

    ?>
    <form action="" method="post">
        <p>Nombre: 
            <input type="text" name="nombre">
        </p>

        <p>Apellidos: 
            <input type="text" name = "apellidos">
        </p>
        <p>Dni: 
            <input type="text" name = "dni">
            <span class="error">
                * <?php if(isset($err_dni)) echo $err_dni ?>
            </span></p>
        </p>
        <p>
            <input type="submit" value="Enviar">
        </p>

    </form>
</body>
</html>