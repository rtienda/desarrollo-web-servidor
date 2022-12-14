'use strict'

// Sistema de votaciones.
var votosJuana = 0;
var votosJulio = 0;
var textoContador = "";


var juana = document.querySelector("#juana");
var julio = document.querySelector("#julio");

juana.addEventListener("click", contarVotosJuana, false);
julio.addEventListener("click", contarVotosJulio, false);


function contarVotosJuana() {
    votosJuana++;
    console.log('Juana ya tiene ' + votosJuana + ' votos.');
}

function contarVotosJulio() {
    votosJulio++;
    console.log('Julio ya tiene ' + votosJulio + ' votos.');
}

function escribirTitulo() {
    var t = document.createElement("h2"); //creamos el título
    t.append("VOTACIONES"); // lo rellenamos
    document.getElementById("mensaje").appendChild(t); //lo colgamos del div vacío
}

function escribitTextoTotales() {
    textoContador = "Hasta ahora, JUANA tiene " + votosJuana + " votos y JULIO tiene " + votosJulio + " votos.";
    var p = document.createElement("p");
    p.append(textoContador);
    document.getElementById("mensaje").appendChild(p); //lo colgamos del div del mensaje
}

function borrarTextoTotales(){
    if (document.getElementById("mensaje").childNodes[1]!="undefined"){
        document.getElementById("mensaje").childNodes[1].remove();
    }
}