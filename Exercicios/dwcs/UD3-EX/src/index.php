<!DOCTYPE html>"
<html>
<head>
 <title>Conexión a bases de datos</title>
 <meta charset=”UTF8”>
</head>
<body>
<?php
 $conexion=mysqli_connect("db","root","root", "folla01");
if ($conexion)
{
    mysqli_set_charset($conexion,"utf8");
    $resultado=mysqli_query($conexion,"SELECT Id,DNI,Nome,Apelidos,Idade from xogador");
    if ($resultado != FALSE)
    {
        while($fila=mysqli_fetch_array($resultado))
        echo $fila["Id"]," ",$fila["DNI"],$fila["Nome"],$fila["Apelidos"],$fila["Idade"],"<br>";
    }
}
else{
echo "Fallou a conexión coa base de datos";
}
mysqli_close($conexion);

?>
</body>
</html>