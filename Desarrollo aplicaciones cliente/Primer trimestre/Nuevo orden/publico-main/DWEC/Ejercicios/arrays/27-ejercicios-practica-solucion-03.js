'use strict'

/* Ejercicios de Práctica, paso a paso:
3. Sin modificar el array, mostrarlo en pantalla en orden ascendente

   Comienzo: 20:18
   Fin: 20:23
   Tiempo:  5 minutos.
      
*/

// SOLUCION

var nombre=[]; //creo un array sin ningún elemento.
do {
   nombre=prompt("EJERCICIO 3: Ingrese el nombre completo").trim().split(" ");
} while (nombre.length<2);
console.log("EJERCICIO 3");
console.log(nombre.sort());

// o más prolijamente, para evitar las comas, hago un bucle
document.write("<br/>Nombre sin comas:");
nombre.sort().forEach(elemento => {
   document.write(elemento+" ");
});