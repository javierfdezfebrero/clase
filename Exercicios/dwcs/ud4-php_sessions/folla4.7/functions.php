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

function saludarIdioma($idioma){
    switch ($idioma) {
        case 'galego':
            $saludo="Ola, como estas?";
            break;
        case 'español':
            $saludo="hola, ¿como estas?";
            break;
        case 'portugues':
            $saludo="Olá, como está?";
            break;
        default:
            $saludo="";
            break;
    }

    return $saludo;
}