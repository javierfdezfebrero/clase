function navegador() {
    var es_chrome = navigator.userAgent.toLowerCase().indexOf('chrome') > -1;
    var es_firefox = navigator.userAgent.toLowerCase().indexOf('firefox') > -1;
    var es_opera = navigator.userAgent.toLowerCase().indexOf('opera') > -1;
    var es_edge = navigator.userAgent.toLowerCase().indexOf('edge') > -1;



    if (es_chrome) {
        document.getElementById("msg").innerHTML = window.location.hostname;
        alert("Vaise Abrir unha nova xanela https://en.wikipedia.org/wiki/Google_Chrome");
        setTimeout(() => window.open("https://en.wikipedia.org/wiki/Google_Chrome", "Chrome", "width= screen.height/2, height=screen.width/2"), 2000);


    } else if (es_firefox) {
        document.getElementById("msg").innerHTML = location.host;

        alert("Vaise Abrir unha nova xanela https://en.wikipedia.org/wiki/Firefox");
        setTimeout(() => window.open("https://en.wikipedia.org/wiki/Firefox", "Firefox", "width= screen.height/2, height=screen.width/2"), 2000);

    } else if (es_opera) {
        document.getElementById("msg").innerHTML = location.host;

        alert("Vaise Abrir unha nova xanela https://en.wikipedia.org/wiki/Opera");
        setTimeout(() => window.open("https://en.wikipedia.org/wiki/Opera", "Opera", "width= screen.height/2, height= screen.width/2"), 2000);

    } else if (es_edge) {
        document.getElementById("msg").innerHTML = location.host;

        alert("Vaise Abrir unha nova xanela https://en.wikipedia.org/wiki/Microsoft_Edge");
        setTimeout(() => window.open("https://en.wikipedia.org/wiki/Microsoft_Edge", "Edge", "width= screen.height/2, height=screen.width/2"), 2000);

    }


}