<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $temp_nombre = depurar($_POST["nombre"]);
    $temp_edad = depurar($_POST["edad"]);
    $temp_videojuego = depurar($_POST["videojuego"]);

    // validación genero
    if (isset($_POST["genero"])) {
        $temp_genero = depurar($_POST["genero"]);
    } else if(empty($temp_genero)) {
        $err_genero = "El género no puede estar vacío";
    } else {
        $genero = $temp_genero;
        echo "<p>$genero</p>";

    }
    //validación nombre
    if(empty($temp_nombre)){
        $err_nombre = "El nombre es obligatorio";

    }else{
        //patron para el nombre
            $pattern = "/^[a-zA-Z áéíóúÑñ 0-9]+$/";

            if (!preg_match($pattern, $temp_nombre)) {
                $err_nombre = "El nombre solo puede contener letras numeros y espacios";
            } else {
                $nombre=$temp_nombre;
                echo "<p>$nombre</p>";
            }
        
    }

    //validación juego
    if(empty($temp_videojuego)){
        $err_videojuego = "El videojuego es obligatorio";

    }else{
        //patron para el juego
            $pattern = "/^[a-zA-Z áéíóúÑñ 0-9]+$/";

            if (!preg_match($pattern, $temp_videojuego)) {
                $err_videojuego = "El videojuego solo puede contener letras numeros y espacios";
            } else {
                $videojuego=$temp_videojuego;
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

}




function depurar($dato)
{
    $dato = trim($dato);
    $dato = htmlspecialchars($dato);
    $dato = htmlspecialchars($dato);
    return $dato;
}
