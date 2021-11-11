function getLinks() {
    let numeroEnlaces = document.getElementsByTagName('a');

    document.getElementById('resultado').innerHTML = "Número de enlaces " + numeroEnlaces.length + "<br>";

    for (let index = 0; index < numeroEnlaces.length; index++) {

        document.getElementById('resultado').innerHTML = document.getElementById('resultado').innerHTML + numeroEnlaces[index] + "<br>";

    }

}

function getImg() {

    let imagenes = document.getElementsByTagName('img');
    console.log("Holaaaaa", imagenes);

    document.getElementById('resultado').innerHTML = "Número de enlaces " + imagenes.length + "<br>";

    for (let index = 0; index < imagenes.length; index++) {



        document.getElementById('resultado').innerHTML = document.getElementById('resultado').innerHTML + imagenes[index].getAttribute('src') + "<br>";

    }


}

function fixImg() {

    let imagenes = document.getElementsByTagName('img');

    for (let index = 0; index < imagenes.length; index++) {


        imagenes[index].src = 'http://www.rfetm.es/' + imagenes[index].getAttribute('src');

    }




}