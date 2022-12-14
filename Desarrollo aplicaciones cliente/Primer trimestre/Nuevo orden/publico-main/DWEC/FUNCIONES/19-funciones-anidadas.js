'use strict'

// Funciones anidadas

// Defino la función
function calculadora(numero1, numero2, mostrar = false){    
    
    if (mostrar == false) {
        porConsola("Suma: "+ (numero1+numero2));
        porConsola("Resta: "+ (numero1-numero2));
        porConsola("Multiplicación: "+ (numero1*numero2));
        porConsola("División: "+ (numero1/numero2));
    }
    else {
        porPantalla("Suma: "+ (numero1+numero2));
        porPantalla("Resta: "+ (numero1-numero2));
        porPantalla("Multiplicación: "+ (numero1*numero2));
        porPantalla("División: "+ (numero1/numero2));        
    }
   
}

function porConsola(texto){
    console.log(texto);
}
function porPantalla(texto){
    document.writeln(texto);
}

// invocamos la funcion con alternativas
calculadora(20,4);
calculadora (15,3,true);




