function crearCookie() {
    nome = document.getElementById("nome").value;
    valor = document.getElementById("valor").value;

    miStorage = window.sessionStorage;
    miStorage.setItem(nome, valor);



}

function leerCookie() {

    miStorage = window.sessionStorage;
    var nome = document.getElementById("nome").value;
    var existe;

    if (nome) {
        for (let i = 0; i < miStorage.length; i++) {
            if (nome == miStorage.key(i)) {

                existe = miStorage.key(1);
            }
        }

        if (existe) {

            document.getElementById("resultado").innerHTML = nome + '=' + miStorage.getItem(nome);
        } else {

            document.getElementById("resultado").innerHTML = "NON existe a Cookie indicada";
        }
    } else {
        for (let index = 0; index < miStorage.length; index++) {
            document.getElementById("resultado").innerHTML = document.getElementById("resultado").innerHTML + "<br>" + miStorage.getItem(miStorage.key(index));
            document.getElementById("resultado").innerHTML = document.getElementById("resultado").innerHTML + miStorage.key(index) + '=' + miStorage.getItem(miStorage.key(index)) + '<br>';
        }
    }

}

function modificarCookie() {
    miStorage = window.sessionStorage;
    var nome = document.getElementById("nome").value;
    var valor = document.getElementById("valor").value;
    var existe;


    if (nome && valor) {
        for (let i = 0; i < miStorage.length; i++) {
            if (nome == miStorage.key(i)) {

                existe = miStorage.key(1);
            }
        }
        if (existe) {
            miStorage.setItem(nome, valor);

            document.getElementById("resultado").innerHTML = "Modificouse a cookie con nome: " + nome + " e Valor: " + valor;

        } else {
            document.getElementById("resultado").innerHTML = "Non hai cookies que coicidan con ese nome";
        }


    } else {
        document.getElementById("resultado").innerHTML = "Non indicaches a cookie ou o valor";
    }

}

function eliminarCookie() {
    miStorage = window.sessionStorage;
    var nome = document.getElementById("nome").value;
    var existe;


    if (nome) {
        for (let i = 0; i < miStorage.length; i++) {
            if (nome == miStorage.key(i)) {

                existe = miStorage.key(1);
            }
        }
        if (existe) {
            miStorage.removeItem(nome);

            document.getElementById("resultado").innerHTML = "eliminouse a cookie " + nome;


        } else {
            document.getElementById("resultado").innerHTML = "Non hai cookies que coicidan con ese nome";
        }


    } else {
        document.getElementById("resultado").innerHTML = "Non indicaches a cookie";
    }

}