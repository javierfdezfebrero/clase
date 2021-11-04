<html>
<head><title>Curtocircuito 2020</title>
<link type="text/css" rel="stylesheet" href="exame.css"> 
</head>
<body>

<div id="contenedor">

<header>
<h2>Curtocircuito 2020 </h2>
</header>
<aside id="esquerda"></aside>
<aside id="dereita"></aside>
<article id="noiteCurta"></article>


<aside id="formulario">
	<form action="" method="GET">
		<div class="busca">
		<Label>Buscar curta por texto:</Label>
		<input type="text" value="" name="nomeCurta">
		<button type="submit" name="curta" value="Buscar">Buscar</button>
		</div>
	<hr>
		<button type="submit" name="listadoCompleto" value="Ver listado completo">Ver listado completo</button>
		<hr>
		<Label>Ordenando:</Label>
		
		<button type="submit" name="poloDirector" value="Polo nome do director">Polo nome do director</button>
		<button type="submit" name="poloTitulo" value="Polo titulo">Polo titulo</button>
		<button type="submit" name="decPais" value="Decrecente polo país">Decrecente polo país</button>
		<button type="submit" name="lonxTitulo" value="Pola lonx. do titulo">Pola lonx. do titulo</button>
		<hr>
		<Label>Cambios:</Label>
		
		<button type="submit" name="eliminaComas" value="elimina comas de calquera colunma">elimina comas de calquera colunma</button>
		<button type="submit" name="cambioPTGZ" value="cambio 'PT' por 'Galicia'">cambio 'PT' por 'Galicia'</button>
		<button type="submit" name="maiusculas" value="Maiusculas a 2ª e 6ª letra do titulo">Maiusculas a 2ª e 6ª letra do titulo</button>
		<button type="submit" name="franceFirst" value="francia de primeira">francia de primeira</button>
		<hr>
		<div>
		<Label>Duración maior que:</Label>
		<input type="text" value="" name="duracion">
		<button type="submit" name="buscarDur" value="Buscar">Buscar</button>
		</div>

	
	</form>
	
	
	
	

</aside>

