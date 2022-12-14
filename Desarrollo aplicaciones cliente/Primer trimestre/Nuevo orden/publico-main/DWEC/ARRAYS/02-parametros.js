'use strict'

var numero1 = 46;
var numero2 = "Día del Padre";
var numero3 = true;

function porConsola(n1, n2, n3) {
    console.log(n1);
    console.log(n2);
    console.log(n3);
}

function porConsola2(n1, ...otros) {
    // parametros REST
    console.log(n1);
    console.log(otros);
    console.log(otros.length);
}

function separar(valor1, ...valor2){
    console.log(valor1);
    console.log(valor2);
}

// porConsola (numero1, numero2, numero3);
porConsola2 (numero1, numero2, numero3, "casa", true, "FIN");

var arreglo = new Array ("HOla",1,false,"FIN");
console.log(arreglo);
separar(...arreglo);


