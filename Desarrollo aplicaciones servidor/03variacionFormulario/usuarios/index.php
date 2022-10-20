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
            $temp_nombre = depurar($_POST["nombre"]);
            $temp_apellidos = depurar($_POST["apellidos"]);
            $temp_dni = depurar($_POST["dni"]);
            $temp_email = depurar($_POST["email"]);
            $temp_anyo = depurar($_POST["anyo"]);

            $pattern_dni = "/^[0-9]{8}[a-zA-ZñÑ]+$/";

            if(empty($temp_nombre)){
                $err_nombre= "El nombre es obligatorio";
            }else{
                $pattern = "/^[a-zA-Z áéíóúÁÉÍÓÚÑñ]+$/";
                if(!preg_match($pattern,$temp_nombre)){
                    $err_nombre = "El nombre solo puede contener letras";
                }else{
                    $nombre = $temp_nombre;
                }
            }
            if(empty($temp_apellidos)){
                $err_apellidos= "Los Apellidos son obligatorios";
            }else{
                $pattern = "/^[a-zA-Z áéíóúÁÉÍÓÚÑñ]+$/";
                if(!preg_match($pattern,$temp_apellidos)){
                    $err_apellidos = "Los Apellidos solo pueden contener letras";
                }else{
                    $apellidos = $temp_apellidos;
                }
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
            /*  Validar:
                - Email (con filter_var)
                - Fecha de naccimiento (sin input date)
                dia/mes/año
                (2 numeros / 2 numeros /4 numeros)
                03/12/2022
            */
            if (empty($temp_email)){
                $err_email = "El email es obligatorio";
            }else{
                $temp_email = filter_var($temp_email,FILTER_VALIDATE_EMAIL);
                if(!$temp_email){
                    $err_email = "El email no es valido";
                }else{
                    $email = $temp_email;
                }
            }
            //validar fecha
            //El dia solo puede empezar por 0, 1, 2 o 3
            //El mes solo por 0 o 1
            //Y el año por 20 o 19
            if(empty($temp_anyo)){
                $err_anyo = "El año es obligatorio";
            }else{
                $pattern = "/^[0-3][0-9]\/[0-1][0-9]\/(19|20)[0-9]{2}$/";
                if(!preg_match($pattern, $temp_anyo)){
                    $err_anyo = "El formato de fecha no es correcto";
                }else{
                    $anyo = $temp_anyo;
                }
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
        <p>Nombre: 
            <input type="text" name="nombre">
            * <?php if(isset($err_nombre)) echo $err_nombre ?>
            </span></p>
        </p>

        <p>Apellidos: 
            <input type="text" name = "apellidos">
            <span class="error">
                * <?php if(isset($err_apellidos)) echo $err_apellidos ?>
            </span></p>
        </p>
        <p>Dni: 
            <input type="text" name = "dni">
            <span class="error">
                * <?php if(isset($err_dni)) echo $err_dni ?>
            </span></p>
        </p>
        <p>Email: 
            <input type="text" name = "email">
            <span class="error">
                * <?php if(isset($err_email)) echo $err_email ?>
            </span></p>
        </p>
        <p>Año: 
            <input type="text" name = "anyo">
            <span class="error">
                * <?php if(isset($err_anyo)) echo $err_anyo ?>
            </span></p>
        </p>
        <p>
            <input type="submit" value="Enviar">
        </p>

    </form>
</body>
</html>