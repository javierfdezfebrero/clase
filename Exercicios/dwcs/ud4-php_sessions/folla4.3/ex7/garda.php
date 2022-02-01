<?php


if (isset($_GET['gardar'])) {
    $servidor = "db-pdo-2";
    $usuario = "root";
    $passwd = "root";
    $base = "proba";
    //CONECTAMOS
    $conexion = new mysqli($servidor, $usuario, $passwd, $base); //CONECTAMOS COA NOTACIÓN POO
    if ($conexion->connect_error)
        die("Non é posible conectar coa BD: " . $conexion->connect_error);
    $conexion->set_charset("utf8");

    $usuario = $_GET['usuario'];
    $contrasinal = password_hash($_GET['contrasinal'], PASSWORD_DEFAULT);




    //PREPARAMOS A SENTENCIA:
    $sentenciaPrep = $conexion->prepare("INSERT INTO usuarios (usuario,contrasinal) VALUES(?, ?)");
    // DAMOS VALORES AOS PAŔÁMETROS E EXECUTAMOS:
    $sentenciaPrep->bind_param('ss', $usuario, $contrasinal); //INDICAMOS O TIPO DAS VARIABLES
    if (!$sentenciaPrep->execute())
        echo "Houbo un erro na execución da consulta";
    echo "Insertaronse en BBDD";
    
}
