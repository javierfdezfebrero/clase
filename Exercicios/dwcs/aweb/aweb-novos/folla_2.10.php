<!DOCTYPE html >
<html>

<head>
    <meta charset="UTF-8">
    <title>Ordenando</title>
    <link rel="stylesheet" type="text/css" href="estilosFuncions.css" />


</head>

<body>
    <div id="todo">





        <h2>Ordenando</h2>

        <form action="folla_2.10.php" method="GET">


            <div id="img">

            </div>
            <div id="frase"></div>
            <label> Introduce unha frase</label>
            <input type="text" name="frase" value="Este ano está chovendo todas as tardes">
    </div>

    <div id="contenedorBotons">


        <button id="pasarM" type="submit" name="pasarM" value="pasarM">Pasa a maiúscula a primeira letra</button>
        <button id="pasarMin" type="submit" name="pasarMin" value="pasarMin">Pasa a minúscula a primeira letra</button>
        <button id="sinEspacios" type="submit" name="sinEspacios" value="sinEspacios">Elimina os espazos</button>
        <button id="eliminaE" type="submit" name="eliminaE" value="eliminaE">Elimina as letras 'e'</button>
        <button id="espazosXComas" type="submit" name="espazosXComas" value="espazosXComas">Cambio os espazos por comas</button>
    </div>

    <div id="palabra"></div>
    <label> Introduce unha palabra</label>
    <input type="text" name="palabra" value="Introduce unha palabra">
    </div>

    <div id="contenedorBotons">


        <button id="buscarFrase" type="submit" name="buscarFrase" value="buscarFrase">A palabra esta na frase?</button>
        <button id="eliminaPalabra" type="submit" name="eliminaPalabra" value="eliminaPalabra">Elimina a palabra</button>
        <button id="tardesXNoites" type="submit" name="tardesXNoites" value="tardesXNoites">Cambia 'tardes' por 'noites'</button>
    </div>

    <div id="resultado">
<label>Resultado</label>
        <?php
     
        $frase= $_GET['frase'];
        $palabra= $_GET['palabra'];
        
        function pasarM($array){
            $letra= $array;
        return ucfirst( $letra);
        }
        function pasarMin($array){
            $letra= $array;
        return lcfirst( $letra);
        }
        function sinEspacios($array){
            $letra= $array;
        return str_replace(' ', '', $letra);
        }
        function eliminaE($array){
            $letra= $array;
        return str_replace('e', '', $letra);
        }
        function espazosXComas($array){
            $letra= $array;
        return str_replace(' ', ',', $letra);
        }
        function buscarFrase($array, $palabra){
            if (strpos($array, $palabra)){
                return "Si está a palabra na palabra";
        }else{
                return "A palabra non esta na frase";
            }
        }
        function eliminaPalabra($array, $palabra){
            return str_replace($palabra, '', $array);
        }
        function tardesXNoites($array, $palabra){
            return str_replace('tardes', '', $array);
        }
        
        
        
        if ($_GET['pasarM']){
            
            echo "<span>". pasarM($frase)."</span>";
            
        }
        if ($_GET['pasarMin']){
            
            echo "<span>". pasarMin($frase)."</span>";
            
        }
        if ($_GET['sinEspacios']){
            
            echo "<span>". sinEspacios($frase)."</span>";
            
        }
        if ($_GET['eliminaE']){
            
            echo "<span>". eliminaE($frase)."</span>";
            
        }
        if ($_GET['espazosXComas']){
            
            echo "<span>". espazosXComas($frase)."</span>";
            
        }
        if ($_GET['buscarFrase']){
            
            echo "<span>". buscarFrase($frase, $palabra)."</span>";
            
        }
        if ($_GET['eliminaPalabra']){
            
            echo "<span>". eliminaPalabra($frase, $palabra)."</span>";
            
        }
        if ($_GET['tardesXNoites']){
            
            echo "<span>". tardesXNoites($frase, $palabra)."</span>";
            
        }
        
        ?>


    </div>

    </form>

    </div>


</body>


</html>