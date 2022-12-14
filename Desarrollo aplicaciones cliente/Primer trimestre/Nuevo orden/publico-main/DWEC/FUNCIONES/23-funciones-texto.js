'use strict'
// transformacion de textos o cadenas
var numero = 444;
var texto1 = "Manejando textos";
var texto2 = "Hay muchas cosas interesantes";

var dato=numero.toString(); //lo estamos usando como método de un objeto, por eso no va como parametro
console.log(dato, typeof dato);

console.log("MAYUSCULAS y minusculas, son metodos");
console.log(texto1.toUpperCase(), texto2.toLowerCase());

console.log("Longitud de una variable no lleva parentesis: es PROPIEDAD, no un metodo:");
console.log(texto1.length, texto1);
console.log("si lo uso en un array me da la cantidad de elementos.");

console.log("Textos concatenados con operador suma:");
console.log(texto1+" "+texto2);

console.log("Textos concatenados también con operador concat:");
console.log(texto1.concat(" "+texto2));

console.log("Encontrar la posicion en la cual se ubica un texto dentro de otro:");
console.log("***cosas*** está en la posición "+texto2.indexOf("cosas")+" de ***"+texto2+"***.");
console.log("si no estuviera sería -1.");

console.log("Un arreglo con todas las ocurrencias de un texto en otro:");
console.log("la letra e: "+texto2.match(/e/g)+" en "+texto2);

console.log("Una porción del texto: entre el 5 caracter y el 8");
console.log(texto2.substring(5,8));

console.log("La primer ocurrencia de un caracter en un string:");
console.log("la letra *"+texto2.charAt("0")+"* está en la posición 0 del texto: "+texto2);

console.log("Evalúan si una string comienza, incluye o termina con un texto dado");
console.log("Es *"+texto1.startsWith("Hola")+"* que *"+texto1+"* empieza por *Hola*");
console.log("Es *"+texto1.startsWith("Manej")+"* que *"+texto1+"* empieza por *Manej*");
console.log("Es *"+texto1.endsWith("Chau")+"* que *"+texto1+"* termina con *Chau*");
console.log("Es *"+texto1.endsWith("extos")+"* que *"+texto1+"* termina con *extos*");
console.log("Es *"+texto1.includes("vaca")+"* que *"+texto1+"* incluye *vaca*");
console.log("Es *"+texto1.includes("do tex")+"* que *"+texto1+"* incluye *do tex*");

console.log("Modificar una string: reemplazar texto");
console.log("*"+texto2.replace("as cosas","os temas")+"* en lugar de *"+texto2+"*");
console.log("Una porción del texto: entre el 5 caracter y el 8 (slice es como susbstring)");
console.log(texto2.slice(5,8));
console.log("Convertirla en muchas substrings, por ej. corto en los espacios");
console.log(texto2.split(" "));
console.log("Quitamos espacios al inicio y al final usando trim");
let textoConEspacios = "     este texto    ";
console.log("*"+textoConEspacios+"* se convierte en *"+textoConEspacios.trim()+"*");


