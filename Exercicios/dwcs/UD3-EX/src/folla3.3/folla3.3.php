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
	<form action="folla3.3.php" method="GET">
	<button  type="submit" name="listaTemas" id="listaTemas">Lista todos os temas</button>
	<button  type="submit" name="listaPorTitulo" id="listaPorTitulo">Listar ordenados polo título</button>
	<button  type="submit" name="listaPorAutor" id="listaPorAutor">Lista Ordenados polo autor</button><br>
	<button  type="submit" name="listaPorAutorSelecionado" id="listaPorAutorSelecionado">Lista por autor seleccionado.</button>
	<button  type="submit" name="engadir" id="engadir">Engadir rexistro</button>
	<button  type="submit" name="editar" id="editar">Editar rexistro</button>





	</form>
<article id="contenedor">
<?php

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

if ( isset($_GET['listaTemas'] )) {
    $conexion=mysqli_connect("db","root","root", "musica");
    if ($conexion)
    {
        mysqli_set_charset($conexion,"utf8");
		
		$sql = "SELECT  * from tema";

		$resultado = mysqli_query($conexion, $sql);
        if ($resultado) {
			foreach ($resultado as $key => $value) {
				$srcImaxe= $value['Imaxe'];
				$tituloDisco=$value['Titulo'];
				$autorDisco=$value['Autor'];
				$anoDisco=$value['Ano'];
				echo "<div class='tema'><img src='imaxes/$srcImaxe.jpg'><br>$tituloDisco<br/>$autorDisco<br/>$anoDisco<br/>
				</div>";
			}
		}
       
    }
    else{
    echo "Fallou a conexión coa base de datos";
    }
    mysqli_close($conexion);
}
if ( isset($_GET['listaPorTitulo'] )) {
    $conexion=mysqli_connect("db","root","root", "musica");
    if ($conexion)
    {
        mysqli_set_charset($conexion,"utf8");
		
		$sql = "SELECT  * from tema order by Titulo asc";

		$resultado = mysqli_query($conexion, $sql);
        if ($resultado) {
			foreach ($resultado as $key => $value) {
				$srcImaxe= $value['Imaxe'];
				$tituloDisco=$value['Titulo'];
				$autorDisco=$value['Autor'];
				$anoDisco=$value['Ano'];
				echo "<div class='tema'><img src='imaxes/$srcImaxe.jpg'><br>$tituloDisco<br/>$autorDisco<br/>$anoDisco<br/>
				</div>";
			}
		}
       
    }
    else{
    echo "Fallou a conexión coa base de datos";
    }
    mysqli_close($conexion);
}
if ( isset($_GET['listaPorAutor'] )) {
    $conexion=mysqli_connect("db","root","root", "musica");
    if ($conexion)
    {
        mysqli_set_charset($conexion,"utf8");
		
		$sql = "SELECT  * from tema order by Autor asc";

		$resultado = mysqli_query($conexion, $sql);
        if ($resultado) {
			foreach ($resultado as $key => $value) {
				$srcImaxe= $value['Imaxe'];
				$tituloDisco=$value['Titulo'];
				$autorDisco=$value['Autor'];
				$anoDisco=$value['Ano'];
				echo "<div class='tema'><img src='imaxes/$srcImaxe.jpg'><br>$tituloDisco<br/>$autorDisco<br/>$anoDisco<br/>
				</div>";
			}
		}
       
    }
    else{
    echo "Fallou a conexión coa base de datos";
    }
    mysqli_close($conexion);
}
if ( isset($_GET['verTema'] )) {
    $conexion=mysqli_connect("db","root","root", "musica");
    if ($conexion)
    {
        mysqli_set_charset($conexion,"utf8");
		$autor= $_GET['tema'];
		
		$sql = "SELECT  * from tema where Autor like '$autor'";

		$resultado = mysqli_query($conexion, $sql);
        if ($resultado) {
			foreach ($resultado as $key => $value) {
				$srcImaxe= $value['Imaxe'];
				$tituloDisco=$value['Titulo'];
				$autorDisco=$value['Autor'];
				$anoDisco=$value['Ano'];
				echo "<div class='tema'><img src='imaxes/$srcImaxe.jpg'><br>$tituloDisco<br/>$autorDisco<br/>$anoDisco<br/>
				</div>";
			}
		}
       
    }
    else{
    echo "Fallou a conexión coa base de datos";
    }
    mysqli_close($conexion);
}

if ( isset($_GET['listaPorAutorSelecionado'] )) {
	$conexion=mysqli_connect("db","root","root", "musica");
    if ($conexion)
    {
        mysqli_set_charset($conexion,"utf8");
		
		$sql = "SELECT  * from tema";

		$resultado = mysqli_query($conexion, $sql);
        if ($resultado) {
			echo '<div><form action="folla3.3.php" method="get"> <select  name="tema" id="tema">';
			foreach ($resultado as $key => $value) {
				
				$tituloDisco=$value['Titulo'];
				echo "<option value='$tituloDisco'>$tituloDisco</option>";

			}
			
			echo '</select>';
			echo '<button  type="submit" name="verTema" id="editar">Ver Tema</button>';
			echo '</form> </div>';
		}
       
    }
    else{
    echo "Fallou a conexión coa base de datos";
    }
    mysqli_close($conexion);
}





	/* DENTRO DUN BUCLE E DESPOIS DE LER AS VARIABLES DA BASE DE DATOS:
	
	echo "<div class='tema'><img src='imaxes/$srcImaxe'><br>...<br/>
	</div>";
	
	*/


?>

<article>
</body>
</html>






















