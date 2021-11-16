<!DOCTYPE html>
<html>
<head>
 <title>Conexión a bases de datos</title>
 <meta charset=”UTF8”>
</head>
<body>

<form action="folla3.1_ej3.php" method="GET">

    <div id="contenedorBotons">
        <button  type="submit" name="listaCompleta" id="listaCompleta" value="listaCompleta">Mostrar todas as Pelis</button>
        <button type="submit" name="ordenPintor" value="ordenPintor" >Ordenado polo nome do autor</button>
        <button  type="submit" name="ordenTitulo" value="ordenTitulo">Ordenar o listado polo nome do título</button>
        <button  type="submit" name="ordenAno" value="ordenAno">Ordena as pinturas cronoloxicamente</button>
        <button  type="submit" name="ordenAnoDesc" value="menorMaior">Ordena as pinturas desde a máis moderna á máis antiga.</button>
        <button  type="submit" name="maiusculaPrimerLetra" value="maiusculaPrimerLetra">Pasa a maiúscula a primeira letra de cada palabra do título</button>
        <button  type="submit" name="maiusculaTerceiraLetra" value="maiusculaTerceiraLetra">Pasa a maiúscula a terceira letra do título</button>
        <button  type="submit" name="elimanarEspacios" value="elimanarEspacios">Elimina os espazos dos títulos</button>
        <button  type="submit" name="cambiarOPorU" value="cambiarOPorU">Cambia a letra ‘o’ pola letra ‘u’ de todos os datos</button>
        <button  type="submit" name="ordenAno" value="ordenAno">Busca unha palabra tanto no título como no autor</button>
    </div>
</form>


<?php


if ( isset($_GET['buscarPalabra'] )) {
    $conexion=mysqli_connect("db","root","root", "folla01");
    if ($conexion)
    {
        mysqli_set_charset($conexion,"utf8");
        $resultado=mysqli_query($conexion,"SELECT nombre, pintor from pinturas");
        $palabra = isset($_GET['inputPalabra']);

        if ($resultado != FALSE)
        {   
                echo "<table>";
                echo "<th>Nome</th>";
                echo "<th>Pintor</th>";
               
               
                while($fila=mysqli_fetch_array($resultado)){
                    echo "<tr>";
                    echo "<td>".in_array( $palabra,$fila)."</td>";    
                    echo "</tr>"; 
                }   
                echo "</table>";
                
        }
       
    }
    else{
    echo "Fallou a conexión coa base de datos";
    }
    mysqli_close($conexion);
}

if ( isset($_GET['cambiarOPorU'] )) {
    $conexion=mysqli_connect("db","root","root", "folla01");
    if ($conexion)
    {
        mysqli_set_charset($conexion,"utf8");
        $resultado=mysqli_query($conexion,"SELECT nombre, pintor, ano from pinturas");

        if ($resultado != FALSE)
        {   
                echo "<table>";
                echo "<th>Nome</th>";
                echo "<th>Pintor</th>";
                echo "<th>Ano</th>";
               
                while($fila=mysqli_fetch_array($resultado)){
                    echo "<tr>";
                    echo "<td>".str_replace("o","u",$fila["nombre"])."</td>";
                    echo "<td>".str_replace("o","u",$fila["pintor"])."</td>";
                    echo "<td>".str_replace("o","u",$fila["ano"])."</td>";    
                    echo "</tr>"; 
                }   
                echo "</table>";
                
        }
       
    }
    else{
    echo "Fallou a conexión coa base de datos";
    }
    mysqli_close($conexion);
}


if ( isset($_GET['elimanarEspacios'] )) {
    $conexion=mysqli_connect("db","root","root", "folla01");
    if ($conexion)
    {
        mysqli_set_charset($conexion,"utf8");
        $resultado=mysqli_query($conexion,"SELECT nombre, pintor, ano from pinturas");

        if ($resultado != FALSE)
        {   
                echo "<table>";
                echo "<th>Nome</th>";
                echo "<th>Pintor</th>";
                echo "<th>Ano</th>";
               
                while($fila=mysqli_fetch_array($resultado)){
                    echo "<tr>";
                    echo "<td>".str_replace(" ","",$fila["nombre"])."</td>";
                    echo "<td>".$fila["pintor"]."</td>";
                    echo "<td>".$fila["ano"]."</td>";    
                    echo "</tr>"; 
                }   
                echo "</table>";
                
        }
       
    }
    else{
    echo "Fallou a conexión coa base de datos";
    }
    mysqli_close($conexion);
}

if ( isset($_GET['maiusculaTerceiraLetra'] )) {
    $conexion=mysqli_connect("db","root","root", "folla01");
    if ($conexion)
    {
        mysqli_set_charset($conexion,"utf8");
        $resultado=mysqli_query($conexion,"SELECT nombre, pintor, ano from pinturas");

        if ($resultado != FALSE)
        {   
                echo "<table>";
                echo "<th>Nome</th>";
                echo "<th>Pintor</th>";
                echo "<th>Ano</th>";
               
                while($fila=mysqli_fetch_array($resultado)){
                    echo "<tr>";
                    echo "<td>".$fila["nombre"]."</td>";
                    echo "<td>".$fila["pintor"]."</td>";
                    echo "<td>".$fila["ano"]."</td>";    
                    echo "</tr>"; 
                }   
                echo "</table>";
                
        }
       
    }
    else{
    echo "Fallou a conexión coa base de datos";
    }
    mysqli_close($conexion);
}


