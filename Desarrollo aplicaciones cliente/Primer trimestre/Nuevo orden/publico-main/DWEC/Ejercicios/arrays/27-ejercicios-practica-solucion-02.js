'use strict'

/* Ejercicios de Práctica, paso a paso:
2. Mostrarlo además en el cuerpo de la página.

   Comienzo: 20:05
   Fin: 20:12
   Tiempo: 7 minutos.
      
*/

// SOLUCION

var nombre=[]; //creo un array sin ningún elemento.
do {
   nombre=prompt("EJERCICIO 2: Ingrese el nombre completo").trim().split(" ");
} while (nombre.length<2);
console.log("EJERCICIO 2");
console.log(nombre);
document.writeln("El nombre completo es: "+nombre);

// o más prolijamente, para evitar las comas, hago un bucle
document.write("<br/>Nombre sin comas:");
nombre.forEach(elemento => {
   document.write(elemento+" ");
});