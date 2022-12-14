'use strict'

// Funciones con parametros

// Defino la función
function calculadora(numero1, numero2){    
    // instrucciones a ejecutar
    console.log("Suma: "+ (numero1+numero2));
    console.log("Resta: "+ (numero1-numero2));
    console.log("Multiplicación: "+ (numero1*numero2));
    console.log("División: "+ (numero1/numero2));    
    return " ****** Ya termine de hacer este bloque ******";
}

// invocamos la funcion con un parámetro variable y el otro constante
for(var i=1;i<=10;i++){
    console.log("Paso "+i);
    let respuesta = calculadora(i,4);
    console.log(respuesta);
}

