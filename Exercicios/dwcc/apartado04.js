/*
Facer un programa que pida un texto ó usuario, cree un array coas letras do texto (coa función split()) e
percorra o array para mostrar nunha xanela emerxente o mesmo texto sen as vogais, empregando un dos
seguintes bucles: for-of ou for-in, e a sentencia continue (isto último obrigatoriamente).
*/
function quitarVocais() {

    var dato = document.getElementById("dato").value;

    const array = dato.split(' ')

    for (let arr of array) {
        for (let d of arr) {
            if (d == 'a' || d == 'e' || d == 'i' || d == 'u' || d == 'o') {
                array.replace(d, '');
            }
        }
    }

    alert(array)

}