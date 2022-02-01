<?php
session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
</head>
<body>
 <?php
    $user = $_SESSION['user'];

    echo "<h1>Hola <span>".$user."</span></h1>";?>
    <a href="close.php"><button>Salir</button></a>

    <form action="datos.php" method="get">
        <button type="submit" name="ordenarNombre">Ordenar por Nombre de empresa</button>
        <button type="submit" name="ordenarEmpregado">Ordenar por empregado asignado</button>
    </form>

    <?php if ($user== 'Javier'){ ?>
        <form action="datos.php" method="get">
        <label for="">Numero</label>
            <input type="text" name="numero" id="">
            <label for="">Nome</label>
            <input type="text" name="nome" id="">
            <label for="">Num Empregado Asignado</label>
            <input type="text" name="num_empregado_asignado" id="">
            <label for="">Limite de credito</label>
            <input type="text" name="limite_de_credito" id="">
            <button type="submit" name="engadirRexistro">Engadir rexistro</button>
        </form>
       

    <?php }
 ?>
 <h1>Datos Da tabla</h1>
 <?php
$servidor="db-pdo";
$usuario="root";
$passwd="root";
$base="EMPRESA";


 if (isset($_GET['ordenarNombre'])) {
        $pdo = new PDO("mysql:host=$servidor;dbname=$base;charset=utf8", $usuario, $passwd);
        $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        //PREPARAMOS A SENTENCIA:
        $pdoStatement=$pdo->prepare("SELECT * FROM cliente order by nome ASC ");
        $pdoStatement->execute();
        // SE NON TEMOS PARÁMETROS PODERÍAMOS RESUMIR AS 2 LIÑAS ANTERIORES EN:
        // $ pdoStatement->query("SELECT * FROM cliente ");
        echo "<table><tr><th>Nome</th><th>Num Empregado asignado</th><th>Limite de Crédito</th></tr>";
        while($fila=$pdoStatement->fetch(PDO::FETCH_ASSOC) )
        echo "<tr><td>".$fila['nome']." </td><td>".$fila['num_empregado_asignado']."</td><td>".$fila['limite_de_credito']."</td></tr>";
        echo "<table>";

 }elseif (isset($_GET['ordenarEmpregado'])) {

    $pdo = new PDO("mysql:host=$servidor;dbname=$base;charset=utf8", $usuario, $passwd);
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    //PREPARAMOS A SENTENCIA:
    $pdoStatement=$pdo->prepare("SELECT * FROM cliente order by num_empregado_asignado ASC ");
    $pdoStatement->execute();
    // SE NON TEMOS PARÁMETROS PODERÍAMOS RESUMIR AS 2 LIÑAS ANTERIORES EN:
    // $ pdoStatement->query("SELECT * FROM cliente ");
    echo "<table><tr><th>Nome</th><th>Num Empregado asignado</th><th>Limite de Crédito</th></tr>";
    while($fila=$pdoStatement->fetch(PDO::FETCH_ASSOC) )
    echo "<tr><td>".$fila['nome']." </td><td>".$fila['num_empregado_asignado']."</td><td>".$fila['limite_de_credito']."</td></tr>";
    echo "<table>";
     
 }else {
    $pdo = new PDO("mysql:host=$servidor;dbname=$base;charset=utf8", $usuario, $passwd);
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    //PREPARAMOS A SENTENCIA:
    $pdoStatement=$pdo->prepare("SELECT * FROM cliente");
    $pdoStatement->execute();
    // SE NON TEMOS PARÁMETROS PODERÍAMOS RESUMIR AS 2 LIÑAS ANTERIORES EN:
    // $ pdoStatement->query("SELECT * FROM cliente ");
    echo "<table><tr><th>Nome</th><th>Num Empregado asignado</th><th>Limite de Crédito</th></tr>";
    while($fila=$pdoStatement->fetch(PDO::FETCH_ASSOC) )
    echo "<tr><td>".$fila['nome']." </td><td>".$fila['num_empregado_asignado']."</td><td>".$fila['limite_de_credito']."</td></tr>";
    echo "<table>";
     
 }

 if (isset($_GET['engadirRexistro'])) {
    $numero=$_GET['numero'];
    $nome=$_GET['nome'];
    $numEmpregadoAsignado=$_GET['num_empregado_asignado'];
    $limiteDeCredito=$_GET['limite_de_credito'];

    $pdo = new PDO("mysql:host=$servidor;dbname=$base;charset=utf8", $usuario, $passwd);
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    //PREPARAMOS A SENTENCIA:
    $pdoStatement=$pdo->prepare("INSERT INTO cliente (numero, nome, num_empregado_asignado, limite_de_credito) VALUES (:numero, :nome,:num_empregado_asignado,:limite_de_credito)");
    $datosCliente= array('numero'=>$numero,'nome'=>$nome,'num_empregado_asignado'=>$numEmpregadoAsignado, 'limite_de_credito'=>$limiteDeCredito);
    $pdoStatement->execute($datosCliente);
    
    echo  "<h2>Engadido de forma correcta</h2>";

}

    

?>
    
</body>
</html>