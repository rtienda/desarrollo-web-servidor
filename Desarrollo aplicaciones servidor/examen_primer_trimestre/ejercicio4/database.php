<?php 
    $servidor = 'localhost';
    $usuario = 'root';
    $contrasena = 'root';
    $base_datos = 'db_ciudades';

    $conexion = new Mysqli($servidor, $usuario, $contrasena, $base_datos) 
        or die("Error en la conexión");
?>