var parrafo = new Array("Hay", 3, "elementos", "importantes", "en", 1, "cocina");

function mostrarNros(arreglo) {
    console.log(arreglo);
    
    // recorrido tradicional
    for (i = 0; i < arreglo.length; i++) {
        if (!isNaN(arreglo[i])) {
            console.log(arreglo[i]);
        }

    }

    // recorrido con método del array
    arreglo.forEach(palabra => {

        if (!isNaN(palabra)) {
            console.log(palabra);
            
        }

    });

}

mostrarNros(parrafo);

var elem=prompt("del parrafo ***"+parrafo+"***, diga la posición del elemento quiere borrar?");
var cant=prompt("cuántos elementos quiere borrar?");
parrafo.splice(elem,cant);
alert("resultado: ***"+parrafo+"***");

