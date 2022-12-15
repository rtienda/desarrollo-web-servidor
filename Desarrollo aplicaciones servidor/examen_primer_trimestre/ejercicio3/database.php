<?php 
    $servidor = 'localhost';
    $usuario = 'root';
    $contrasena = 'root';
    $base_datos = 'juegos_de_mesa';

    $conexion = new Mysqli($servidor, $usuario, $contrasena, $base_datos) 
        or die("Error en la conexión");
?>