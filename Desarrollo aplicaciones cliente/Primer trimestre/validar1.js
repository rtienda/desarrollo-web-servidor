'use strict'

var mensaje = "edad incorrecta";
do{
    var edad = parseInt(prompt("ingrese se edad"));

    if ((edad > 17) && (edad < 151)) {
        mensaje = "edad valida";
        document.write(mensaje);

    }
}while(mensaje=="edad incorrecta");

