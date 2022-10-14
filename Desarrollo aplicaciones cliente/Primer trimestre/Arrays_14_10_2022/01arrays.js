//forma tradicional
//var colores = ["red","blue","yellow"];

//forma objetos
var colores = new Array("red","blue","yellow");

console.log(colores.indexOf(1));
var nuevocolor = prompt("añada un color al array");

colores.push(nuevocolor);
console.log("El nuevo elemento con push esta en la posicion "+colores.indexOf(nuevocolor)+" del array");

var nuevocolor2 = prompt("añada otro color al array");
colores.unshift(nuevocolor2);
console.log("El ultimo elemento con unshift esta en la posicion "+colores.indexOf(nuevocolor2)+" del array");