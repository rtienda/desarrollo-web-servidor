<?php
   /**
     * Ejercicio 2
     * Rafael Tienda Gonzalez
     * Partes resueltas: 1-2-3
     */
    //PARTE 1
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $temp_titulo = depurar($_POST["titulo"]);
        $temp_marca = depurar($_POST["marca"]);
        $temp_num_jugadores = depurar($_POST["n_jugadores"]);

        //Validación del titulo
        if(empty($temp_titulo)){
            $err_titulo = "El titulo es obligatorio";
        }else{
            //patron para el titulo
                $pattern = "/^[a-zA-Z áéíóúÑñ 0-9]+$/";
                if (!preg_match($pattern, $temp_titulo)) {
                    $err_titulo = "El titulo solo puede contener letras numeros y espacios";
                } else {
                    $titulo=$temp_titulo;
                    // echo "<p>$titulo</p>";
                }
            
        }
        //Validación de la marca
        if(empty($temp_marca)){
            $err_marca = "La marca es obligatoria";
        }else{
            //patron para la marca
                $pattern = "/^[a-zA-Z áéíóúÑñ 0-9]+$/";
                if (!preg_match($pattern, $temp_marca)) {
                    $err_marca = "La marca solo puede contener letras numeros y espacios";
                } else {
                    $marca=$temp_marca;
                    // echo "<p>$marca</p>";
                }
            
        }

    //PARTE 2

    //validacion de numero de jugadores
    if(isset($_POST["edad_recomendada"])){
        $err_num_jugadores = "El numero de jugadores es obligatorio";

    }else if(empty($temp_num_jugadores)&&$temp_num_jugadores<>0) {
        $err_num_jugadores = "El numero de jugadores es obligatorio";
    } else {
        $pattern = "/^[0-9]+$/";
                if(!preg_match($pattern,$temp_num_jugadores)){
                    $err_num_jugadores = "El numero de jugadores solo puede contener numeros";
                }else{
                
        if ($temp_num_jugadores <= 0|| $temp_num_jugadores>99) {
            $err_num_jugadores = "El numero de jugadores no puede ser menor o igual que 0 ni mayor que 99";
        } else {
           
                $num_jugadores = $temp_num_jugadores;
                // echo "<p>$num_jugadores</p>";
        
        }
    }
    }


    //PARTE 3
        // Validacion de la edad recomendada
        if (isset($_POST["edad_recomendada"])) {
            $temp_edad_recomendada = depurar($_POST["edad_recomendada"]);
        }else{
            $temp_edad_recomendada="";
        }
        if(empty($temp_edad_recomendada)&&$temp_edad_recomendada==0) {
            $edad_recomendada = $temp_edad_recomendada;
        }else if(empty($temp_edad_recomendada)){
            $err_edad_recomendada = "La edad recomendada no puede estar vacia";
        
        } else {
            $edad_recomendada = $temp_edad_recomendada;
            // echo "<p>$edad_recomendada</p>";

        }
    }

        function depurar($dato)
        {
            $dato = trim($dato);
            $dato = htmlspecialchars($dato);
            $dato = htmlspecialchars($dato);
            return $dato;
        }
            
?>