if ( isset($_GET['maiusculaPrimerLetra'] )) {
    $conexion=mysqli_connect("db","root","root", "folla01");
    if ($conexion)
    {
        mysqli_set_charset($conexion,"utf8");
        $resultado=mysqli_query($conexion,"SELECT nombre, pintor, ano from pinturas");

        if ($resultado != FALSE)
        {   
                echo "<table>";
                echo "<th>Nome</th>";
                echo "<th>Pintor</th>";
                echo "<th>Ano</th>";
               
                while($fila=mysqli_fetch_array($resultado)){
                    echo "<tr>";
                    echo "<td>".ucwords($fila["nombre"])."</td>";
                    echo "<td>".$fila["pintor"]."</td>";
                    echo "<td>".$fila["ano"]."</td>";    
                    echo "</tr>"; 
                }   
                echo "</table>";
                
        }
       
    }
    else{
    echo "Fallou a conexión coa base de datos";
    }
    mysqli_close($conexion);
}

if ( isset($_GET['ordenAnoDesc'] )) {
    $conexion=mysqli_connect("db","root","root", "folla01");
    if ($conexion)
    {
        mysqli_set_charset($conexion,"utf8");
        $resultado=mysqli_query($conexion,"SELECT nombre, pintor, ano from pinturas order by ano desc");

        if ($resultado != FALSE)
        {   
                echo "<table>";
                echo "<th>Nome</th>";
                echo "<th>Pintor</th>";
                echo "<th>Ano</th>";
               
                while($fila=mysqli_fetch_array($resultado)){
                    echo "<tr>";
                    echo "<td>".$fila["nombre"]."</td>";
                    echo "<td>".$fila["pintor"]."</td>";
                    echo "<td>".$fila["ano"]."</td>";    
                    echo "</tr>"; 
                }   
                echo "</table>";
                
        }
       
    }
    else{
    echo "Fallou a conexión coa base de datos";
    }
    mysqli_close($conexion);
}


if ( isset($_GET['ordenAno'] )) {
    $conexion=mysqli_connect("db","root","root", "folla01");
    if ($conexion)
    {
        mysqli_set_charset($conexion,"utf8");
        $resultado=mysqli_query($conexion,"SELECT nombre, pintor, ano from pinturas order by ano asc");

        if ($resultado != FALSE)
        {   
                echo "<table>";
                echo "<th>Nome</th>";
                echo "<th>Pintor</th>";
                echo "<th>Ano</th>";
               
                while($fila=mysqli_fetch_array($resultado)){
                    echo "<tr>";
                    echo "<td>".$fila["nombre"]."</td>";
                    echo "<td>".$fila["pintor"]."</td>";
                    echo "<td>".$fila["ano"]."</td>";    
                    echo "</tr>"; 
                }   
                echo "</table>";
                
        }
       
    }
    else{
    echo "Fallou a conexión coa base de datos";
    }
    mysqli_close($conexion);
}

if ( isset($_GET['ordenTitulo'] )) {
    $conexion=mysqli_connect("db","root","root", "folla01");
    if ($conexion)
    {
        mysqli_set_charset($conexion,"utf8");
        $resultado=mysqli_query($conexion,"SELECT nombre, pintor, ano from pinturas order by nombre asc");

        if ($resultado != FALSE)
        {   
                echo "<table>";
                echo "<th>Nome</th>";
                echo "<th>Pintor</th>";
                echo "<th>Ano</th>";
               
                while($fila=mysqli_fetch_array($resultado)){
                    echo "<tr>";
                    echo "<td>".$fila["nombre"]."</td>";
                    echo "<td>".$fila["pintor"]."</td>";
                    echo "<td>".$fila["ano"]."</td>";    
                    echo "</tr>"; 
                }   
                echo "</table>";
                
        }
       
    }
    else{
    echo "Fallou a conexión coa base de datos";
    }
    mysqli_close($conexion);
}

if ( isset($_GET['listaCompleta'] )) {
    $conexion=mysqli_connect("db","root","root", "folla01");
    if ($conexion)
    {
        mysqli_set_charset($conexion,"utf8");
        $resultado=mysqli_query($conexion,"SELECT nombre, pintor, ano from pinturas");

        if ($resultado != FALSE)
        {   
                echo "<table>";
                echo "<th>Nome</th>";
                echo "<th>Pintor</th>";
                echo "<th>Ano</th>";
               
                while($fila=mysqli_fetch_array($resultado)){
                    echo "<tr>";
                    echo "<td>".$fila["nombre"]."</td>";
                    echo "<td>".$fila["pintor"]."</td>";
                    echo "<td>".$fila["ano"]."</td>";    
                    echo "</tr>"; 
                }   
                echo "</table>";
                
        }
       
    }
    else{
    echo "Fallou a conexión coa base de datos";
    }
    mysqli_close($conexion);
}
if ( isset($_GET['ordenPintor'] )) {
    $conexion=mysqli_connect("db","root","root", "folla01");
    if ($conexion)
    {
        mysqli_set_charset($conexion,"utf8");
        $resultado=mysqli_query($conexion,"SELECT nombre, pintor, ano from pinturas order by pintor asc");

        if ($resultado != FALSE)
        {   
                echo "<table>";
                echo "<th>Nome</th>";
                echo "<th>Pintor</th>";
                echo "<th>Ano</th>";
               
                while($fila=mysqli_fetch_array($resultado)){
                    echo "<tr>";
                    echo "<td>".$fila["nombre"]."</td>";
                    echo "<td>".$fila["pintor"]."</td>";
                    echo "<td>".$fila["ano"]."</td>";    
                    echo "</tr>"; 
                }   
                echo "</table>";
                
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