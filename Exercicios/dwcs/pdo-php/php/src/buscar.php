<?php

$servidor = "db-pdo";
$usuario = "root";
$passwd = "root";
$base = "proba";

if ($_GET['buscar']) {
    $nome = $_GET['nome'];
    $apelido = $_GET['apelido'];
    echo "info:: entraa <br>";



    if ($nome && $apelido) {
        $campo = "nome";
        $valor = $nome;
    } elseif ($nome) {
        $campo = "nome";
        $valor = $nome;
    } elseif ($apelido) {
        $campo = "apelido";
        $valor = $apelido;
    } else {
        echo "error:: non se introduciron valores para buscar";
    }

    try { //CONECTAMOS
        $pdo = new PDO("mysql:host=$servidor;dbname=$base;charset=utf8", $usuario, $passwd);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdoStatement = $pdo->prepare("SELECT * from cliente where $campo like ? ");
        $pdoStatement->bindParam(1, $valor);
        print_r($pdoStatement);
        $pdoStatement->execute();

        echo "<table><tr><th>Nome</th><th>Apelidos</th></tr>";
        while ($fila = $pdoStatement->fetch(PDO::FETCH_ASSOC))
            echo "<tr><td>" . $fila['nome'] . " </td><td>" . $fila['apelido'] . "</td></tr>";
        echo "<table>";
    } catch (PDOException $e) {
        echo "Erro ao conectar co servidor MySQL: " . $e->getMessage();
    }
    $pdo = null;
}
