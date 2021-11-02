/*

Partindo da páxina web que se proporciona, crear un script que valide unha entrada de formulario para que
só se permitan números impares nun rango. En caso contrario deberáse empregar o lanzamento de erros
segundo o tipo de entrada non válida, e facer o tratamento axeitado que corresponda (indicar se o número
foi par ou se foi un texto). Amosa a mensaxe de erro no elemento resultado.
*/

function comprobarErros() {
    let num = document.getElementById("num").value;
    if (num <= 40 && num >= 1) {
        if (num % 2 == 0) {
            alert("El numero non é impar");


        } else {
            document.getElementById("resultado").innerHTML = num;
        }

    } else {
        alert("El numero non esta dentro de rango");
    }
}