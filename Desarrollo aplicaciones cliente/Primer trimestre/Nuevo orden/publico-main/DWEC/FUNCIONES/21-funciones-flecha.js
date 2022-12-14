'use strict'

// Funciones flecha
// notacion simplificada especialmente usada en callbacks en funciones anonimas

// Se reemplaza la palabra funcion por los símbolos igual y mayor que
// Si lleva un solo parametro también se pueden obviar los paréntesis

function sumarYademas(numero1, numero2, operacionUno, operacionDos) {
    var sumar = numero1 + numero2;
    operacionUno(numero1, numero2);
    operacionDos(sumar);
    return sumar;
}

// esta definicion del ejercicio anterior quedaria asi:
let adicion = sumarYademas(7, 2, (n1, n2) => { console.log("La resta es:", n1 - n2) }, nro => { console.log("El cuadrado es: ", nro * nro) });
console.log("La suma es: ",adicion);
