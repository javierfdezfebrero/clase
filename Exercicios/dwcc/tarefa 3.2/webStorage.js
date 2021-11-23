function crearCookie() {
    nome = document.getElementById("nome").value;
    valor = document.getElementById("valor").value;

    miStorage = window.sessionStorage;
    miStorage.setItem(nome, valor);



}


function leerCookie() {

    var nome = document.getElementById("nome").value;


    if (nome) {

        var cookies = miStorage.getItem(nome);
        console.log(cookies)
        if (cookies) {
            document.getElementById("resultado").innerHTML = miStorage.getItem(nome);
        } else {
            document.getElementById("resultado").innerHTML = "Non hai cookies";
        }


    } else {
        document.getElementById("resultado").innerHTML = document.cookie;
    }
}

function modificarCookie() {

    var nome = document.getElementById("nome").value;
    var valor = document.getElementById("valor").value;


    if (nome) {
        var existe
        var cookies = document.cookie.split('; ');
        for (let i = 0; i < cookies.length; i++) {
            var cookiesArr = cookies[i].split('=');


            if (nome == cookiesArr[0]) {
                existe = cookies[i];
            }

        }

        if (existe) {

            document.cookie = nome + ' = ' + valor + '; max-age= 1000; path = /;';
            document.getElementById("resultado").innerHTML = "Modificouse a cookie con nome: " + nome + " e Valor: " + valor;
        } else {
            document.getElementById("resultado").innerHTML = "Non hai cookies que coicidan con ese nome";
        }


    } else {
        document.getElementById("resultado").innerHTML = "Non indicaches a cookie";
    }

}

function eliminarCookie() {

    var nome = document.getElementById("nome").value;


    if (nome) {
        var existe
        var valor = '';
        var cookies = document.cookie.split('; ');
        for (let i = 0; i < cookies.length; i++) {
            var cookiesArr = cookies[i].split('=');
            if (nome == cookiesArr[0]) {
                existe = cookies[i];
            }

        }

        if (existe) {

            document.cookie = nome + ' = ' + valor + '; max-age=0; path = /;';
            document.getElementById("resultado").innerHTML = "Eliminouse a cookie con nome: " + nome;
        } else {
            document.getElementById("resultado").innerHTML = "Non hai cookies que coicidan con ese nome";
        }


    } else {
        document.getElementById("resultado").innerHTML = "Non indicaches a cookie";
    }

}