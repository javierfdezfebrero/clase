/*
Facer un programa que pida a nota numérica dun alumno e a mostre nunha ventá emerxente en forma de
texto (SOBRESAÍNTE –nota maior ou igual ca 8,5-, NOTABLE –nota maior ou igual ca 7-, SUFICIENTE –
nota maior ou igual ca 5-, INSUFICIENTE –noutro caso-), empregando if-else e/ou if-else
*/



function comprobarNota() {
    let dato = document.getElementById("dato").value;
    console.log(dato);
    if (dato >= 8.5) {
        alert('SOBRESAÍNTE –nota maior ou igual ca 8,5-');
    } else if (dato >= 7) {
        alert('NOTABLE –nota maior ou igual ca 7-');
    } else if (dato >= 5) {
        alert('SUFICIENTE -nota maior ou igual ca 5-');
    } else {
        alert('INSUFICIENTE');
    }

}