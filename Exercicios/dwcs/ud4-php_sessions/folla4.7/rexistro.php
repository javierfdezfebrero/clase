<?php
session_start();
require "constantes.php";
require "functions.php";


// verificamos que veña de rexistro
if (!isset($_GET['rexistrarse'])) {
    header("location: rexistro.html");
}

$user = strip_tags($_GET['user']);
$contrasinal = $_GET['contrasinal'];
$rol = $_GET['rol'];

// creamos password
$contra = crearPass($contrasinal);
$data = date("Y-m-d H:i:s");  

try{
            // establecemos conexion e realizamos a consulta
            $pdo = entrarBase($servidor,$base,$usuario,$passwd);
            $pdoStatement=$pdo->prepare("INSERT INTO users ( usuario, password, data, rol) VALUES (:user , :contrasinal, :data, :rol)");
            $datosCliente= array('user'=>$user, 'contrasinal'=>$contra, 'data'=>$data, 'rol'=>$rol);
        
            if (!$pdoStatement->execute($datosCliente)) {
                echo "Houbo un erro o gardar os datos";
            } else {
                    
                    // rediriximos a mostra, cos datos de user e rol
                    $_SESSION['user']=$user;
                    $_SESSION['rol']=$rol;
                    header('Location: mostra.php');
                
            }
    }
    catch(PDOException $e) {
        echo "Erro ao conectar co servidor MySQL: ".$e->getMessage();
        }
        