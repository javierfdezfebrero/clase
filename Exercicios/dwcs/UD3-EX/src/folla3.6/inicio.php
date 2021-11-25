<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>Benvidos a Infotend</H1>

    <form action="inicio.php" method="GET" >
        <input type="text" name="texto" id="texto">
        <button type="submit" name="buscar">Buscar</button>
        
    </form>
    <form action="productos.php" method="GET">
        <select name="familia" id="familia">
                <?php mostrarProductos();?>
        </select>
        <button type="submit" name="consultar">Consultar</button>
    </form>
    <form action="edicion.php" method="GET">
        <button type="submit" name="editar">Editar</button>
    </form>


    <?php

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

    

    function mostrarProductos(){
        $conexion = conexion();
        //PREPARAMOS A SENTENCIA:
            $sentenciaListaFamilias=$conexion->prepare("SELECT * from familias");

            $sentenciaListaFamilias->execute();
            $resultado= $sentenciaListaFamilias->get_result();

            while($fila=$resultado->fetch_array(MYSQLI_BOTH) ){
          
                
                echo "<option value=".$fila['cod'].">".$fila['nombre']."</option>";
            }
            echo "<option value='todos'>Todos</option>";

    }

    if(isset($_GET['buscar'])){

        $texto= $_GET['texto'];
        $conexion = conexion();
        //PREPARAMOS A SENTENCIA:
            $sentenciaListaFamilias=$conexion->prepare("SELECT * from productos where nombre like ? or nombre_corto like ? or descripcion like ? or  pvp like ? or familia like ?");
            $sentenciaListaFamilias->bind_param("sssss", $texto, $texto, $texto, $texto, $texto);
            $sentenciaListaFamilias->execute();
            $resultado= $sentenciaListaFamilias->get_result();
            
            while($fila=$resultado->fetch_array(MYSQLI_BOTH) ){
          
                
                echo $fila['id']." ".$fila['nombre']." ".$fila['nombre_corto']." ".$fila['descripcion']." ".$fila['pvp']." ".$fila['familia'];
            }
            
    }

    ?>
</body>
</html>