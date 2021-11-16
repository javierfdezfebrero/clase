<!DOCTYPE html>
<html>
<head>
 <title>Conexión a bases de datos</title>
 <meta charset=”UTF8”>
</head>
<body>

<form action="folla3.1_ej4.php" method="GET">

    <div id="contenedorBotons">
        <button  type="submit" name="añadirLibroForm" id="añadirLibroForm">Añadir libro</button>
        <button type="submit" name="buscarLibro" value="buscarLibro" > Eliminar libro</button>

    </div>

<?php


if ( isset($_GET['añadirLibroForm'] )) {
    echo '<label >Titulo</label>
    <input type="text" name="titulo"><br>
    <label for="">Autor</label>
    <input type="text" name="autor"><br>
    <label for="">Editorial</label>
    <input type="text" name="editorial"><br>
    <button  type="submit" name="añadirLibro" id="añadirLibro">Añadir libro</button>';
}

if ( isset($_GET['buscarLibro'] )) {
    echo '<label >Titulo, autor</label>
    <input type="text" name="tituloAutor"><br>
    <button  type="submit" name="eliminarLibro" id="eliminarLibro">Buscar libro y eliminar</button>';
}

if ( isset($_GET['añadirLibro'] )) {
    $conexion=mysqli_connect("db","root","root", "folla01");
    if ($conexion)
    {
        mysqli_set_charset($conexion,"utf8");
        
        $titulo = $_GET['titulo'];
        $autor = $_GET['autor'];
        $editorial = $_GET['editorial'];


        $sql = "INSERT INTO libro (titulo, autor, editorial) VALUES ('$titulo', '$autor', '$editorial')";
        if (mysqli_query($conexion, $sql)) {
              echo "Libro inserido correctamente";
        } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
        }
       
    }
    else{
    echo "Fallou a conexión coa base de datos";
    }
    mysqli_close($conexion);
}

    if ( isset($_GET['eliminarLibro'] )) {
        $conexion=mysqli_connect("db","root","root", "folla01");
        if ($conexion)
        {
            $tituloAutor= $_GET['tituloAutor'];
            mysqli_set_charset($conexion,"utf8");
            $resultado=mysqli_query($conexion,"SELECT * from libro where titulo = '$tituloAutor'");
            echo "SELECT * from libro where titulo = '$tituloAutor'";
            if ($resultado != FALSE)
            {   
                $sql = "DELETE FROM libro where titulo = '$tituloAutor'";
                if (mysqli_query($conexion, $sql)) {
                      echo "Libro eliminado correctamente";
                } else {
                      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
                }
    
    
                
            }
           
        }
        else{
        echo "Fallou a conexión coa base de datos";
        }
        mysqli_close($conexion);
    }


?>
</form>
</body>
</html>