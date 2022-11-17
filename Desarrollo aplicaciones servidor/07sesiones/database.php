<?php
    $servidor = "localhost";
    $usuario = "root";
    $contraseña = "root";
    $database = "db_usuarios";

    // MySQL
    // PDO

    $conexion = new MySQLi($servidor,$usuario,$contraseña,$database) or die("Error en la conexion");



// $host="127.0.0.1";
// $port=3306;
// $socket="";
// $user="root";
// $password="root";
// $dbname="db_tienda_ropa";

// $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
// 	or die ('Could not connect to the database server' . mysqli_connect_error());

// //$con->close();
?>