'use strict'

// Funciones anonimas
// se definen implicitamente al necesitarlas pero sin darles un nombre

// Funcion de callback
// Cuando un parametro es en realidad una llamada a otra funcion que se llama
// desde dentro de la funcion original

function sumarYademas(numero1, numero2, operacionUno, operacionDos) {
    var sumar = numero1 + numero2;
    operacionUno(numero1, numero2);
    operacionDos(sumar);
    return sumar;
}

// llamo a la funcion y en este momento defino implicitamente lo que haran las operaciones
// en este caso, resto los numeros y elevo al cuadrado el parametro recibido
let adicion = sumarYademas(7, 2, function (n1, n2) { console.log("La resta es:", n1 - n2) }, function (nro) { console.log("El cuadrado es: ", nro * nro) });
console.log("La suma es: ",adicion);
