<?php

$servidor="db-pdo";
$usuario="root";
$passwd="root";
$base="proba";




if($_GET['gardar']){

    $id= $_GET['id'];
    $nome = $_GET['nome'];
    $apelido = $_GET['apelido'];

    try { //CONECTAMOS
        $pdo = new PDO("mysql:host=$servidor;dbname=$base;charset=utf8", $usuario, $passwd);
        $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        $pdoStatement=$pdo->prepare("INSERT INTO cliente (id, nome, apelido) VALUES (:id,:nome,:apelido)");
        $datosCliente= array('id'=>$id,'nome'=>$nome, 'apelido'=>$apelido);
        $pdoStatement->execute($datosCliente);

        echo "<h2>gardado con exito</h2>";

    }
    catch(PDOException $e) {
    echo "Erro ao conectar co servidor MySQL: ".$e->getMessage();
    }
    $pdo=null;

}

    ?>