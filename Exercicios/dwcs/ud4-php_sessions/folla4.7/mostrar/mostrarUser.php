<?php

session_start();

require "../constantes.php";
require "../functions.php";

$idioma=$_COOKIE['idioma'];

$saludo= saludarIdioma($idioma);

if (isset($_SESSION['rol'])) {
    if (!$_SESSION['rol'] == 'usuario') {
        header("..login.php");
    }


    try {
        // establecemos conexion e realizamos a consulta
        $pdo = entrarBase($servidor, $base, $usuario, $passwd);
        $pdoStatement = $pdo->prepare("SELECT * from productos");


        if (!$pdoStatement->execute()) {
            echo "Houbo un erro o gardar os datos";
        } else {
            echo $saludo;
            echo "<table><tr><th>Nome</th><th>Descripcion</th><th>Imaxe</th><th>Prezo Día</th></tr>";
            while ($fila = $pdoStatement->fetch(PDO::FETCH_ASSOC))
                echo "<tr><td>" . $fila['nome'] . " </td><td>" . $fila['descripcion'] . "</td><td><img src='../" . $fila['imaxe'] . "' style='width:50px; height:50px;'></img></td><td>" . $fila['prezo_dia'] . "</td><td><a href=reserva.php?id=".$fila['idProducto']."> Reservar</a> </td></tr>";
            echo "<table>";
        }
    } catch (PDOException $e) {
        echo "Erro ao conectar co servidor MySQL: " . $e->getMessage();
    }
}
