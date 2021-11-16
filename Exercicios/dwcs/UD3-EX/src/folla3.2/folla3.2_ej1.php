<!DOCTYPE html>
<html>
<head>
 <title>Conexión a bases de datos</title>
 <meta charset=”UTF8”>
</head>
<body>



<form action="folla3.2_ej1.php" method="GET">
<button  type="submit" name="aOrixen" id="aOrixen">VER DISCOS</button>

    <div id="contenedorBotons">
        <button  type="submit" name="añadirDiscoForm" id="añadirDiscoForm">Añadir disco</button>
        <button type="submit" name="eliminarDisco" value="eliminarDisco" > 'Eliminar disco selecionado' : 'Eliminar disco' </button>
        <button  type="submit" name="modificarRexistro" id="modificarRexistro">Modificar rexistro</button>

    </div>

<?php


    $conexion=mysqli_connect("db","root","root", "folla02");
    if ($conexion)
    {
        mysqli_set_charset($conexion,"utf8");
        $resultado=mysqli_query($conexion,"SELECT Titulo, Grupo, Disco, Ano, Duracion, Selecionado from disco");

        if ($resultado != FALSE)
        {   
                echo "<table>";
                echo "<th>Titulo</th>";
                echo "<th>Grupo</th>";
                echo "<th>Disco</th>";
                echo "<th>Ano</th>";
                echo "<th>Duracion</th>";
                echo "<th>Selecionado</th>";
               
               
                while($fila=mysqli_fetch_array($resultado)){
                    echo "<tr>";
                    echo "<td name='Titulo'>".$fila['Titulo']."</td>"; 
                    echo "<td name='Grupo'>".$fila['Grupo']."</td>";  
                    echo "<td name='Disco'>".$fila['Disco']."</td>";  
                    echo "<td name='Ano'>".$fila['Ano']."</td>";  
                    echo "<td name='Duracion'>".$fila['Duracion']."</td>";  
                    echo "<td name='Titulo'> <input type='checkbox' name='selecion' value='0'>".$fila['Selecionado']."</input></td>";     
                    echo "</tr>"; 
                }   
                echo "</table>";
                
        }
       
    }
    else{
    echo "Fallou a conexión coa base de datos";
    }
    mysqli_close($conexion);


if ( isset($_GET['añadirDiscoForm'] )) {
    echo '<label >Titulo</label>
    <input type="text" name="Titulo"><br>
    <label for="">Grupo</label>
    <input type="text" name="Grupo"><br>
    <label for="">Disco</label>
    <input type="text" name="Disco"><br>
    <label for="">Ano</label>
    <input type="text" name="Ano"><br>
    <label for="">Duracion</label>
    <input type="text" name="Duracion"><br>
    <button  type="submit" name="añadirDisco" id="añadirDisco">Añadir disco</button>';
}

function buscar(String $titulo = null)
{
    $conexion=mysqli_connect("db","root","root", "folla02");
  
        mysqli_set_charset($conexion,"utf8");
        
        $sql = "SELECT * from disco WHERE Titulo like '$titulo'";
        print_r($sql);

        $resultado = mysqli_query($conexion, $sql);
        print_r($resultado);

        if (mysqli_num_rows($resultado)>=1){
              return true;
        } else {
              return false;
        }
    mysqli_close($conexion);

}

if ( isset($_GET['añadirDisco'] )) {
    $conexion=mysqli_connect("db","root","root", "folla02");
    if ($conexion)
    {
        mysqli_set_charset($conexion,"utf8");
        
        $titulo = $_GET['Titulo'];
        $grupo = $_GET['Grupo'];
        $disco = $_GET['Disco'];
        $ano = $_GET['Ano'];
        $duracion = $_GET['Duracion'];
      
        if(buscar($titulo)){
            echo "El disco ya existe";
        }else{

        $sql = "INSERT INTO disco (titulo, grupo, disco, ano, duracion) VALUES ('$titulo', '$grupo', '$disco', '$ano', '$duracion')";
        if (mysqli_query($conexion, $sql)) {
              echo "Disco inserido correctamente";
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

    if ( isset($_GET['eliminarDisco'] )) {
        $conexion=mysqli_connect("db","root","root", "folla02");
        if ($conexion)
        {
            $selecion= $_GET['selecion'];
            $titulo = $_GET['Titulo'];
            $grupo = $_GET['Grupo'];
            $disco = $_GET['Disco'];
            $ano = $_GET['Ano'];
            $duracion = $_GET['Duracion'];

            mysqli_set_charset($conexion,"utf8");
            $resultado=mysqli_query($conexion,"INSERT INTO disco (selecionado) from disco where Titulo like '$titulo'");
            if ($resultado != FALSE)
            {   
                $sql = "DELETE FROM disco where selecionados like true";
                if (mysqli_query($conexion, $sql)) {
                      echo "Disco eliminado correctamente";
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