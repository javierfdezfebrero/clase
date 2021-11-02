/*
Facer un programa que pida a nota numérica dun alumno e encha unha caixa de texto (div, parágrafo,
formulario, etc. –o que ti prefiras-) en forma de texto (SOBRESAÍNTE –nota maior ou igual ca 8,5-,
NOTABLE –nota maior ou igual ca 7-, SUFICIENTE –nota maior ou igual ca 5-, INSUFICIENTE –noutro
caso-), empregando switch.
*/


function comprobarNota() {


    var dato = document.getElementById("dato").value;

    switch (true) {
        case (8.5 <= dato && dato < 11):
            document.getElementById("nota").innerHTML = "SOBRESAÍNTE";
            break;
        case (7 <= dato && dato < 8.5):
            document.getElementById("nota").innerHTML = "NOTABLE";
            break;
        case (5 <= dato && dato < 7):
            document.getElementById("nota").innerHTML = "SUFICIENTE";
            break;
        case (0 <= dato && dato < 5):
            document.getElementById("nota").innerHTML = "INSUFICIENTE";
            break;

        default:
            document.getElementById("nota").innerHTML = "ERROR";
            break;
    }

}