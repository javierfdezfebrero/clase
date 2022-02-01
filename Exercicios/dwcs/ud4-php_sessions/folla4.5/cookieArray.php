<?php
if (isset($_GET['enter'])) {
    $nome=$_GET['nome'];
    $apelido=$_GET['apelido'];
    $mail= $_GET['mail'];

    setcookie('usuario[nome]', $nome);
    setcookie('usuario[apelido]', $apelido);
    setcookie('usuario[mail]', $mail);

    header('Location: cookieArray.php');

    
}

if (isset($_GET['borrar'])) {
    if(!empty($_GET['nome'])){
        $borrar=$_GET['nome'];
        setcookie('usuario[nome]', $borrar, time( )-200);

    }
    if(!empty($_GET['apelido'])){
        $borrar=$_GET['apelido'];
        setcookie('usuario[apelido]', $borrar, time( )-200);
    }
    if(!empty($_GET['mail'])){
        $borrar=$_GET['mail'];
        setcookie('usuario[mail]', $borrar, time( )-200);
    }
   
    header('Location: cookieArray.php');

    
}
if (isset($_COOKIE['usuario'])) {
    foreach ( $_COOKIE['usuario'] as $key => $value) {
     echo "Clave: ".$key." Valor: ".$value."<br>";
}
}