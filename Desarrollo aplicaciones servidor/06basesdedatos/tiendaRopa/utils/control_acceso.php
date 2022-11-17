<?php
        function control(){
                session_start();
                if(!isset($_SESSION["usuario"])){
                    header("location: http://localhost/Desarrollo%20aplicaciones%20servidor/06basesdedatos/tiendaRopa/public/iniciar_sesion.php");
                }
            }
?>