<?php
 require "constantes.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logueate</title>
</head>
<body>
        <form action="login.php" method="get">
            <section>
                <label for="">Usuario</label>
                <input type="text" name="usuario" id="">
            </section>
            <section>
                <label for="">Contrasinal</label>
                <input type="password" name="contrasinal" id="">
            </section>
            <section>
                <button type="submit" name="entrar">Entrar</button>
                <button> <a href="rexistrarse.php"> Rexistrarse</a></button>
                <button> <a href="pechaSesion.php"> Pechar a sesion</a></button>
            </section>
        </form>    


</body>
</html>

<?php

    if (isset($_GET['enter'])) {

    $usuario=  $_GET['usuario'];

    $contrasinal= $_GET['contrasinal'];


    try { //CONECTAMOS
        $pdo = new PDO("mysql:host=$servidor;dbname=$base;charset=utf8", $usuario, $passwd);
        $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        $pdoStatement=$pdo->prepare("SELECT password from users where user like :user");
        $datosCliente= array('user'=>$usuario);
       
        if (!$pdoStatement->execute($datosCliente)) {
            echo "Houbo un erro na execución da consulta";
        } else {
            $fila = $pdoStatement->fetch();
            if ($pdoStatement->rowCount() == 1) { //HAI UN USUARIO
                $contrasinalBD = $fila[0];
            } else {
                header('Location: login.php');
            }
        }

        if ($pdoStatement->rowCount() == 0 || !password_verify($pw, $contrasinalBD)) {

            echo "contrasinal incorrecta";
            $pdoStatement = null;
            $pdo= null;
            die();
        } else {
            $pdoStatement = $pdo->prepare("SELECT * from users where usuario like :user ");
            $pdoStatement->bindParam(':user', $user);
            $pdoStatement->execute();
            $fila = $pdoStatement->fetch();
            $rolBBDD = $fila[4];
    
            $_SESSION['rol'] = $rolBBDD;
            $_SESSION['user'] = $user;
    
            header('Location: mostra.php');
        }

    }
    catch(PDOException $e) {
    echo "Erro ao conectar co servidor MySQL: ".$e->getMessage();
    }
    $pdo=null;
    }

?>