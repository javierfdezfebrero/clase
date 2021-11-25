<!DOCTYPE html>
<html>
<head>
<style>
	#contenedor
	{
		width:70%;
		margin:20px auto;
		background-color:white;
			
		display: grid; 
		grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
		grid-gap: 5px; 
	}

	.tema
	{
		/* width:200px; */
		height:210px;
		background-color:white;
		border:1px black solid;
		text-align: center;
		padding-top:20px;
		font-family:Arial;
			
	}
	img
	{
	width:130px;
	height:130px;
		
	}
</style>


<meta charset="utf-8" />
<title></title>
</head>
<body>
	<form action="musica5.php" method="GET">
	<button  type="submit" name="listaTemas" id="listaTemas">Lista todos os temas</button>
	<button  type="submit" name="listaPorTitulo" id="listaPorTitulo">Listar ordenados polo título</button>
	<button  type="submit" name="listaPorAutor" id="listaPorAutor">Lista Ordenados polo autor</button><br>
	<button  type="submit" name="listaPorAutorSelecionado" id="listaPorAutorSelecionado">Lista por autor seleccionado.</button>
	<button  type="submit" name="engadir" id="engadir">Engadir rexistro</button>
	<button  type="submit" name="editar" id="editar">Editar rexistro</button>





	</form>
<article id="contenedor">
<?php

$servidor="db";
$usuario="root";
$passwd="root";
$base="musica";
//CONECTAMOS
$conexion = new mysqli($servidor, $usuario, $passwd, $base); //CONECTAMOS 
if($conexion->connect_error)
die("Non é posible conectar coa BD: ". $conexion->connect_error);
$conexion->set_charset("utf8");
//PREPARAMOS A SENTENCIA:
$sentenciaListaTemas=$conexion->prepare("SELECT * from tema");

if ( isset($_GET['listaTemas'] )) {
    $sentenciaListaTemas=$conexion->prepare("SELECT * from tema");

    
        $sentenciaListaTemas->execute();
        $resultado=$sentenciaListaTemas->get_result();


        while($fila=$resultado->fetch_array(MYSQLI_BOTH) ){
          
                $srcImaxe= $fila['Imaxe'];
                $tituloDisco=$fila['Titulo'];
                $autorDisco=$fila['Autor'];
                $anoDisco=$fila['Ano'];
                echo "<div class='tema'><img src='imaxes/$srcImaxe.jpg'><br>$tituloDisco<br/>$autorDisco<br/>$anoDisco<br/>
                </div>";
            }

        $sentenciaListaTemas->close();
       
}
if ( isset($_GET['listaPorTitulo'] )) {
	$sentenciaListaTitulo=$conexion->prepare("SELECT * from tema order by Titulo");
	$sentenciaListaTitulo->execute();
	$resultado=$sentenciaListaTitulo->get_result();


	while($fila=$resultado->fetch_array(MYSQLI_BOTH) ){
	  
			$srcImaxe= $fila['Imaxe'];
			$tituloDisco=$fila['Titulo'];
			$autorDisco=$fila['Autor'];
			$anoDisco=$fila['Ano'];
			echo "<div class='tema'><img src='imaxes/$srcImaxe.jpg'><br>$tituloDisco<br/>$autorDisco<br/>$anoDisco<br/>
			</div>";
		}

	$sentenciaListaTitulo->close();
}
if ( isset($_GET['listaPorAutor'] )) {
    $sentenciaListaAutor=$conexion->prepare("SELECT * from tema order by Autor");
	$sentenciaListaAutor->execute();
	$resultado=$sentenciaListaAutor->get_result();


	while($fila=$resultado->fetch_array(MYSQLI_BOTH) ){
	  
			$srcImaxe= $fila['Imaxe'];
			$tituloDisco=$fila['Titulo'];
			$autorDisco=$fila['Autor'];
			$anoDisco=$fila['Ano'];
			echo "<div class='tema'><img src='imaxes/$srcImaxe.jpg'><br>$tituloDisco<br/>$autorDisco<br/>$anoDisco<br/>
			</div>";
		}

	$sentenciaListaAutor->close();
}
if ( isset($_GET['verTema'] )) {
	$titulo= $_GET['titulo'];
    $sentenciaVerTema=$conexion->prepare("SELECT * from tema where Titulo like ?");
	$sentenciaVerTema->bind_param("s", $titulo);
	$sentenciaVerTema->execute();
	$resultado=$sentenciaVerTema->get_result();


	while($fila=$resultado->fetch_array(MYSQLI_BOTH) ){
	  
			$srcImaxe= $fila['Imaxe'];
			$tituloDisco=$fila['Titulo'];
			$autorDisco=$fila['Autor'];
			$anoDisco=$fila['Ano'];
			echo "<div class='tema'><img src='imaxes/$srcImaxe.jpg'><br>$tituloDisco<br/>$autorDisco<br/>$anoDisco<br/>
			</div>";
		}

	$sentenciaVerTema->close();
}

if ( isset($_GET['listaPorAutorSelecionado'] )) {
	$sentenciaListaTemas->execute();
	$resultado=$sentenciaListaTemas->get_result();

	echo '<div><form action="musica5.php" method="get"> <select  name="titulo" id="titulo">';
	while($fila=$resultado->fetch_array(MYSQLI_BOTH) ){
				
				$tituloDisco=$fila['Titulo'];
				echo "<option value='$tituloDisco'>$tituloDisco</option>";
				
		}
		echo '</select>';
		echo '<button  type="submit" name="verTema" id="editar">Ver Tema</button>';
		echo '</form> </div>';
		$sentenciaListaTemas->close();
       
    }
   
	if ( isset($_GET['engadir'] )) {
		echo '<div>
		<form action="modificarbbdd.php" method="POST" enctype="multipart/form-data">
		Titulo:<input type="text" name="titulo"/>
		Autor:<input type="text" name="autor"/>
		Ano:<input type="text" name="ano"/>
		Duracion:<input type="text" name="duracion"/>
		Imaxe:<input name="meuArquivo" type="file"/>
			<input name="subir" type="submit" value="Engadir"/>
		</form>
		</div><br>';
	}
	
	if ( isset($_GET['editar'] )) {
		echo '<div>
		<form action="editarbbdd.php" method="POST" enctype="multipart/form-data">
		<select  name="tema" id="tema">
	
			<option value="The Beatles">The Beatles</option>
			<option value="Bruce Springsteen">Bruce Springsteen</option>
			<option value="Pink Floyd">Pink Floyd</option>
			<option value="The Beach Boys">The Beach Boys</option>
			<option value="Eagles">Eagles</option>
			<option value="John Lennon">John Lennon</option>
			<option value="The Rolling Stone">The Rolling Stones</option>
			<option value="The Doors">The Doors</option>
			<option value="Bob Dylan">Bob Dylan</option>
			<option value="Led Zeppelin">Led Zeppelin</option>
	
		</select>
			<input name="edit" type="submit" value="editar"/>
		</form>
		</div><br>';
	}



$conexion->close();


	/* DENTRO DUN BUCLE E DESPOIS DE LER AS VARIABLES DA BASE DE DATOS:
	
	echo "<div class='tema'><img src='imaxes/$srcImaxe'><br>...<br/>
	</div>";
	
	*/


?>

<article>
</body>
</html>
