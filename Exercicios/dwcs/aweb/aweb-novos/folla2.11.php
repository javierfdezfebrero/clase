<?php
    require "datos1.php";
?>

<!DOCTYPE html >
<html>

<head>
    <meta charset="UTF-8">
    <title>Ordenando</title>
    <link rel="stylesheet" type="text/css" href="estilosFuncions.css" />


</head>

<body>
    <div id="cabeceira">
        Cine
    </div>


<div id="corpo">
    <form action="folla2.11.php" method="GET">
    <div id="Busqueda">
            <div id="palabra"></div>
            <label> Buscar Exemplar</label>
            <input type="text" name="peli" value="">
            <button id="buscar" type="submit" name="buscar" value="buscar">Buscar</button>
    </div>

    <div id="contenedorBotons">


        <button id="listaCompleta" type="submit" name="listaCompleta" value="listaCompleta">Listado completo de peliculas</button>
        <button id="ordDuracion" type="submit" name="ordDuracion" value="ordDuracion">Ordenado pola dureacion das pelis</button>
        <button id="ordDirector" type="submit" name="ordDirector" value="ordDirector">Ordenado polo director</button>
        <button id="ordTitulo" type="submit" name="ordTitulo" value="ordTitulo">Ordenado polo titulo</button>
    </div>

    <div id="palabra"></div>
    <label> Con dureacion maior que: </label>
    <input type="number" name="duracion" value="">
    </div>

    </form>
</div>


<div id="resultado">
<label>Resultado</label>

<?php
        
        $peli = $_GET['peli'];
        
        function listaCompleta($pelis){
                echo" <table>";
                echo "<tr>";
                echo "<th>Título</th>";
                echo "<th>Autor</th>";
                echo "<th>Duración</th>";
                echo " </tr>";

            foreach ($pelis as $key => $value) {
                echo "<tr>";
                echo " <td> $key</td>";
                foreach ($value as $dato) {
                    echo " <td> $dato</td>";
                
                }
                echo "</tr>";
            }
        }
        function ordDuracion($pelis){
            echo" <table>";
            echo "<tr>";
            echo "<th>Título</th>";
            echo "<th>Autor</th>";
            echo "<th>Duración</th>";
            echo " </tr>";

            foreach ($pelis as $key => $value) {
                echo "<tr>";
                echo " <td> $key</td>";
                foreach ($value as $dato) {
                    echo " <td> $dato</td>";
                
                }
                echo "</tr>";
            }
        }
    
        function buscar($peli, $pelis)
        {

            foreach ($pelis as $key => $value) {
                if ($key == $peli) {
                    echo "<table>";
                    echo "<tr>";
                    echo "<th>Título</th>";
                    echo "<th>Autor</th>";
                    echo "<th>Duración</th>";
                    echo " </tr>";
                    echo "<tr>";
                    echo "<td>$peli</td>";
                    $pelicula = $pelis[$peli];
                    foreach($pelicula as $key => $value){
                    echo " <td> $value</td>";
                    }
                    echo "</tr>";

            }
            
        }
    }

    function ordTitulo($pelis)
        {

           $kpelis = sort($pelis);
           listaCompleta($kpelis);
    }
    function ordDirector($pelis)
        {

            foreach ($pelis as $key => $value) {
                if ($key == $peli) {
                    echo "<table>";
                    echo "<tr>";
                    echo "<th>Título</th>";
                    echo "<th>Autor</th>";
                    echo "<th>Duración</th>";
                    echo " </tr>";
                    echo "<tr>";
                    echo "<td>$peli</td>";
                    $pelicula = $pelis[$peli];
                    foreach($pelicula as $key => $value){
                    echo " <td> $value</td>";
                    }
                    echo "</tr>";

            }
            
        }
    }
   
   

if ($_GET['listaCompleta']) {
   listaCompleta($pelis);
}
if ($_GET['ordDuracion']) {
    ordDuracion($pelis);
 }
 if ($_GET['ordDirector']) {
    ordDirector($pelis);
 }
 if ($_GET['ordTitulo']) {
    ordTitulo($pelis);
 }
 if ($_GET['buscar']) {
    buscar($peli, $pelis);
 }
       
        ?>


    </div>

  

</div>
</body>
</html>