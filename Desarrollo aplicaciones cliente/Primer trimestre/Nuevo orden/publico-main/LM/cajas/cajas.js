'use strict'

var cont;
var estiloinicial;
var boton;

document.addEventListener("load", function() {
    
    cont = document.querySelector("#contenedor");
    inicial();
    // añadimos el clic a los botones
    boton = document.querySelector("#boton1");
    boton.addEventListener("click",cajas1,false);
    boton = document.querySelector("#boton2");
    boton.addEventListener("click",cajas2,false);
    
}, true);

function inicial() {
    console.log("A VER ESTO...");
    let elemento=document.getElementById("contenedor","display");
    estiloinicial = window.getComputedStyle(elemento);
}

function cajas1() {
    cont.style = 'none';
    cont.style = estiloinicial;
}

function cajas2() {
    cajas1();
    cont.style.flexDirection = 'undefined';
    cont.style.flexDirection = 'column-reverse';
}

