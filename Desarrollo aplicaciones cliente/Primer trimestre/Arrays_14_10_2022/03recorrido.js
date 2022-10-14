var parrafo = new Array("Hay", "3", "elementos", "importantes");

function mostrar(arreglo){
    // for(var i=0;i<arreglo.length;i++){
    //     if(!isNaN(arreglo[i])){
    //         console.log(arreglo[i]);
    //     }
    // }

arreglo.forEach(palabra =>  {
    if(!isNaN(palabra)){
        console.log(palabra);
    }
});
}
mostrar(parrafo);