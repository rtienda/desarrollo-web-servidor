'use strict'

// pueden definirse como objetos array
var orientacionSexual = new Array("Heterosexual", "Homosexual", "Bisexual", "Pansexual", "Asexual");

console.log(orientacionSexual);

var duda="Bisexual";

// usamos una plantilla para mostrar el resultado de búsqueda dentro del array
var resultado=orientacionSexual.find(
    function(elemento){
        return elemento== duda;
    }
);
console.log(resultado);

// O, simplificando como ya hemos visto antes, también elimnamos return y llaves
var resultado=orientacionSexual.find(
    elemento => elemento== duda
);
console.log(resultado);

// usamos otro método para sacar el INDEX y podemos entonces mostrar todo:
var indice=orientacionSexual.findIndex(
    elemento => elemento== duda
);
console.log(`${duda} está en la posición ${indice} del array orientacionSexual`);


// ahora si existe algún elemento que cumple una condición, por 
// ejemplo que empiece con Z usando otro método
// esto es más útil o sencillo para búsquedas numéricas
// es booleana

var letra = "P"
var conEsaLetra=orientacionSexual.some(
    elemento => elemento>= letra
);
console.log(conEsaLetra);
