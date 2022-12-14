'use strict'

// Funciones con parametros opcionales o con valor por defecto

// Defino la función
function calculadora(numero1, numero2, mostrar = false){    
    
    if (mostrar == false) {
        console.log("Suma: "+ (numero1+numero2));
        console.log("Resta: "+ (numero1-numero2));
        console.log("Multiplicación: "+ (numero1*numero2));
        console.log("División: "+ (numero1/numero2));
    }
    else {
        document.writeln("Suma: "+ (numero1+numero2));
        document.writeln("Resta: "+ (numero1-numero2));
        document.writeln("Multiplicación: "+ (numero1*numero2));
        document.writeln("División: "+ (numero1/numero2));        
    }

}

// invocamos la funcion con alternativas
calculadora(20,4);
calculadora (15,3,true);




