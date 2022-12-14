'use strict'
// parametros REST

function mostrarNombres (nombre1, nombre2, ...resto_de_nombres){
    console.log("1er. Nombre: ", nombre1);
    console.log("2do. Nombre: ", nombre2);
    console.log("3er. Nombre: ", resto_de_nombres[0]);
    console.log("4to. Nombre: ", resto_de_nombres[1]);
}

mostrarNombres("Carlota","Alberto");
mostrarNombres("Pablo","Paula","Esteban","Adriana");
mostrarNombres("Irma");
