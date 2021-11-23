<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8" />
        <title>Folla 3.5</title>
</head>
<body>


<h1> Folla 3.5</h1>

<?php 

$servidor="db";
$usuario="root";
$passwd="root";
$base="proba";
//CONECTAMOS
$conexion = new mysqli($servidor, $usuario, $passwd, $base); //CONECTAMOS COA NOTACIÓN POO
if($conexion->connect_error)
die("Non é posible conectar coa BD: ". $conexion->connect_error);
$conexion->set_charset("utf8");
//PREPARAMOS A SENTENCIA:
$sentenciaPrep=$conexion->prepare("SELECT * from cliente");
// DAMOS VALORES AOS PAŔÁMETROS E EXECUTAMOS:

echo "Exercicio 3 folla 3.5";
echo "<br>";

$sentenciaPrep->execute();
$resultado=$sentenciaPrep->get_result();

while($fila=$resultado->fetch_array(MYSQLI_BOTH) )
    echo $fila['id']." ".$fila['nome']." ".$fila['apelidos']."<br>";

$sentenciaPrep->close();
$conexion->close();
        


if(isset($_GET['entrar'])){

    $servidor="db";
    $usuario="root";
    $passwd="root";
    $base="proba";
    //CONECTAMOS
    $conexion = new mysqli($servidor, $usuario, $passwd, $base); //CONECTAMOS COA NOTACIÓN POO
    if($conexion->connect_error)
    die("Non é posible conectar coa BD: ". $conexion->connect_error);
    $conexion->set_charset("utf8");
    $nome= $_GET['nome'];
    $apelidos= $_GET['apelidos'];
    $sentencia=$conexion->prepare("SELECT * from cliente where nome = ?");
    $sentencia->bind_param("s",$nome);
    $sentencia->execute();
    $resultado=$sentencia->get_result();
    while($fila=$resultado->fetch_array(MYSQLI_BOTH) ){
        echo $fila['id']." ".$fila['nome']." ".$fila['apelidos']."<br>";
    }
    $sentencia->close();



}

$conexion->close();

?>

</body>
</html>