<article id="taboa">
<?php
	include 'datosCurtocircuito.php';
	/* AQUÍ DEFINIR O PHP QUE MOSTRA A TÁBOA CO RESULTADO QUE CORRESPONDA  */
	function curta ($array){
		$curta = $_GET['nomeCurta'];
		echo "<table>";
		echo "<th>Titulo</th>";
		echo "<th>Director</th>";
		echo "<th>Duracion</th>";
		echo "<th>Pais</th>";
		foreach ($array as $key => $value) {
		echo "<tr>";
		if ($curta == $key){
			echo "<td>".$key."</td>";
			foreach ($value as $clave => $valor) {
				echo "<td>".$valor."</td>";
			}
			}
		}
		echo "</tr>";
		echo "</table>";

		echo "A curta mais longa é". $key . "con duracion de".$clave[1] ."minutos";  

	}
	function listadoCompleto ($array){
		echo "<table>";
		echo "<th>Titulo</th>";
		echo "<th>Director</th>";
		echo "<th>Duracion</th>";
		echo "<th>Pais</th>";
		foreach ($array as $key => $value) {
		echo "<tr>";
		echo "<td>".$key."</td>";
			foreach ($key as $clave => $valor) {
				echo "<td>".$valor."</td>";
			}
			
		}
		echo "</tr>";
		echo "</table>";

	}
	function poloDirector ($array){
		$nuevoArray = array_sort($array, 0 , SORT_ASC);
		echo "<table>";
		echo "<th>Titulo</th>";
		echo "<th>Director</th>";
		echo "<th>Duracion</th>";
		echo "<th>Pais</th>";
		foreach ($nuevoArray as $key => $value) {
		echo "<tr>";
		echo "<td>".$key."</td>";
			foreach ($key as $clave => $valor) {
				echo "<td>".$valor."</td>";
			}
			
		}
		echo "</tr>";
		echo "</table>";

	}
	function poloTitulo ($array){
		$nuevoArray = sort($array);
		echo "<table>";
		echo "<th>Titulo</th>";
		echo "<th>Director</th>";
		echo "<th>Duracion</th>";
		echo "<th>Pais</th>";
		foreach ($nuevoArray as $key => $value) {
		echo "<tr>";
		echo "<td>".$key."</td>";
			foreach ($key as $clave => $valor) {
				echo "<td>".$valor."</td>";
			}
			
		}
		echo "</tr>";
		echo "</table>";

	}
	function decPais ($array){
		$nuevoArray = array_sort($array, 2 , SORT_DESC);
		echo "<table>";
		echo "<th>Titulo</th>";
		echo "<th>Director</th>";
		echo "<th>Duracion</th>";
		echo "<th>Pais</th>";
		foreach ($nuevoArray as $key => $value) {
		echo "<tr>";
		echo "<td>".$key."</td>";
			foreach ($key as $clave => $valor) {
				echo "<td>".$valor."</td>";
			}
			
		}
		echo "</tr>";
		echo "</table>";

	}
	function lonxTitulo ($array){
		$nuevoArray = array_sort($array, 2 , SORT_DESC);
		echo "<table>";
		echo "<th>Titulo</th>";
		echo "<th>Director</th>";
		echo "<th>Duracion</th>";
		echo "<th>Pais</th>";
		foreach ($nuevoArray as $key => $value) {
		echo "<tr>";
		echo "<td>".$key."</td>";
			foreach ($key as $clave => $valor) {
				echo "<td>".$valor."</td>";
			}
			
		}
		echo "</tr>";
		echo "</table>";

	}
	function ordenar($array){
		foreach ($array as $key => $value) {
			
		}

	}

	function eliminaComas ($array){
		echo "<table>";
		echo "<th>Titulo</th>";
		echo "<th>Director</th>";
		echo "<th>Duracion</th>";
		echo "<th>Pais</th>";
		foreach ($array as $key => $value) {
		echo "<tr>";
		$keySinComas= substr_replace(',', '' , $key );
		echo "<td>".$keySinComas."</td>";
			foreach ($key as $clave => $valor) {
				$valorSinComas= substr_replace(',', '' , $valor );
				echo "<td>".$valorSonComas."</td>";
			}
			
		}
		echo "</tr>";
		echo "</table>";

	}
	function  cambioPTGZ ($array){
		echo "<table>";
		echo "<th>Titulo</th>";
		echo "<th>Director</th>";
		echo "<th>Duracion</th>";
		echo "<th>Pais</th>";
		foreach ($array as $key => $value) {
		echo "<tr>";
		if (in_array('Portugal', $key)) {
			$keySinComas= substr_replace('Potugal', 'Galiza' , $key );
		}else{
			$keySinComas=$key;
		}
		
		echo "<td>".$keySinComas."</td>";
			foreach ($key as $clave => $valor) {
				if (in_array('Portugal', $valor)) {
					$valorSinComas= substr_replace('Portugal', 'Galiza' , $valor );
				}else{
					$keySinComas=$valor;
				}
				
				echo "<td>".$valorSonComas."</td>";
			}
			
		}
		echo "</tr>";
		echo "</table>";

	}

	function cambiarMaiuscula($array){
		foreach ($array as $key => $value) {
			if ($key[1]) {
				strtoupper($key[1]);
				
			}
			if ($key[6]) {
				strtoupper($key[6]);
				
			}
			
		}
	}
	function maiusculas ($array){
		echo "<table>";
		echo "<th>Titulo</th>";
		echo "<th>Director</th>";
		echo "<th>Duracion</th>";
		echo "<th>Pais</th>";
		foreach ($array as $key => $value) {
		echo "<tr>";
		echo "<td>".cambiarMaiuscula($key)."</td>";
			foreach ($key as $clave => $valor) {
				echo "<td>".$valor."</td>";
			}
			
		}
		echo "</tr>";
		echo "</table>";

	}
	function franceFirst ($array){
		
			echo "<table>";
			echo "<th>Titulo</th>";
			echo "<th>Director</th>";
			echo "<th>Duracion</th>";
			echo "<th>Pais</th>";
			foreach ($array as $key => $value) {
			echo "<tr>";
			echo "<td>".$key."</td>";
				foreach ($key as $clave => $valor) {
						$nArray= array_reverse($valor);
						echo "<td>".$nArray."</td>";
					
				}
				
			}
			echo "</tr>";
			echo "</table>";
	
		
	}

	function buscarDur ($array){
		$duracion = $_GET['duracion'];
		echo "<table>";
		echo "<th>Titulo</th>";
		echo "<th>Director</th>";
		echo "<th>Duracion</th>";
		echo "<th>Pais</th>";
		foreach ($array as $key => $value) {
		echo "<tr>";
			foreach ($key as $clave => $valor) {
				if($clave[1]> $duracion){
					echo "<td>".$key."</td>";
					foreach ($key as $clave => $valor) {
					echo "<td>".$valor."</td>";
					}
				}
			}
			}
			
		
		echo "</tr>";
		echo "</table>";
		echo "A curta mais longa é". $key . "con duracion de".$clave[1] ."minutos";  

	}

	if ($_GET['curta']) {
		curta($curtas);
	}

	if ($_GET['listadoCompleto']) {
		listadoCompleto($curtas);
	}

	if ($_GET['poloDirector']) {
		poloDirector($curtas);
	}
	if ($_GET['poloTitulo']) {
		poloTitulo($curtas);
	}
	if ($_GET['decPais']) {
		decPais($curtas);
	}
	if ($_GET['lonxTitulo']) {
		lonxTitulo($curtas);
	}
	if ($_GET['eliminaComas']){
		eliminaComas($curtas);
	}
	if ($_GET['cambioPTGZ']){
		cambioPTGZ($curtas);
	}
	if ($_GET['maiusculas']){
		maiusculas($curtas);
	}
	if ($_GET['franceFirst']){
		franceFirst($curtas);
	}
	if ($_GET['buscarDur']){
		buscarDur($curtas);
	}


	?>  
	</article>
</div>
</body>
</html>
