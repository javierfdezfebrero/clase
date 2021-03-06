<?php
session_start();

require "constantes.php";
require "functions.php";

if(!isset($_SESSION['marcadecontrol'])){
    session_regenerate_id(true); //borrarmos o ficheiro da ID da sesión anterior
    $_SESSION['marcadecontrol']= true;
    }

// Seleccionamos o idiomo a gardamolo na COOKIE
if (isset($_POST['idioma'])) {
    $idioma = $_POST['idioma'];
    setcookie('idioma', $idioma, time( )+300);
}

if (isset($_POST['enter'])) {

    $user =  $_POST['usuario'];

    $contrasinal = $_POST['contrasinal'];


    try { //CONECTAMOS
        $pdo = entrarBase($servidor, $base, $usuario, $passwd);
        $pdoStatement = $pdo->prepare("SELECT password from users where usuario like :user");
        $datosCliente = array('user' => $user);

        if (!$pdoStatement->execute($datosCliente)) {
            echo "Houbo un erro na execución da consulta";
        } else {
            $fila = $pdoStatement->fetch();
            if ($pdoStatement->rowCount() == 1) { //HAI UN USUARIO
                $contrasinalBD = $fila[0];
            } else {
                header('Location: login.php?error=1');
            }
        }

        if ($pdoStatement->rowCount() == 0 || !password_verify($contrasinal, $contrasinalBD)) {

            echo "contrasinal incorrecta";
            $pdoStatement = null;
            $pdo = null;
            die();
        } else {
            $pdoStatement = $pdo->prepare("SELECT * from users where usuario like :user ");
            $pdoStatement->bindParam(':user', $user);
            $pdoStatement->execute();
            $fila = $pdoStatement->fetch();
            $rolBBDD = $fila[4];
            $idUser = $fila[0];
            $nomeUser = $fila[1];


            $_SESSION['rol'] = $rolBBDD;
            $_SESSION['user'] = $user;
            $_SESSION['idUser'] = $idUser;
            $_SESSION['nomeUser'] = $nomeUser;

            header('Location: mostra.php');
        }
    } catch (PDOException $e) {
        echo "Erro ao conectar co servidor MySQL: " . $e->getMessage();
    }
    $pdo = null;
}






if (isset($_GET['error'])) {
    echo "O usuario no existe";
}

// añadimos form de login
include "login.html";
