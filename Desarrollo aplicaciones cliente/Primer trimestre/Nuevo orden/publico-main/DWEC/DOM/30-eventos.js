'use strict'

window.addEventListener('load', () => {
    console.log("evento añadido");
    var titulo;
    var subtitulo;
    var demora;
    var input;

    function botonH1() {
        console.log("botonH1");
        titulo = document.querySelector("h1");
        titulo.addEventListener('dblclick', colorDemorado, false);
    }

    function botonH2() {
        console.log("botonH2");
        subtitulo = document.querySelector("h2");
        subtitulo.addEventListener('dblclick', apagar, false);
    }

    function colorDemorado() {
        demora = setInterval(cambiaColor, 1000); // repetitivo
        // demora = setTimeout (cambiaColor, 1000); // una sola vez
    }

    function apagar() {
        clearInterval(demora);
    }

    function cambiaColor() {
        console.log("cambiarColorFondo");
        if (titulo.style.backgroundColor == 'pink') {
            titulo.style.backgroundColor = "lightblue";
        } else {
            titulo.style.backgroundColor = "pink";
        }

    };

    function controlInput() {
        console.log("controlInput");
        input = document.querySelector("#nom");
        input.addEventListener('focus', dentro, false);
        input.addEventListener('blur', fuera, false);
        input.addEventListener('keydown', presiona, false);
        input.addEventListener('keyup', suelta, false);
    }

    function dentro() {
        console.log("está dentro del campo");

    }

    function fuera() {
        console.log("ha salido del campo");
    }

    function presiona(evento){
        console.log("ha pulsado una tecla");
        console.log(evento.key);
    }

    function suelta(){
        console.log("ha soltado la tecla");        
    }

    botonH1();
    botonH2();
    controlInput();

});
