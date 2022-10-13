<?php

    function dniValido($dni){
        $resultado=false;
        if(primerosOcho($dni)){
           
            if(letraValida($dni)){
                echo "bien";
                $resultado=true;
            }
        }
        return $resultado;
    }

    function primerosOcho($dni){
        $result=true;
        for($i=1;$i<strlen($dni)-1;$i++){
            if(is_numeric(substr($dni,$i,1))){
                
            }else{
            

                $result=false;
            }
            
        }
        return $result;
    }
    function letraValida($dni){
        $letra=substr($dni,strlen($dni)-1,1);
        
        return true;
    }


?>
