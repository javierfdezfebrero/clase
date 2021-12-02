
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
</head>
<body>
<form action="edicion.php" method="GET" >
        <button type="submit" name="novoProducto">Novo producto</button>
        <button type="submit" name="buscar">Actualizar produto</button>
        <button type="submit" name="buscar">Eliminar produto</button>
        <button type="submit" name="buscar">Nova familia</button>
        <button type="submit" name="buscar">Actualizar familia</button>
        <button type="submit" name="buscar">Eliminar familias</button>
        <button type="" href="inicio.php" name="">Volver a inicio</button>
        
    </form>
    
</body>
</html>



<?php

if(isset($_GET['novoProducto'])){

    echo '
    <form action="edicion.php" method="GET" >
        <input type="text" name="novoProducto" id="novoProducto">
        <input type="text" name="nomeCorto" id="nomeCorto">
        <input type="text" name="descripcion" id="descripcion">
        <input type="text" name="pvp" id="pvp">
        <select name="familia" id="familia">';
                mostrarProductos();
       echo ' </select>
        <button type="submit" name="gardarProducto">Gardar Producto</button>
        
    </form>';
    
        
}

if(isset($_GET['gardarProducto'])){
    $novoproducto=$_GET['novoProducto'];
    $nomeCorto=$_GET['nomeCorto']; 
    $descripcion=$_GET['descripcion']; 
    $pvp=$_GET['pvp'];
    $familia=$_GET['familia'];

    $conexion = conexion();
    //PREPARAMOS A SENTENCIA:
 
        $sentenciaListaFamilias=$conexion->prepare("INSERT INTO productos(nombre, nombre_corto, descripcion, pvp, familia) values(? ,?, ?, ?, ?) ");
        $sentenciaListaFamilias->bind_param("sssis", $novoproducto ,$nomeCorto,  $descripcion, $pvp, $familia);
        $sentenciaListaFamilias->execute();        
        
      
}

function mostrarProductos(){
    $conexion = conexion();
    //PREPARAMOS A SENTENCIA:
        $sentenciaListaFamilias=$conexion->prepare("SELECT * from familias");

        $sentenciaListaFamilias->execute();
        $resultado= $sentenciaListaFamilias->get_result();

        while($fila=$resultado->fetch_array(MYSQLI_BOTH) ){
      
            
            echo "<option value=".$fila['cod'].">".$fila['nombre']."</option>";
        }

}


function conexion(){

    $servidor="db";
    $usuario="root";
    $passwd="root";
    $base="tendaInformatica";
    //CONECTAMOS
    $conexion = new mysqli($servidor, $usuario, $passwd, $base); //CONECTAMOS 
    if($conexion->connect_error)
    die("Non é posible conectar coa BD: ". $conexion->connect_error);
    $conexion->set_charset("utf8");
    return $conexion;

}

?>