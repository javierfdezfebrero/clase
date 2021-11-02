/*
Partindo da páxina web que se proporciona, crea un script que calcule a diferenza de días entre dúas datas
(estas poden ser introducidas en milisegundos ou nun formato de texto válido) e amose o resultado no
elemento resultado
*/

function calcularDias() {
    let datos = document.getElementById("a").value;
    let datosb = document.getElementById("b").value;
    
    let fecha = new RegExp(/^([0-9]{4})-([0-9]{2})-([0-9]{2})$/);
    var day_en_milliseconds = 86400000;
    
    if(fecha.test(datos) &&  fecha.test(datos)){

    var date_1 = new Date(datos);
    var date_2 = new Date(datosb);
    console.log("hola", date_1);
    console.log("hola", date_2);

    
    var dif_en_millisenconds = date_2 - date_1;
    var dif_en_days = dif_en_millisenconds / day_en_milliseconds;
    document.getElementById("resultado").innerHTML = dif_en_days;
    
    }else if (datos>= day_en_milliseconds && datosb>=day_en_milliseconds) {
        var dif_en_days_2 = (datosb - datos)/day_en_milliseconds;
    document.getElementById("resultado").innerHTML = Math.round(dif_en_days_2);
        
    } else{
        alert("Fecha no valida")
    }
}