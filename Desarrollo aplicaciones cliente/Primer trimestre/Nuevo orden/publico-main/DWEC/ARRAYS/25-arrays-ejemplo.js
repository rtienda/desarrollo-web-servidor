'use strict'

// EJEMPLO:
// muestro la posición del array elegida por el usuario
var orientacionSexual = new Array("Heterosexual", "Homosexual", "Bisexual", "Pansexual", "Asexual");
var largo = orientacionSexual.length;
var posicion = 0;
do {
    posicion = parseInt(prompt(`elija un elemento a mostrar, de 1 a ${largo} (0=FIN)`));
    if ((posicion > 0) && (posicion <= largo)) {
        alert(`*${orientacionSexual[posicion-1]}* está en la posición ${posicion} del array.`);
    }   
} while (posicion != 0);

