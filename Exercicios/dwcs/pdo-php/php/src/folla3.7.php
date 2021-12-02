<?php
$servidor="db-pdo";
$usuario="root";
$passwd="root";
$base="proba";

echo "<h1> exercicio 1</h1> <br>";
try { //CONECTAMOS
    $pdo = new PDO("mysql:host=$servidor;dbname=$base;charset=utf8", $usuario, $passwd);
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    //PREPARAMOS A SENTENCIA:
    $pdoStatement=$pdo->prepare("SELECT * FROM cliente ");
    $pdoStatement->execute();
    // SE NON TEMOS PARÁMETROS PODERÍAMOS RESUMIR AS 2 LIÑAS ANTERIORES EN:
    // $ pdoStatement->query("SELECT * FROM cliente ");
    echo "<table><tr><th>Nome</th><th>Apelidos</th></tr>";
    while($fila=$pdoStatement->fetch(PDO::FETCH_ASSOC) )
    echo "<tr><td>".$fila['nome']." </td><td>".$fila['apelido']."</td></tr>";
    echo "<table>";
    }
    catch(PDOException $e) {
    echo "Erro ao conectar co servidor MySQL: ".$e->getMessage();
    }
    $pdo=null;

    echo "<h1> exercicio 2</h1> <br>";
    try { //CONECTAMOS
        $pdo = new PDO("mysql:host=$servidor;dbname=$base;charset=utf8", $usuario, $passwd);
        $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        //PREPARAMOS A SENTENCIA:
        $pdoStatement=$pdo->prepare("SELECTT * FROM cliente ");
        $pdoStatement->execute();
        // SE NON TEMOS PARÁMETROS PODERÍAMOS RESUMIR AS 2 LIÑAS ANTERIORES EN:
        // $ pdoStatement->query("SELECT * FROM cliente ");
        echo "<table><tr><th>Nome</th><th>Apelidos</th></tr>";
        while($fila=$pdoStatement->fetch(PDO::FETCH_ASSOC) )
        echo "<tr><td>".$fila['nome']." </td><td>".$fila['apelido']."</td></tr>";
        echo "<table>";
        }
        catch(PDOException $e) {
        echo "Erro ao conectar co servidor MySQL: ".$e->getMessage();
        }
        $pdo=null;



      
        echo "<h1> exercicio 3</h1> <br>";
        echo "<p>  3.Fai un código que che permita inserir 3 clientes novos empregando PDO, de 3 xeitos diferentes:✗cos marcadores anónimos✗cos marcadores coñecidos e con 3 variables codCliente, nome e apelido empregando un array asociativo</p><br>";

        try { //CONECTAMOS
            $pdo = new PDO("mysql:host=$servidor;dbname=$base;charset=utf8", $usuario, $passwd);
            $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            //PREPARAMOS A SENTENCIA:
            $pdoStatement=$pdo->prepare("INSERT INTO cliente(id, nome, apelido) VALUES (?,?,?) ");
            $id=101;
            $nome="Xiao";
            $apelido="Ferreiro";
            $pdoStatement->bindParam(1, $id);
            $pdoStatement->bindParam(2, $nome);
            $pdoStatement->bindParam(3, $apelido);
            $pdoStatement->execute();

            echo "<h3>Cos marcadores anónimos: feito</h3>";


            $pdoStatement=$pdo->prepare("INSERT INTO cliente (id, nome, apelido) VALUES (:id,:nome,:apelido)");
                $id=106;
                $nome="Xan";
                $apelido="Ferrán";
                $pdoStatement->bindParam(':id', $id);
                $pdoStatement->bindParam(':nome', $nome);
                $pdoStatement->bindParam(':apelido', $apelido);
                $pdoStatement->execute();
                echo "<h3>Cos marcadores coñecidos: feito</h3>";

                $pdoStatement=$pdo->prepare("INSERT INTO cliente (id, nome, apelido) VALUES (:id,:nome,:apelido)");
                $datosCliente= array('id'=>108,'nome'=>'Xose', 'apelido'=>'Gómez');
                $pdoStatement->execute($datosCliente);

                echo "<h3>Cos marcadores array asociativo: feito</h3>";



            // SE NON TEMOS PARÁMETROS PODERÍAMOS RESUMIR AS 2 LIÑAS ANTERIORES EN:
            // $ pdoStatement->query("SELECT * FROM cliente ");
           // echo "<table><tr><th>Nome</th><th>Apelidos</th></tr>";
            // while($fila=$pdoStatement->fetch(PDO::FETCH_ASSOC) )
            // echo "<tr><td>".$fila['nome']." </td><td>".$fila['apelido']."</td></tr>";
            // echo "<table>";
            }
            catch(PDOException $e) {
            echo "Erro ao conectar co servidor MySQL: ".$e->getMessage();
            }
            $pdo=null;

?>