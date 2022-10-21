<?php

    function multiplicarNumero(){
        echo "<div style='display:flex'>";
        for($i=1;$i<=10;$i++){
            echo "<table class='customTable' style='max-width:200px; margin:10px'>";
            echo "<tr><th colspan='2' style='border-color:crimson'>Tabla del $i</th></tr>";
            for($j=1;$j<=10;$j++){
                $resultado=$j*$i;
                echo "<tr><td>$j x $i</td><td>$resultado</td></tr>";
            }
            echo "</table>";
        }
        echo "</div>";
    }

?>