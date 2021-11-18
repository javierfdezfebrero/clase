function crearCookie() {
    nome = document.getElementById("nome").value;
    valor = document.getElementById("valor").value;
    console.log('HOlaaaa', nome)

    document.cookie = nome + '=' + valor + '; max-age=100; path=/;';


}


function leerCookie() {

    nome = document.getElementById("nome").value;


    if (nome) {

    } else {
        document.getElementById("resultado").innerHTML = document.cookie;
    }



    document.cookie = nome + ' = ' + valor + '; max-age= 1000; path = /;';


}