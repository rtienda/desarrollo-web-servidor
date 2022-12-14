'use strict'

// defino un array para este ejercicio
var orientacionSexual = new Array("Heterosexual", "Homosexual", "Bisexual", "Pansexual", "Asexual");

// obtenemos y mostramos la longitud de un array
var largo = orientacionSexual.length;

// genero un mensaje para mostrar el array a continuación
var mensaje="<h4>(a) Recorrido usando el FOR tradicional</h4><p>Orientaciones sexuales según la Wikipedia:</p>";
// lo haré como una lista ordenada, añadiendo las etiquetas HTML adecuadas
mensaje+="<ol>"
// recorro el array añadiendo cada elemento a dicha lista ordenada
for (var i=0;i<largo;i++){
    mensaje+="<li>"+orientacionSexual[i]+"</li>";
}
mensaje+="</ol>";
document.write(mensaje);

mensaje="<h4>(b) Recorrido usando FOREACH</h4><p>Orientaciones sexuales según la Wikipedia:</p>";
// lo haré como una lista ordenada, añadiendo las etiquetas HTML adecuadas
mensaje+="<ol>";
// recorro el array añadiendo cada elemento a dicha lista ordenada
orientacionSexual.forEach(agregar);
// foreach puede llevar un 2do parametro (el indice) y un tercero (el array original)
function agregar(algo){
    // las variables son globales y puedo usarlas
    mensaje+="<li>"+algo+"</li>";
}
mensaje+="</ol>";
document.write(mensaje);

// 
mensaje="<h4>(c) idem con función ANONIMA</h4><p>Orientaciones sexuales según la Wikipedia:</p>";
// lo haré como una lista ordenada, añadiendo las etiquetas HTML adecuadas
mensaje+="<ol>";
// recorro el array añadiendo cada elemento a dicha lista ordenada
orientacionSexual.forEach(
    (elemento)=>{
        mensaje+="<li>"+elemento+"</li>";
    }
);
mensaje+="</ol>";
document.write(mensaje);

// 
mensaje="<h4>(d) idem SIN PARENTESIS (el MÁS SIMPLE) </h4><p>Orientaciones sexuales según la Wikipedia:</p>";
// lo haré como una lista ordenada, añadiendo las etiquetas HTML adecuadas
mensaje+="<ol>";
// recorro el array añadiendo cada elemento a dicha lista ordenada
orientacionSexual.forEach(
    elemento=>{
        mensaje+="<li>"+elemento+"</li>";
    }
);
mensaje+="</ol>";
document.write(mensaje);

// 
mensaje="<h4>(d) idem con FOR..IN </h4><p>Orientaciones sexuales según la Wikipedia:</p>";
// lo haré como una lista ordenada, añadiendo las etiquetas HTML adecuadas
mensaje+="<ol>";
// recorro el array añadiendo cada elemento a dicha lista ordenada
for(let eleccion in orientacionSexual){
    mensaje+="<li>"+orientacionSexual[eleccion]+"</li>";
};
mensaje+="</ol>";
document.write(mensaje);
