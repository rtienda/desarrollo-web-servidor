<?php

    function dniValido($dni){
        $resultado=false;
        if(strlen($dni)==9){
            if(primerosOcho($dni)){
           
                if(letraValida($dni)){
                    //echo "bien";
                    $resultado=true;
                }
            }
        }
       
        return $resultado;
    }

    function primerosOcho($dni){
        $result=true;
        for($i=1;$i<strlen($dni)-1;$i++){
            if(!is_numeric(substr($dni,$i,1))){
                $result=false;
            }
        return $result;
        }
    }

    function letraValida($dni){
        $letra=substr($dni,strlen($dni)-1,1);
        $numero=substr($dni,0,8);
        //echo "letra: $letra</br>";
        //echo "nunero: $numero</br>";
        $calculo=$numero%23;
        //echo "calculo: $calculo</br>";
        $letra_correcta=match ($calculo){
            0 => "T",
            1 => "R",
            2 => "W",
            3 => "A",
            4 => "G",
            5 => "M",
            6 => "Y",
            7 => "F",
            8 => "P",
            9 => "D",
            10 => "X",
            11 => "B",
            12 => "N",
            13 => "J",
            14 => "Z",
            15 => "S",
            16 => "Q",
            17 => "V",
            18 => "H",
            19 => "L",
            20 => "C",
            21 => "K",
            22 => "E",
            default => "PP",
        };
        if($letra_correcta==strtoupper($letra)){
            return true;
        }else{
            return false;
        }
    }


?>
