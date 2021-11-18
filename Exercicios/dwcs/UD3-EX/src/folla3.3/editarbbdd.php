<?php

if ( isset($_POST["subir"] )) {
    $conexion=mysqli_connect("db","root","root", "musica");
    if ($conexion)
    {
        mysqli_set_charset($conexion,"utf8");
        $imaxen = $_FILES['meuArquivo']['name']; 
        $img_type = $_FILES['meuArquivo']['type'];
        $patron = '/.[png ||jpg ||jpeg ||gif ]/i';
        $nomeImaxe = preg_replace($patron, '', $imaxen);
        $tituloDisco=$_POST['titulo'];
        $autorDisco=$_POST['autor'];
        $anoDisco=$_POST['ano'];
        $duracionDisco=$_POST['duracion'];
      
	
		$sql = "INSERT INTO tema(Titulo, Autor, Ano, Duracion, Imaxe) VALUES ('$tituloDisco','$autorDisco', '$anoDisco', '$duracionDisco', '$nomeImaxe')";
        echo $sql;

		$resultado = mysqli_query($conexion, $sql);
        if ($resultado) {
			echo "Engadiuse con exito";
		}
       
    }
    else{
    echo "Fallou a conexión coa base de datos";
    }
    mysqli_close($conexion);
}


if(isset($_POST["subir"])){
    $tmp_name = $_FILES['meuArquivo']['tmp_name'];
    //SE O FICHEIRO ESTÁ SUBIDO POR POST:
    if (is_uploaded_file($tmp_name))
    {
    $img_file = $_FILES['meuArquivo']['name']; //O NOME
    $img_type = $_FILES['meuArquivo']['type']; // A EXTENSIÓN
    // SE É UNHA IMAXE:
    if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") ||
    strpos($img_type, "jpg")) || strpos($img_type, "png")))
    {
    //COMPROBAMOS QUE PODEMOS ESCRIBIR NA CARPETA IMAXES E TODO FOI BEN:
   if (move_uploaded_file($tmp_name, "imaxes/". $img_file))
    {
    echo "arquivo subido con éxito"; } }
    }}