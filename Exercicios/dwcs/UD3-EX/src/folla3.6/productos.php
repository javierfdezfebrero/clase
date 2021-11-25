<?php
    if(isset($_GET['consultar'])){

        $familia= $_GET['familia'];
        $conexion = conexion();
        //PREPARAMOS A SENTENCIA:
            $sentenciaListaFamilias=$conexion->prepare("SELECT * from productos where familia like ? ");
            $sentenciaListaFamilias->bind_param("s", $familia);
            $sentenciaListaFamilias->execute();
            $resultado= $sentenciaListaFamilias->get_result();
            
            while($fila=$resultado->fetch_array(MYSQLI_BOTH) ){
          
                echo $fila['id']." ".$fila['nombre']." ".$fila['nombre_corto']." ".$fila['descripcion']." ".$fila['pvp']." ".$fila['familia'];
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
