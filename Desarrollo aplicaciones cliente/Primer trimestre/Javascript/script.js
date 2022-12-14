'use strict'

var juana = document.querySelector("#juana");
var julio = document.querySelector("#julio");
var votosJuana=0;
var votosJulio=0;
var textoContador="";
juana.addEventListener("click",contarVotosJuana,false);
julio.addEventListener("click",contarVotosJulio,false);


function contarVotosJuana(){
    votosJuana++;
    console.log(votosJuana);
}
function contarVotosJulio(){
    votosJulio++;
    console.log(votosJulio);
}


function escribirTitulo (){
    var t=document.createElement("h2");
    t.append("Votaciones");
    document.getElementById("mensaje").appendChild(t);
}

function escribirTextoTotales(){
    textoContador="Hasta ahora, Juana tiene "+votosJuana+" votos y Julio tiene "+votosJulio+" votos.";
    var p=document.createElement("p");
    p.append(textoContador);
    document.getElementById("mensaje").appendChild(p);
}

function borrarTextoTotales(){
    if(document.getElementById("mensaje").childNodes[1]!="undefined"){
        document.getElementById("mensaje").childNodes[1].remove();
    }
}