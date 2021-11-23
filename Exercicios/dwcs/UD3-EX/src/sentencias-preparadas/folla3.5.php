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
$sentenciaPrep=$conexion->prepare("INSERT INTO cliente (nome,apelidos) VALUES(?, ?)");
// DAMOS VALORES AOS PAŔÁMETROS E EXECUTAMOS:

echo "Exercicio 1 folla 3.5";
echo "<br>";
$nome="Xan";
$apelidos="Fieito";
$sentenciaPrep->bind_param('ss', $nome, $apelidos); //INDICAMOS O TIPO DAS VARIABLES
if(!$sentenciaPrep->execute() )
        echo "Houbo un erro na execución da consulta";
echo "Insertaronse en BBDD";
echo "<br>";

echo "Exercicio 2 folla 3.5";
echo "<br>";
$nome="Javier";
$apelidos="Fernández";
$sentenciaPrep->bind_param('ss', $nome, $apelidos); //INDICAMOS O TIPO DAS VARIABLES
if(!$sentenciaPrep->execute() )
        echo "Houbo un erro na execución da consulta";
echo "Insertaronse en BBDD o primer rexistro";
echo "<br>";

$nome="Miguel";
$apelidos="Fernández";
$sentenciaPrep->bind_param('ss', $nome, $apelidos); //INDICAMOS O TIPO DAS VARIABLES
if(!$sentenciaPrep->execute() )
        echo "Houbo un erro na execución da consulta";
echo "Insertaronse en BBDD o segundo rexistro";
echo "<br>";

$nome="Ana";
$apelidos="Fernández";
$sentenciaPrep->bind_param('ss', $nome, $apelidos); //INDICAMOS O TIPO DAS VARIABLES
if(!$sentenciaPrep->execute() )
        echo "Houbo un erro na execución da consulta";
echo "Insertaronse en BBDD o tercer rexistro";
echo "<br>";



?>

</body>
</html>