<?php
session_start();

require "constantes.php";
require "functions.php";

$idioma=$_COOKIE['idioma'];

$saludo= saludarIdioma($idioma) . "<h1 id='user'>".$_SESSION['rol']."</h1>";

if (empty($_SESSION['rol']) ) {
    header("location: ../login.php");
}


if (isset($_SESSION['rol']) && $_SESSION['rol'] =="admin") {
    echo '<link rel="stylesheet" type="text/css" href="css/css.css"></head>';

    echo '<form id="estiloForm" action="xestiona.php" method="get">
        <input type="number" name="idProducto" id="" placeholder="ID Producto"> 
        <button type="submit" name="alta"> Alta</button>
        <button type="submit"  name="baixa">Baixa</button>
        <button type="submit"  name="modificar">Modificar</button>
        <button type="submit"  name="users">Usuarios</button>
        <button type="submit"  name="productosAll">Todos os productos</button>
        <button type="submit"  name="prodcutosReservados">Productos Reservados</button>
 
    </form>';

}

if (isset($_GET['alta'])){
    echo '<form id="estiloForm" action="xestiona.php" method="get">
    <input type="text" name="nome" id="" placeholder="Nome Producto"> 
    <input type="text" name="descripcion" id="" placeholder="Descripcion Producto"> 
    <input type="text" name="imaxe" id="" placeholder="imaxe Producto"> 
    <input type="text" name="prezoDia" id="" placeholder="prezo día"> 
    <button type="submit"  name="altaProducto">Dar de alta</button>

</form>';
}
if (isset($_GET['altaProducto'])){
    try {
        // establecemos conexion e realizamos a consulta
        $pdo = entrarBase($servidor, $base, $usuario, $passwd);
       
            $nome=$_GET['nome'];
            $descripcion=$_GET['descripcion'];
            $imaxe=$_GET['imaxe'];
            $imaxe="img/".$imaxe;
            $prezoDia=$_GET['prezoDia'];

            $pdoStatement = $pdo->prepare("INSERT INTO productos( nome,  descripcion, imaxe, prezo_dia) VALUES (:nome, :descripcion, :imaxen, :prezoDia)");
            $datosProducto= array('nome'=>$nome, 'descripcion'=>$descripcion, 'imaxen'=>$imaxe, 'prezoDia'=>$prezoDia);

        if (!$pdoStatement->execute($datosProducto)) {
            echo "Houbo un erro o gardar os datos";
        } else {
            echo "Producto añadido...";
        }
    } catch (PDOException $e) {
        echo "Erro ao conectar co servidor MySQL: " . $e->getMessage();
    }
}
if (isset($_GET['baixa'])){
    if (empty($_GET['idProducto'])){
        echo "Debes Introducir un Id para poder borrar un producto";
        return;
    }
    $idProducto=$_GET['idProducto'];
    try {
        // establecemos conexion e realizamos a consulta
        $pdo = entrarBase($servidor, $base, $usuario, $passwd);
         $pdoStatement = $pdo->prepare("DELETE FROM productos WHERE idProducto like :idProducto");
         $datosProducto=array('idProducto'=>$idProducto);
       

        if (!$pdoStatement->execute($datosProducto)) {
            echo "Houbo un erro o gardar os datos";
        } else {
            echo "Producto eliminado...";
        }
    } catch (PDOException $e) {
        echo "Erro ao conectar co servidor MySQL: " . $e->getMessage();
    }

}
if (isset($_GET['modificar'])){
    echo '<form id="estiloForm" action="xestiona.php" method="get">
    <input type="number" name="idProducto" id="" placeholder="Id Producto"> 
    <input type="text" name="nome" id="" placeholder="Nome Producto"> 
    <input type="text" name="descripcion" id="" placeholder="Descripcion Producto"> 
    <input type="text" name="imaxe" id="" placeholder="imaxe Producto"> 
    <input type="text" name="prezoDia" id="" placeholder="prezo día"> 
    <button type="submit"  name="modificarProducto">Modificar Producto</button>

</form>';

}
if (isset($_GET['modificarProducto'])){
    try {
        // establecemos conexion e realizamos a consulta
        $pdo = entrarBase($servidor, $base, $usuario, $passwd);

            $idProducto=$_GET['idProducto'];
            $nome=$_GET['nome'];
            $descripcion=$_GET['descripcion'];
            $imaxe=$_GET['imaxe'];
            $imaxe="img/".$imaxe;
            $prezoDia=$_GET['prezoDia'];

            $pdoStatement = $pdo->prepare("UPDATE productos SET nome= :nome, descripcion= :descripcion, imaxe= :imaxen, prezo_dia= :prezoDia where idProducto like :idProducto");
            $datosProducto= array('idProducto'=>$idProducto, 'nome'=>$nome, 'descripcion'=>$descripcion, 'imaxen'=>$imaxe, 'prezoDia'=>$prezoDia);

        if (!$pdoStatement->execute($datosProducto)) {
            echo "Houbo un erro o gardar os datos";
        } else {
            echo "Producto modificado...";
        }
    } catch (PDOException $e) {
        echo "Erro ao conectar co servidor MySQL: " . $e->getMessage();
    }

}
if (isset($_GET['users'])){
    try {
        // establecemos conexion e realizamos a consulta
        $pdo = entrarBase($servidor, $base, $usuario, $passwd);
        $pdoStatement = $pdo->prepare("SELECT * from users");


        if (!$pdoStatement->execute()) {
            echo "Houbo un erro o gardar os datos";
        } else {
            echo $saludo;
            
            echo "<table><tr><th>ID</th><th>Usuario</th><th>Rol</th><th>Data</th><th>    </th></tr>";
            while ($fila = $pdoStatement->fetch(PDO::FETCH_ASSOC))
                echo "<tr><td>" . $fila['idUsers'] . " </td><td>" . $fila['usuario'] . " </td><td>" . $fila['rol'] . "</td><td>" . $fila['data'] . "</td></tr>";
            echo "<table>";
        }
    } catch (PDOException $e) {
        echo "Erro ao conectar co servidor MySQL: " . $e->getMessage();
    }

}
if (isset($_GET['productosAll'])){
    try {
        // establecemos conexion e realizamos a consulta
        $pdo = entrarBase($servidor, $base, $usuario, $passwd);
        $pdoStatement = $pdo->prepare("SELECT * from productos");


        if (!$pdoStatement->execute()) {
            echo "Houbo un erro o gardar os datos";
        } else {
            echo $saludo;
            
            echo "<table><tr><th>ID</th><th>Nome</th><th>Descripcion</th><th>Imaxe</th><th>Prezo Día</th><th>    </th></tr>";
            while ($fila = $pdoStatement->fetch(PDO::FETCH_ASSOC))
                echo "<tr><td>" . $fila['idProducto'] . " </td><td>" . $fila['nome'] . " </td><td>" . $fila['descripcion'] . "</td><td><img src='" . $fila['imaxe'] . "' style='width:50px; height:50px;'></img></td><td>" . $fila['prezo_dia'] . "</td></tr>";
            echo "<table>";
        }
    } catch (PDOException $e) {
        echo "Erro ao conectar co servidor MySQL: " . $e->getMessage();
    }

}
if (isset($_GET['prodcutosReservados'])){
    try {
        // establecemos conexion e realizamos a consulta
        $pdo = entrarBase($servidor, $base, $usuario, $passwd);
        $pdoStatement = $pdo->prepare("SELECT * from productos where alugado like 1");


        if (!$pdoStatement->execute()) {
            echo "Houbo un erro o gardar os datos";
        } else {
            echo $saludo;
            
            echo "<table><tr><th>ID</th><th>Nome</th><th>Descripcion</th><th>Imaxe</th><th>Prezo Día</th><th>    </th></tr>";
            while ($fila = $pdoStatement->fetch(PDO::FETCH_ASSOC))
                echo "<tr><td>" . $fila['idProducto'] . " </td><td>" . $fila['nome'] . " </td><td>" . $fila['descripcion'] . "</td><td><img src='" . $fila['imaxe'] . "' style='width:50px; height:50px;'></img></td><td>" . $fila['prezo_dia'] . "</td></tr>";
            echo "<table>";
        }
    } catch (PDOException $e) {
        echo "Erro ao conectar co servidor MySQL: " . $e->getMessage();
    }

}



?>