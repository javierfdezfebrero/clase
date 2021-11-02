/*
Facer un programa que pida un texto ó usuario e o percorra para mostrar nunha ventá emerxente o mesmo
texto sen as vocais, empregando un dos seguintes bucles: while, do-while e for, e a sentencia
continue (isto último opcionalmente).
*/


function quitarVocais() {


    var dato = document.getElementById("dato").value;

    valor = false;

    do {

        let resultado = dato.replace(/[aeiou]/g, '');
        alert(resultado);

    }
    while (valor)

}