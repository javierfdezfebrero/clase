<?php

if(isset($_GET['producto'])){

    $producto= $_GET['producto'];
    $conexion = conexion();
    //PREPARAMOS A SENTENCIA:
        $sentenciaListaFamilias=$conexion->prepare("SELECT * from productos where nombre like ? ");
        $sentenciaListaFamilias->bind_param("s", $producto);
        $sentenciaListaFamilias->execute();
        $resultado= $sentenciaListaFamilias->get_result();
        
        while($fila=$resultado->fetch_array(MYSQLI_BOTH) ){
            echo "<h1>".$fila['id']."</h1>";
            echo "<h1>".$fila['nombre']."</h1>";
            echo $fila['nombre_corto']." ".$fila['descripcion']." ".$fila['pvp']." ".$fila['familia'];
           
            
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