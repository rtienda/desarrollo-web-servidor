var numero1 = 46;
var numero2 = 4;
var numero3 = 00;

function porConsola (num1,num2,num3){
    console.log(num1);
    console.log(num2);
    console.log(num3);
}

function porConsola2(num1,...otros){
    //parametros REST
    console.log(num1);
    console.log(otros);
    console.log(otros.length);
}

function separar(valor1,valor2,valor3,valor4){
    console.log(valor1);
    console.log(valor2);
    console.log(valor3);
    console.log(valor4);
}

// porConsola(numero1,numero2,numero3);
// porConsola2(numero1,numero2,numero3);

var arreglo = new Array ("Hola",1,false,"FIN");
separar(...arreglo);
console.log(arreglo);


