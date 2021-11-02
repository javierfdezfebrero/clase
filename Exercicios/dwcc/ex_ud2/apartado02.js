/*
Partindo da páxina web que se proporciona, crea un script que calcule a diferenza de días entre dúas datas
(estas poden ser introducidas en milisegundos ou nun formato de texto válido) e amose o resultado no
elemento resultado
*/

function calcularDias() {
    let datos = document.getElementById("a").value;
    let datosb = document.getElementById("b").value;


    document.getElementById("resultado").innerHTML = datos.replace(datos, datosb);

}