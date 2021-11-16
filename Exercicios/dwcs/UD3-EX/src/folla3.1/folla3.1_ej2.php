<!DOCTYPE html>
<html>
<head>
 <title>Conexión a bases de datos</title>
 <meta charset=”UTF8”>
</head>
<body>

<form action="folla3.1_ej2.php" method="GET">

    <div id="contenedorBotons">
        <button  type="submit" name="aOrixen" id="aOrixen" value="aOrixen">alfabeticamente polo nome da orixe</button>
        <button type="submit" name="aOrixenDesc" value="aOrixenDesc" >orden
alfabético descendente do nome da orixe (da Z á A)</button>
        <button  type="submit" name="aDestino" value="aDestino">destino alfabeticamente</button>
        <button  type="submit" name="aDestinoDesc" value="aDestinoDesc">orden alfabético descendente do
nome do destino</button>
        <button  type="submit" name="menorMaior" value="menorMaior">distancia de menor a maior</button>
        <button  type="submit" name="maiorMenor" value="maiorMenor">distancia de maior a menor</button>
    </div>
</form>


<?php

if ( isset($_GET['aOrixen'] )) {
    $conexion=mysqli_connect("db","root","root", "folla01");
    if ($conexion)
    {
        mysqli_set_charset($conexion,"utf8");
        $resultado=mysqli_query($conexion,"SELECT Orixe from traxecto order by Orixe asc");
        if ($resultado != FALSE)
        {   
            echo "<table>";
            echo "<th>Orixen</th>";
            
                while($fila=mysqli_fetch_array($resultado))
                    echo "<tr>".$fila["Orixe"]."</tr>"."<br>";


            
        }
       
    }
    else{
    echo "Fallou a conexión coa base de datos";
    }
    mysqli_close($conexion);
}
if ( isset($_GET['aOrixenDesc'] )) {
    $conexion=mysqli_connect("db","root","root", "folla01");
    if ($conexion)
    {
        mysqli_set_charset($conexion,"utf8");
        $resultado=mysqli_query($conexion,"SELECT Orixe from traxecto order by Orixe desc");
        if ($resultado != FALSE)
        {
            while($fila=mysqli_fetch_array($resultado))
            echo $fila["Orixe"]."<br>";
        }
    }
    else{
    echo "Fallou a conexión coa base de datos";
    }
    mysqli_close($conexion);
}

if ( isset($_GET['aDestino'] )) {
    $conexion=mysqli_connect("db","root","root", "folla01");
    if ($conexion)
    {
        mysqli_set_charset($conexion,"utf8");
        $resultado=mysqli_query($conexion,"SELECT Destino from traxecto order by Destino asc");
        if ($resultado != FALSE)
        {
            while($fila=mysqli_fetch_array($resultado))
            echo $fila["Destino"]."<br>";
        }
    }
    else{
    echo "Fallou a conexión coa base de datos";
    }
    mysqli_close($conexion);
}
if (isset($_GET['aDestinoDesc'] )) {
    $conexion=mysqli_connect("db","root","root", "folla01");
    if ($conexion)
    {
        mysqli_set_charset($conexion,"utf8");
        $resultado=mysqli_query($conexion,"SELECT Destino from traxecto order by Destino desc");
        if ($resultado != FALSE)
        {
            while($fila=mysqli_fetch_array($resultado))
            echo $fila["Destino"]."<br>";
        }
    }
    else{
    echo "Fallou a conexión coa base de datos";
    }
    mysqli_close($conexion);
}
if ( isset($_GET['menorMaior']) ) {
    $conexion=mysqli_connect("db","root","root", "folla01");
    if ($conexion)
    {
        mysqli_set_charset($conexion,"utf8");
        $resultado=mysqli_query($conexion,"SELECT Distancia from traxecto order by Distancia desc");
        if ($resultado != FALSE)
        {
            while($fila=mysqli_fetch_array($resultado))
            echo $fila["Distancia"]."<br>";
        }
    }
    else{
    echo "Fallou a conexión coa base de datos";
    }
    mysqli_close($conexion);
}
if ( isset($_GET['maiorMenor']) ) {
    $conexion=mysqli_connect("db","root","root", "folla01");
    if ($conexion)
    {
        mysqli_set_charset($conexion,"utf8");
        $resultado=mysqli_query($conexion,"SELECT Distancia from traxecto order by Distancia asc");
        if ($resultado != FALSE)
        {
            while($fila=mysqli_fetch_array($resultado))
            echo $fila["Distancia"]."<br>";
        }
    }
    else{
    echo "Fallou a conexión coa base de datos";
    }
    mysqli_close($conexion);
}
?>
</body>
</html>