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
            $saludo="<h1 id='saludo'>Ola, como estas?</h1>";
            break;
        case 'español':
            $saludo="<h1 id='saludo'>hola, ¿como estas?</h1>";
            break;
        case 'portugues':
            $saludo="<h1 id='saludo'>Olá, como está?</h1>";
            break;
        default:
            $saludo="";
            break;
    }

    return $saludo;
}

function consultaBBDD(){
    
}