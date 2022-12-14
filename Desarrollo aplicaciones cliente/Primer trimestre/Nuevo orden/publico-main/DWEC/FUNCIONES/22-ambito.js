'use strict'
// ambito de variables

function holaMundo(texto){
    var texto_local = "Texto dentro de la función";
    console.log("texto ya dentro de la funcion: ",texto);
    console.log(numero);
    console.log(texto_local);
    texto=texto_local+texto;
    console.log("texto modificado dentro de la funcion: ",texto);
}

var numero=12;
var texto="Soy una variable global llamada texto";
holaMundo(texto);
console.log("texto luego de regresar de la funcion: ",texto);

