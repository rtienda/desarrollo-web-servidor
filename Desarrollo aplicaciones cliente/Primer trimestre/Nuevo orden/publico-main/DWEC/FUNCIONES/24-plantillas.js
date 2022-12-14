'use strict'

// Plantillas de texto
// usan como envolvente la comilla inclinada simple, junto a la p del teclado


var nombre = prompt ("Ingresa tu nombre: ");
var apellidos = prompt ("Ingresa tus apellidos:");
var texto = "<h2>Forma normal</h2><p>Te llamas:<br/>"+nombre+" "+apellidos+"</p>";
document.write(texto);

var textoPlantilla = `
<h2>Ahora lo pongo usando plantillas que es más sencillo</h2>
<p>Te llamas:<br/>${nombre} ${apellidos}</p>
`;
document.write(textoPlantilla);

nombre="María"; //lo va a ignorar
apellidos="Gómez Pérez"; //lo va a ignorar
document.writeln("aunque cambio las variables el mensaje es el mismo, pues una plantilla no es una funcion");
document.write(textoPlantilla);
