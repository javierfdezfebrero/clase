<?php

function entrarBase ($servidor, $base, $usuario, $passwd){

    $pdo = new PDO("mysql:host=$servidor;dbname=$base;charset=utf8", $usuario, $passwd);
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    return $pdo;

}

function crearPass($pass)
{
    return password_hash($pass, PASSWORD_DEFAULT);
}