<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica_02</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>



    <?php
        require "funciones/dniValido.php";
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $temp_dni=depurar($_POST["dni"]);
            $temp_nombre=depurar($_POST["nombre"]);
            $temp_primer_apellido=depurar($_POST["primer_apellido"]);
            $temp_segundo_apellido=depurar($_POST["segundo_apellido"]);
            $temp_email=depurar($_POST["email"]);
            $temp_edad=depurar($_POST["edad"]);
            if(dniValido($temp_dni)){
                $dni=$temp_dni;
                
            }else{
                $err_dni="El Dni no es valido";
            }
            if(!empty($temp_nombre)){
                $pattern = "/^[a-zA-Z áéíóúÁÉÍÓÚÑñ]+$/";
                if(preg_match($pattern,$temp_nombre)){
                    $nombre=ucwords(strtolower($temp_nombre));
                }else{
                    $err_nombre = "El nombre no puede contener caracteres especiales";  
                }
            }else{
                $err_nombre = "El nombre no puede estar vacio";
            }
            if(!empty($temp_primer_apellido)){
                $pattern = "/^[a-zA-Z áéíóúÁÉÍÓÚÑñ]+$/";
                if(preg_match($pattern,$temp_primer_apellido)){
                    $primer_apellido=ucwords(strtolower($temp_primer_apellido));
                }else{
                    $err_primer_apellido = "El primer apellido no puede contener caracteres especiales";  
                }
            }else{
                $err_primer_apellido = "El primer apellido no puede estar vacio";
            }
            
            $pattern = "/^[a-zA-Z áéíóúÁÉÍÓÚÑñ]+$/";
            if(preg_match($pattern,$temp_segundo_apellido)){
                $segundo_apellido=ucwords(strtolower($temp_segundo_apellido));
            }else{
                $err_segundo_apellido = "El segundo apellido no puede contener caracteres especiales";  
            }
            
            
            if (empty($temp_email)){
                $err_email = "El email es obligatorio";
            }else{
                $temp_email = filter_var($temp_email,FILTER_VALIDATE_EMAIL);
                if(!$temp_email){
                    $err_email = "El email no es valido";
                }else{
                    if(str_contains($temp_email,"tonto")||str_contains($temp_email,"baka")||str_contains($temp_email,"imbecil")){
                        $err_email="El email no puede tener palabras malsonantes";
                    }else{
                        $email = $temp_email;
                    }
                    
                }
            }

            if(empty($temp_edad)){
                $err_edad = "La edad es obligatoria";
            }else{
                
                if($temp_edad<=120&&$temp_edad>=0){

                    $edad = $temp_edad;
                    if($temp_edad<18){
                        $err_edad = "Es menor de edad";
                    }
                   
                }else{
                    $err_edad = "El formato de edad no es correcto";
                }
            }
        }


        function depurar($dato){
            $dato = trim($dato);
            $dato = stripslashes($dato);
            $dato=htmlspecialchars($dato);
            return $dato;
        }
        if(isset($nombre)&&isset($primer_apellido)&&isset($segundo_apellido)&&isset($dni)&&isset($edad)&&isset($email)){
            echo "<p>Nombre: ".$nombre."</p>";
            echo "<p>Primer apellido: ".$primer_apellido."</p>";
            echo "<p>Segundo apellido: ".$segundo_apellido."</p>";
            echo "<p>Edad: ".$edad."</p>";
            echo "<p>Dni: ".$dni."</p>";
            echo "<p>Email: ".$email."</p>";
        }
    ?>
    <h1>Practica 02</h1>
    <!-- DNI, Nombre, Primer apellido, Segundo apellido, Edad y Correo electrónico -->



    <!-- 
    -El DNI deberá contener 8 caracteres y una letra. Tenemos que comprobar que la letra sea correcta.
    -El nombre y los apellidos no deberán contener caracteres especiales y 
        habrá que mostrarlos con la primera letra en mayúscula y las demás en minúscula,
        aunque se hayan introducido en mayúsculas o minúsculas.
    -Si se es menor de 18 años se deberá mostrar un aviso de que se es menor de edad.
        Además, la edad deberá ser siempre un número, y nunca inferior a 0 o superior a 120.
    -El correo electrónico deberá estar en formato correcto.
        No se permitirán además correos electrónicos que contengan palabras malsonantes 
        (basta con que vetéis 3 palabras malsonantes). Utilizar la función str_contains.
         -->
    <form action="" method="post" style="margin:50px; margin-left:25px; margin-right:400px">
        <p>Dni:
        <input type="text" name="dni" class="numberButton">
        <span class="error">
                * <?php if(isset($err_dni)) echo $err_dni ?>
        </span></p>

        <p>Nombre:
        <input type="text" name="nombre" class="numberButton">
        <span class="error">
                * <?php if(isset($err_nombre)) echo $err_nombre ?>
        </span></p>
        
        <p>Primer Apellido:
        <input type="text" name="primer_apellido" class="numberButton">
        <span class="error">
                * <?php if(isset($err_primer_apellido)) echo $err_primer_apellido ?>
        </span></p>
        <p>Segundo Apellido:
        <input type="text" name="segundo_apellido" class="numberButton">
        <span class="error">
                <?php if(isset($err_segundo_apellido)) echo $err_segundo_apellido ?>
        </span></p>
        <p>Edad:
        <input type="number" name="edad" class="numberButton">
        <span class="error">
                * <?php if(isset($err_edad)) echo $err_edad ?>
        </span></p>
        <p>Email:
        <input type="text" name="email" class="numberButton">
        <span class="error">
                * <?php if(isset($err_email)) echo $err_email ?>
        </span></p>
        <!-- <input type="hidden" name="f" value="ej1"> -->
        <input type="submit" value="Enviar" class="button1">
    </form>


</body>
</html>