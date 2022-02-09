<?php
session_start();
require "constantes.php";
require "functions.php";

if (isset($_SESSION['rol'])) {
    if (!$_SESSION['rol'] == 'usuario') {
        header("../login.php");
    }

    if(!empty($_GET['id'])){
              $id = $_GET['id'];

              try {
                // establecemos conexion e realizamos a consulta
                $pdo = entrarBase($servidor, $base, $usuario, $passwd);
                $pdoStatement = $pdo->prepare("SELECT * from productos where idProducto like ?");
                $pdoStatement->bindParam(1, $id);
        
                if (!$pdoStatement->execute()) {
                    echo "Houbo un erro o gardar os datos";
                } else {
                    echo '<link rel="stylesheet" type="text/css" href="css/css.css"></head>';
        
                    echo "<table><tr><th>Nome</th><th>Descripcion</th><th>Imaxe</th><th>Prezo Día</th></tr>";
                    while ($fila = $pdoStatement->fetch(PDO::FETCH_ASSOC))
                        echo "<tr><td>" . $fila['nome'] . " </td><td>" . $fila['descripcion'] . "</td><td><img src='" . $fila['imaxe'] . "' style='width:50px; height:50px;'></img></td><td>" . $fila['prezo_dia'] . "</td></tr>";
                    echo "<table>";
                }
            } catch (PDOException $e) {
                echo "Erro ao conectar co servidor MySQL: " . $e->getMessage();
            }

    }
}
?>
<div id="botonReserva">
<button href="reserva.php?id=<?php echo $id; ?>&action=alta">Alta</button>
<button href="reserva.php?id=<?php echo $id; ?>&action=baixa">Baixa</button>
<button href="reserva.php?id=<?php echo $id; ?>&action=modificacion">Modificar</button>

</div>