<?php
@session_start();

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

if (isset($_GET['enter'])) {
    $user = $_GET['user'];
    $pw = $_GET['pw'];
    $data = "1870-01-01 00:00:00";



    //PREPARAMOS A SENTENCIA:
    $stmt = $conPDO->prepare("SELECT password from users where usuario like :user ");
    // DAMOS VALORES AOS PAŔÁMETROS E EXECUTAMOS:

    $stmt->bindParam(':user', $user);

    if (!$stmt->execute()) {
        echo "Houbo un erro na execución da consulta";
    } else {
        $fila = $stmt->fetch();
        if ($stmt->rowCount() == 1) { //HAI UN USUARIO
            $contrasinalBD = $fila[0];
        } else {
            header('Location: rexistro.html');
        }
    }

    if ($stmt->rowCount() == 0 || !password_verify($pw, $contrasinalBD)) {

        echo "contrasinal incorrecta";
        $stmt = null;
        $conPDO = null;
        die();
    } else {
        $stmt = $conPDO->prepare("SELECT * from users where usuario like :user ");
        $stmt->bindParam(':user', $user);
        $stmt->execute();
        $fila = $stmt->fetch();
        $rolBBDD = $fila[4];

        $_SESSION['rol'] = $rolBBDD;
        $_SESSION['user'] = $user;

        header('Location: mostra.php');
    }
} else {

    if ($_SESSION['rol'] == "plantas") {
        $stmt = $conPDO->prepare("SELECT * from users");
        $stmt->execute();
        $fila = $stmt->fetch();
        foreach ($fila as $key => $value) {
        
        }
       
    }
    if ($_SESSION['rol'] == "animal") {
        echo "holaaa, crack.";
    } else {
        echo "Erro o consultar o rol";
    }
}
