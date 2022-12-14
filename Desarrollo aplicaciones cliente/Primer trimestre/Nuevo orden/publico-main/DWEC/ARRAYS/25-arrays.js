'use strict'

// Arrays, Arreglos, Matrices son sinóminos y pueden ser multidimensionales
// Por convención, se habla de matrices cuando son multimensionales, y
// se habla de Arreglo cuando es de una sola dimensión.
// Array es el nombre que usa JavaScript en todos los casos.

var nombre = "Carlos Boni";

// Array: coleccion de tipos de datos (o datos agrupados) dentro de una misma variable
// puede tener muchos valores de diferente tipo
var nombres = ["Carlos Boni", "Juan Perez", "Alejandra Anaya", "Marcela de la Fuente", 33, false];

// pueden definirse como objetos array
var orientacionSexual = new Array("Heterosexual", "Homosexual", "Bisexual", "Pansexual", "Asexual");

console.log(nombre);
console.log(nombres);
console.log(orientacionSexual);

// los indices van desde cero hasta n-1
// usamos una plantilla para mostrar uno de los elementos de un array
console.log(`${nombres[2]} está en la posición 2 del array nombres`);

// obtenemos y mostramos la longitud de un array
var largo = orientacionSexual.length;
console.log(`el arreglo orientacionSexual tiene ${largo} elementos`);

