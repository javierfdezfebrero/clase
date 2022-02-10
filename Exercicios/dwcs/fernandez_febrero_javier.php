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
	include 'pinturas.php';
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
			foreach ($value as $clave => $valor) {
				echo "<td>".$valor."</td>";
			}
			
		}
		echo "</tr>";
		echo "</table>";

	}
	function poloDirector ($array){
		asort($array);
		echo "<table>";
		echo "<th>Titulo</th>";
		echo "<th>Director</th>";
		echo "<th>Duracion</th>";
		echo "<th>Pais</th>";
		foreach ($array as $key => $value) {
		echo "<tr>";
		echo "<td>".$key."</td>";
			foreach ($value as $clave => $valor) {
				echo "<td>".$valor."</td>";
			}
			
		}
		echo "</tr>";
		echo "</table>";

	}
	function poloTitulo ($array){
		ksort($array);
		echo "<table>";
		echo "<th>Titulo</th>";
		echo "<th>Director</th>";
		echo "<th>Duracion</th>";
		echo "<th>Pais</th>";
		foreach ($array as $key => $value) {
		echo "<tr>";
		echo "<td>".$key."</td>";
			foreach ($value as $clave => $valor) {
				echo "<td>".$valor."</td>";
			}
			
		}
		echo "</tr>";
		echo "</table>";

	}



	function decPais ($array){
		$a= comparaCaracteresASC($array, 1);
		print_r($a);
		echo "<table>";
		echo "<th>Titulo</th>";
		echo "<th>Director</th>";
		echo "<th>Duracion</th>";
		echo "<th>Pais</th>";
		foreach ($a as $key => $value) {
		echo "<tr>";
		echo "<td>".$key."</td>";
		
			foreach ($value as $clave => $valor) {
				echo "<td>".$valor."</td>";
			}
			
		}
		echo "</tr>";
		echo "</table>";

	}

	function comparaTamaño($a,$b)
{
     if(strlen($a)>strlen($b)){
        return -1;
     }else{
        return 1;
     }
}

	function lonxTitulo ($array){
		uksort($array, 'comparaTamaño');
		print_r($array);
		echo "<table>";
		echo "<th>Titulo</th>";
		echo "<th>Director</th>";
		echo "<th>Duracion</th>";
		echo "<th>Pais</th>";
		foreach ($array as $key => $value) {
		echo "<tr>";
		echo "<td>".$key."</td>";
			foreach ($value as $clave => $valor) {
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
		$keySinComas= str_replace(' ', ',' , $key );
		echo "<td>".$keySinComas."</td>";
			foreach ($value as $clave => $valor) {
				$valorSinComas= str_replace(' ', ',' , $valor );
				echo "<td>".$valorSinComas."</td>";
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
		
		
		echo "<td>".$key."</td>";
			foreach ($value as $clave => $valor) {
				if (in_array('marruecos', $value)) {
					$valorSinComas= str_replace('marruecos', 'Galiza' , $valor );
				}else{
					$valorSinComas=$valor;
				}
				
				echo "<td>".$valorSinComas."</td>";
			}
			
		}
		echo "</tr>";
		echo "</table>";

	}


	function maiusculas ($array){
		echo "<table>";
		echo "<th>Titulo</th>";
		echo "<th>Director</th>";
		echo "<th>Duracion</th>";
		echo "<th>Pais</th>";
		foreach ($array as $key => $value) {
		echo "<tr>";
		
		
		$key[1]= strtoupper($key[1]);
		$key[2]= strtoupper($key[2]);


		echo "<td>".$key."</td>";
			foreach ($value as $clave => $valor) {
				echo "<td>".$valor."</td>";
			}
			
		}
		echo "</tr>";
		echo "</table>";

	}
	function franceFirst ($array){
			$a= francia($array,1);
			echo "<table>";
			echo "<th>Titulo</th>";
			echo "<th>Director</th>";
			echo "<th>Duracion</th>";
			echo "<th>Pais</th>";
			foreach ($a as $key => $value) {
			echo "<tr>";
			echo "<td>".$key."</td>";
				foreach ($value as $clave => $valor) {
				
						echo "<td>".$valor."</td>";
					
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
		
				if($value[2] > $duracion){
				echo "<tr>";
				echo "<td>".$key."</td>";
				foreach ($value as $clave => $valor) {
					echo "<td>".$valor."</td>";

				}
					$nombre= $key;
					$dur=$value[2];

					
		
				
					
				
			}
		
			}
			echo "</tr>";
			echo "</table>";
		echo "A curta mais longa é". $nombre . "con duracion de".$dur ."minutos";  
		
		

	}

	function comparaCaracteresASC($a,$b)
{
	foreach ($a as $key => $value) {
		$array[$key]=$value[$b];
	}
	asort($array);
	foreach ($array as $k => $v) {
		$ordenado[$k]=$a[$k];
	}
	return $ordenado;
}
function francia($a,$b)
{
	foreach ($a as $key => $value) {
		if($value[$b]=='francia'){
			$array[$key]=$value[$b];
		}
	}
	foreach ($a as $key => $value) {
		if($value[$b]!='francia'){
			$array[$key]=$value[$b];
		}
	}
	
	foreach ($array as $k => $v) {
		$ordenado[$k]=$a[$k];
	}
	return $ordenado;
}

	if (isset($_GET['curta'])) {
		curta($pinturas);
	}

	if (isset($_GET['listadoCompleto'])) {
		listadoCompleto($pinturas);
	}

	if (isset($_GET['poloDirector'])) {
		poloDirector($pinturas);
	}
	if (isset($_GET['poloTitulo'])) {
		poloTitulo($pinturas);
	}
	if (isset($_GET['decPais'])) {
		decPais($pinturas);
	}
	if (isset($_GET['lonxTitulo'])) {
		lonxTitulo($pinturas);
	}
	if (isset($_GET['eliminaComas'])){
		eliminaComas($pinturas);
	}
	if (isset($_GET['cambioPTGZ'])){
		cambioPTGZ($pinturas);
	}
	if (isset($_GET['maiusculas'])){
		maiusculas($pinturas);
	}
	if (isset($_GET['franceFirst'])){
		franceFirst($pinturas);
	}
	if (isset($_GET['buscarDur'])){
		buscarDur($pinturas);
	}


	?>  
	</article>
</div>
</body>
</html>
