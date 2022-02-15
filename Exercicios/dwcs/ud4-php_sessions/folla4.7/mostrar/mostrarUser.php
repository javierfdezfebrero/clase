<?php

session_start();

require "../constantes.php";
require "../functions.php";



$idioma=$_COOKIE['idioma'];

$saludo= saludarIdioma($idioma);

if (empty($_SESSION['rol']) ) {
    header("location: ../login.php");
}

if (isset($_SESSION['rol']) && $_SESSION['rol'] =="usuario") {

    try {
        // establecemos conexion e realizamos a consulta
        $pdo = entrarBase($servidor, $base, $usuario, $passwd);
        $pdoStatement = $pdo->prepare("SELECT * from productos");


        if (!$pdoStatement->execute()) {
            echo "Houbo un erro o gardar os datos";
        } else {
            echo '<link rel="stylesheet" type="text/css" href="../css/css.css"></head>';

            echo $saludo;
            
            echo "<table><tr><th>Nome</th><th>Descripcion</th><th>Imaxe</th><th>Prezo Día</th><th>    </th></tr>";
            while ($fila = $pdoStatement->fetch(PDO::FETCH_ASSOC))
                echo "<tr><td>" . $fila['nome'] . " </td><td>" . $fila['descripcion'] . "</td><td><img src='../" . $fila['imaxe'] . "' style='width:50px; height:50px;'></img></td><td>" . $fila['prezo_dia'] . "</td><td id='enlaceReserva'><a href=../reserva.php?id=".$fila['idProducto']." > Reservar</a> </td></tr>";
            echo "<table>";
        }
    } catch (PDOException $e) {
        echo "Erro ao conectar co servidor MySQL: " . $e->getMessage();
    }
}
