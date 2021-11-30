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
          
                echo '<form action="detalle.php?familia=".$familia."" method="GET">';

                echo $fila['id']." ".$fila['nombre']." ".$fila['nombre_corto']." ".substr($fila['descripcion'],0,100)." ".$fila['pvp']." ".$fila['familia'];
                $producto=$fila['nombre'];
                echo "<button type='submit' name='producto' value='$producto'>Detalle</button><br>";
                echo '</form>';
                $producto=$fila['nombre'];
                echo "<a href='detalle.php?producto=$producto'>detalle enlace</a>";
            }
            echo '<form action="inicio.php" method="GET">';
            echo '<button type="submit" name="detalle">Inicio</button><br>';
            echo '</form>';
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
