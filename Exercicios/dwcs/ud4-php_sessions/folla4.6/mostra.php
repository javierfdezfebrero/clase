<?php

if (isset($_GET[''])){

    $comments= htmlentities( $_GET['comments']) ;

    echo $comments;


}


if (isset($_GET['enter'])){
    $servidor="db-pdo";
    $usuario="root";
    $passwd="root";
    $base="proba";

    $user= strip_tags( $_GET['user']);

    $comments= strip_tags( $_GET['comments']) ;


    try { //CONECTAMOS
        $pdo = new PDO("mysql:host=$servidor;dbname=$base;charset=utf8", $usuario, $passwd);
        $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        $pdoStatement=$pdo->prepare("INSERT INTO comentarios (user, comments) VALUES (:user,:comments)");
        $datosCliente= array('user'=>$user,'comments'=>$comments);
        $pdoStatement->execute($datosCliente);

        header('Location: mostra.php');

    }
    catch(PDOException $e) {
    echo "Erro ao conectar co servidor MySQL: ".$e->getMessage();
    }
    $pdo=null;
    

}else{
    $servidor="db-pdo";
    $usuario="root";
    $passwd="root";
    $base="proba";



    try { //CONECTAMOS
        $pdo = new PDO("mysql:host=$servidor;dbname=$base;charset=utf8", $usuario, $passwd);
        $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        $pdoStatement=$pdo->prepare("SELECT * from comentarios");
       
        $pdoStatement->execute();

        echo "<table><tr><th>usuario</th><th>Comentarios</th></tr>";
        while ($fila = $pdoStatement->fetch(PDO::FETCH_ASSOC))
            echo "<tr><td>" . $fila['user'] . " </td><td>" . $fila['comments'] . "</td></tr>";
        echo "<table>";

    }
    catch(PDOException $e) {
    echo "Erro ao conectar co servidor MySQL: ".$e->getMessage();
    }
    $pdo=null;

}



?>