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
              $_SESSION['idProducto']=$id;

              try {
                // establecemos conexion e realizamos a consulta
                $pdo = entrarBase($servidor, $base, $usuario, $passwd);
                $pdoStatement = $pdo->prepare("SELECT * from productos where idProducto like ?");
                $pdoStatement->bindParam(1, $id);
        
                if (!$pdoStatement->execute()) {
                    echo "Houbo un erro o gardar os datos";
                } else {
                    echo '<link rel="stylesheet" type="text/css" href="css/css.css"></head>';
        
                    echo "<table><tr><th>Nome</th><th>Descripcion</th><th>Imaxe</th><th>Prezo Día</th><th>Accions</th></tr>";
                    while ($fila = $pdoStatement->fetch(PDO::FETCH_ASSOC))
                        echo "<tr><td>" . $fila['nome'] . " </td><td>" . $fila['descripcion'] . "</td><td><img src='" . $fila['imaxe'] . "' style='width:50px; height:50px;'></img></td><td>" . $fila['prezo_dia'] . "</td><td><table><tr><th><a href='reserva.php?id=$id&action=baixa'>Baixa</a></th></tr><tr><th><a href='reserva.php?id=$id&action=alugar'>Alugar</a></th></tr></table></td></tr>";
                    echo "<table>";
                }
            } catch (PDOException $e) {
                echo "Erro ao conectar co servidor MySQL: " . $e->getMessage();
            }

    }
}
?>
<div id="botonReserva">
<button href="reserva.php?id=<?php echo $id; ?>&action=deixarComentario">Deixar Comentario</button>
<button href="reserva.php?id=<?php echo $id; ?>&action=modificacionComentario">Modificar Comentario</button>

</div>

<?php

if(isset($_GET['action']) && $_GET['action'] == 'alugar'){
    echo "
        <form action='reserva.php' method='get'>
            <label>Data inicio</label>
            <input type='date' name='fechaInicio'>
            <label>Data inicio</label>
            <input type='date' name='fechaFin'>
            <button type='submit' name='ahoraAlugar'>Introducir</button>
        </form>    
    ";

}
if(isset($_GET['ahoraAlugar'])){
    try {
        // establecemos conexion e realizamos a consulta
        $id=$_SESSION['idProducto'];
        $pdo = entrarBase($servidor, $base, $usuario, $passwd);
        $pdoStatement = $pdo->prepare("INSERT INTO aluga (idProducto, idCliente, dataInicio, dataFin, prezoTotal) Values (:idProducto, :idCliente, :dataInicio, :dataFin, :prezoTotal)");
        $datos= array('idProducto' => $id,'idCliente'=>$_SESSION['idUser'], 'dataInicio'=>$_GET['fechaInicio'],'dataFin'=>$_GET['fechaFin'], 'prezoTotal'=>3000);
        
        if (!$pdoStatement->execute($datos)) {
            echo "Houbo un erro o gardar os datos";
        } else {
            echo 'Xa pode disfrutar da sua estancia';

            
        }
    } catch (PDOException $e) {
        echo "Erro ao conectar co servidor MySQL: " . $e->getMessage();
    }


}

if(isset($_GET['action']) && $_GET['action']== 'baixa'){
    try {
        // establecemos conexion e realizamos a consulta
        $pdo = entrarBase($servidor, $base, $usuario, $passwd);
        $pdoStatement = $pdo->prepare("UPDATE aluga SET datafin = :dataFin, devolto= :devolto where idProducto like :idProducto and idCliente like :idUser");

        $dataFin= date("Y-m-d H:i:s");   
        $devolto = 1;
        $datos=array('dataFin'=>$dataFin, 'devolto'=>$devolto, 'idProducto'=>$_SESSION['idProducto'], 'idUser'=>$_SESSION['idUser']);

        if (!$pdoStatement->execute($datos)) {
            echo "Houbo un erro o gardar os datos";
        } else {
            echo 'Anulouse a reserva';

        }
    } catch (PDOException $e) {
        echo "Erro ao conectar co servidor MySQL: " . $e->getMessage();
    }
}

if(isset($_GET[''])){
}
if(isset($_GET[''])){
}
if(isset($_GET[''])){
}

?>