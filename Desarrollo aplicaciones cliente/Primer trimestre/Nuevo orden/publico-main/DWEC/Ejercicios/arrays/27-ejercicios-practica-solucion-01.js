'use strict'

/* Ejercicios de Práctica, paso a paso:
1. Pedir un nombre completo por pantalla en una única string, y generar un array
tomando los espacios como separadores. Mostrarlo por consola. (Intentar mejorar
el programa cada vez más).

   Comienzo: 19:30
   Fin:20:00
   Tiempo: 30 minutos.
      
*/

// PRIMER SOLUCION

var dato=prompt("PRIMERA SOLUCION: Ingrese el nombre completo");
var dato = dato.trim(); // quito los espacios al comienzo y final
var nombre=dato.split(" ");
console.log("EJERCICIO 1");
console.log("PRIMERA SOLUCION");
console.log(nombre);


// SEGUNDA SOLUCION
/* ahora como se debería hacer un programa:
pido el nombre hasta que sea algo real
o sea no vacío y que tenga al menos 2 elementos
Y a los mensajes los muestro explicados */
// comienzo inicializando las variables que necesito

var dato1="";
var elementos=0;
var nombre1=[]; //creo un array sin ningún elemento.
do {
   dato1=prompt("SEGUNDA SOLUCION: Ingrese el nombre completo");
   dato1 = dato1.trim(); // quito los espacios al comienzo y final
   nombre1=dato1.split(" ");
   elementos=nombre1.length;
} while (elementos<2);
console.log("SEGUNDA SOLUCION");
console.log(nombre1);


// TERCERA SOLUCION

/* ahora un toque de refactorización ideal:
añado mensajes en consola para saber en qué solución estoy
me ahorro una variable
Y a los mensajes los muestro explicados */
// comienzo inicializando las variables que necesito

// var dato1="";
// var elementos=0;
var nombre2=[]; //creo un array sin ningún elemento.
do {
   nombre2=prompt("TERCERA SOLUCION. Ingrese el nombre completo").trim().split(" ");
} while (nombre2.length<2);
console.log("TERCERA SOLUCION");
console.log(nombre1);

