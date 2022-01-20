<?php


    $servidor = "db-pdo-2";
    $usuario = "root";
    $passwd = "root";
    $base = "proba";
    $dsn = "mysql:host=$servidor;dbname=$base;charset=utf8mb4";
    //CONECTAMOS
    try {
        $conPDO = new PDO($dsn, $usuario, $passwd);
        $conPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $ex) {
        die("Erro na conexión mensaxe: " . $ex->getMessage());
    }


javier

    

    if (isset($_GET['entrar'])) {
        $usuario = $_GET['usuario'];
        $contrasinal = $_GET['contrasinal'];
    }

    $usuario = $_SERVER['PHP_AUTH_USER'];
    $sontrasinal = $_SERVER['PHP_AUTH_PW'];


    //PREPARAMOS A SENTENCIA:
    $stmt = $conPDO->prepare("SELECT contrasinal From usuarios Where usuario like :usuario");
    // DAMOS VALORES AOS PAŔÁMETROS E EXECUTAMOS:

    if (!$stmt->execute(array('usuario' => $usuario))) {
        echo "Houbo un erro na execución da consulta";
    } else {
        $fila = $stmt->fetch();
        if ($stmt->rowCount() == 1) { //HAI UN USUARIO
            $contrasinalBD = $fila[0];
        }
    }

    if ($stmt->rowCount() == 0 || !password_verify($contrasinal, $contrasinalBD)) {
        header("WWW-Authenticate: Basic realm='Contido restrinxido'");
        header("HTTP/1.0 401 Unauthorized");
        $stmt = null;
        $conPDO = null;
        die();
    } else {
        $stmt = null;
        $conPDO = null;
?>
        <!DOCTYPE html>

        <head>
            <title>Autenticación BD</title>
        </head>

        <body>
            <p>
                <?php
                echo "Benvido $usuario, está vostede na área restrinxida";
                ?>
            </p>
        </body>

        </html>
<?php
    }

?>