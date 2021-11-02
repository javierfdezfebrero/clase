/*
A función myLength() debe amosar no elemento resultado a lonxitude do que se escriba no
campo a.
 A función myConcat() debe amosar no elemento resultado a concatenación do que se escriba
nos campos a e b.
 A función myUpperCase() debe amosar no elemento resultado o se escriba no campo a pero
convertido a carácteres maiúsculos.
 A función myCharAt() debe amosar no elemento resultado o carácter da cadea que se escriba no
campo a pero cuxo índice será determinado polo campo b.
 A función mySubstr() debe amosar no elemento resultado o carácter da cadea que se escriba no
campo a pero cuxos índices serán determinados polo campo b (indícaos separados por unha coma).
 A función myCompare() debe amosar no elemento resultado a comparación do que se escriba
nos campos a e b, indicando «IGUAIS» ou «DISTINTAS».
 A función myReplace() debe amosar no elemento resultado o carácter de substituir na cadea que
se escriba no campo a a subcadea que se escriba no campo b

*/

function myLength() {
    let datos = document.getElementById("a").value;

    document.getElementById("resultado").innerHTML = datos.length;

}

function myConcat() {
    let datos = document.getElementById("a").value;
    let datosb = document.getElementById("b").value;

    document.getElementById("resultado").innerHTML = datos.concat(datosb);

}

function myUpperCase() {
    let datos = document.getElementById("a").value;


    document.getElementById("resultado").innerHTML = datos.toUpperCase();

}

function myCharAt() {
    let datos = document.getElementById("a").value;
    let datosb = document.getElementById("b").value;


    document.getElementById("resultado").innerHTML = datos.charAt(datosb);

}

function mySubstr() {
    let datos = document.getElementById("a").value;
    let datosb = document.getElementById("b").value;
    let array = datosb.split(',')


    document.getElementById("resultado").innerHTML = datos.substr(array[0], array[1]);

}

function myCompare() {
    let datos = document.getElementById("a").value;
    let datosb = document.getElementById("b").value;

    if (datos == datosb) {
        document.getElementById("resultado").innerHTML = "IGUAIS";

    } else {
        document.getElementById("resultado").innerHTML = "DISTINTOS";
    }



}

function myReplace() {
    let datos = document.getElementById("a").value;
    let datosb = document.getElementById("b").value;

    document.getElementById("resultado").innerHTML = datos.replace(datos, datosb);


}