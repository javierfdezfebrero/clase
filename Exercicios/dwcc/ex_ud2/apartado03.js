/*
Partindo da páxina web que se proporciona, crear un script que saque dez números no rango [0-100), fique
co máximo e calcule a área dun círculo con ese radio (empregando exactamente a fórmula π*r2
). Arredonda
o resultado a 2 decimais e amósao no elemento resultado.
*/

function calcular() {
    let numero = maior();

    let area = Math.PI * (numero * numero);
    area = area.toFixed(2);
    document.getElementById("resultado").innerHTML = area;
}

function ramdom() {
    let numero = Math.random() * (100);
    return Math.round(numero);
}

function maior() {

    return Math.max(ramdom(), ramdom(), ramdom(), ramdom(), ramdom(), ramdom(), ramdom(), ramdom(), ramdom(), ramdom());

}