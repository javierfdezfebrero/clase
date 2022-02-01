<?php
@session_start();
if (isset($_GET['entrar'])){

    $user= $_GET['user'];
    $pw= $_GET['pw'];
    $rol= $_GET['rol'];
    $data = "1870-01-01 00:00:00";

    $passHasheado=password_hash($pw, PASSWORD_DEFAULT);


    $servidor = "db-pdo-2";
    $usuario = "root";
    $passwd = "root";
    $base = "proba";
    $dsn = "mysql:host=$servidor;dbname=$base;charset=utf8mb4";
    //CONECTAMOS
    $conPDO = new PDO($dsn, $usuario, $passwd); //CONECTAMOS COA NOTACIÓN PDO

    try {
        $conPDO = new PDO($dsn, $usuario, $passwd);
        $conPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $ex) {
        die("Erro na conexión mensaxe: " . $ex->getMessage());
    } 
    
    //PREPARAMOS A SENTENCIA:
    $stmt = $conPDO->prepare("INSERT INTO users (usuario, password, data, rol) VALUES (:user, :password, :data, :rol) ");
    // DAMOS VALORES AOS PAŔÁMETROS E EXECUTAMOS:

    $stmt->bindParam(':user', $user);
    $stmt->bindParam(':password', $passHasheado);
    $stmt->bindParam(':data', $data);
    $stmt->bindParam(':rol', $rol);

    if (!$stmt->execute()) {
        echo "Houbo un erro na execución da consulta";
    } else {
        $_SESSION['user']= $user;
        $_SESSION['rol']= $rol;
        header('Location: mostra.php');
    }

}else{

    include 'dologin.php';


}