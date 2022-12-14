'use strict'

// Sistema de votaciones.

//inicializar los contadores de votos

// opcion inicializar nombre a mano
var tabla1 = new Array;
tabla1[0] = ['Juana', 0, 0];
tabla1[1] = ['Julio', 0, 0];
console.log(tabla1);


// funcionalidad del botón para emitir el voto
var votar = document.getElementById('votar');
votar.addEventListener('click', () => {
    // miro el candidato
    let candidato = document.querySelector("#candidato");
    console.log('candidato: ' + candidato.options.selectedIndex);
    let indice1 = candidato.options.selectedIndex;
    console.log(candidato.options[indice1].value);
    // miro el cargo
    let cargo = document.querySelector("#cargo");
    console.log('cargo: ' + cargo.options.selectedIndex);
    let indice2 = cargo.options.selectedIndex;
    console.log(cargo.options[indice2].value);

    // actualizo el voto correspondiente
    tabla1[indice1][1 + indice2] = tabla1[indice1][1 + indice2] + 1;

    // mensajes de control en la consola
    let mensaje = 'Hay ' + tabla1.length + ' candidatos';
    console.log(mensaje);
    mensaje = 'Hay ' + tabla1[0].length + ' cargos';
    console.log(mensaje);
    mensaje = 'NUEVO VOTO: para el candidato ' + indice1 + ' para el cargo ' + indice2;
    console.log(mensaje);
    console.log(tabla1);

    // actualizamos mensajes en la pantalla
    let resultados = document.querySelector("#resultados");
    resultados.innerHTML = "";
    let parrafo = document.createElement("p");
    mensaje = "RESULTADOS ACTUALIZADOS<br/>";
    for (candidato in tabla1) {
        mensaje = mensaje + tabla1[candidato][0] + ' tiene ' + tabla1[candidato][1] + ' votos de delegado y ' + tabla1[candidato][2] + ' votos de subdelegado.<br/>';
    }
    parrafo.innerHTML = mensaje;
    resultados.appendChild(parrafo);



}, false);
