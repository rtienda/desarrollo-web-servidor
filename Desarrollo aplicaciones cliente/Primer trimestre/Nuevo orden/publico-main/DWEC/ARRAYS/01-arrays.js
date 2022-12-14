// forma tradicional
// var colores = ["red","blue","yellow"];

// forma objetos
var colores = new Array("red","blue","yellow");

console.log('El elemento yellow está en la posición '+colores.indexOf("yellow")+' del array');

var nuevocolor = prompt("añada un color al array");
colores.push(nuevocolor);
console.log('El nuevo elemento con push está en la posición '+colores.indexOf(nuevocolor)+' del array');

var nuevocolor2 = prompt("añada otro color al array");
colores.unshift(nuevocolor2);
console.log('El último elemento con unshift está en la posición '+colores.indexOf(nuevocolor2)+' del array');

