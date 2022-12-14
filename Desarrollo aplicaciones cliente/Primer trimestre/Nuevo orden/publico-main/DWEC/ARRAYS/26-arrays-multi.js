'use strict'

// Arrays multidimensionales son arrays dentro de otros arrays

// defino 2 arrays
var generos = ["Accion", "Terror", "Comedia"];
var calificacion = new Array("Todo Publico", "+9");

//añado un elemento con un método específico
calificacion.push("+18");

// defino una matriz
var cine = [generos, calificacion];

// muestro la matriz completa
console.log(cine);

// muestro todos los generos
console.log(cine[0]);

// muestro el último género
console.log(cine[0][2]);

// lo mismo pero averiguando la longitud
var cantidad = cine[0].length;
console.log(cine[0][cantidad-1]);

// elimino el primer género definido
generos.splice(0,1);
// vuelvo a mostrar todos los generos con dos formas alternativas
console.log(generos);
console.log(cine[0]);

// restauro el elemento eliminado usando otro metodo
generos.unshift("Acción");
console.log(generos);

// genero un string único de cada uno de los siguientes arrays,
// uniendo sus elementos con un espacio en blanco
// si no indico nada, los separa con comas.

var losGeneros = generos.join(" ");
var lasCalificaciones = calificacion.join();
var elCine = cine.join(";");

console.log(losGeneros);
console.log(lasCalificaciones);
console.log(elCine);

// también podemos crear un array a partir de una cadena,
// como habíamos visto en 23-funciones-texto.js

var lasPeliculas = "Mamma Mía-Las Cenizas de Ángela-Tootsie-Planeta 57";
var peliculas = lasPeliculas.split("-");
console.log(peliculas);
//  y lo añado a la matriz Cine también
cine.push(peliculas);
console.log(cine);

// orden actual de los generos
console.log(generos);
// orden inverso al actual de los generos
console.log(generos.reverse());
// orden alfabetico ascendente de los generos
console.log(generos.sort());
// orden alfabetico descendente de los generos
console.log(generos.sort().reverse());



