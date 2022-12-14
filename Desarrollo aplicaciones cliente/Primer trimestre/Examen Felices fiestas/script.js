window.onload;

// const myTimout = setTimeout(mostrar, 3000);

// // function mostrar(){
// //     document.getElementById("Box1").style.visibility="visible";
// // }
// document.getElementById("renoIzq").classList.add('renoIzquerdaMovil');

setTimeout(mostrar, 3000);
setTimeout(transparentar, 3000);
setTimeout(renoI, 3100);
setTimeout(renoD, 3100);

function mostrar(){
    document.getElementById("cuerpo").style.background="transparent";
    
    // document.getElementById("cuerpo").style.background="transparent";

}
function transparentar(){
    document.getElementById("Box1").style.visibility="visible";
    document.getElementById("windowId").style.visibility="visible";

}
function renoI(){
    // document.getElementById("renoIzq").classList.remove('renoIzquerdaQuieto');

    document.getElementById("renoIzq").classList.toggle('renoIzquierdaMovil');

}
function renoD(){
    // document.getElementById("renoIzq").classList.remove('renoIzquerdaQuieto');

    document.getElementById("renoDch").classList.toggle('renoDerechaMovil');

}


// document.getElementById("audio").play();
//toggle class