/* 
JAVASCRIPT
web o pagina: Ejercicios Unidad 4 - Diseño de Interfaces Web
autor: Prof. Carlos Boni
fecha: Diciembre 2020
resumen:
*/
		// seccion de codigo Javascript o JQuery 
		// para que sea realmente NO INTRUSIVO poner este código en un fichero externo .js
		$(document).ready(function(){
			$("#btnA").click(function(){
				$('#mensaje').html('Has pinchado el botón <b>A</b>');
			});
			$("#btnB").click(function(){
				$('#mensaje').html('Has pinchado el botón <b>B</b>');
			});
		});
        
