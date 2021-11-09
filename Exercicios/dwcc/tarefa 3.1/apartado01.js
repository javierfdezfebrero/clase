Window.ventana;

function cambiarPosicion() {
    let x = document.getElementById("x").value;
    let y = document.getElementById("y").value;




    ventana = window.moveTo(x, y);


}

function abrir() {

    ventana = window.open("", "ventana1", "height=200,width=700,top=300");


}

function cerrar() {

    ventana.window.close();


}

function redimensionar(valor) {

    if (valor == "mais") {
        ventana.focus();
        ventana.resizeBy(10, 10);
    } else if (valor == "menos") {
        ventana.focus();
        ventana.resizeBy(-10, -10);
    } else {
        console.log("ERROR")
    }


}