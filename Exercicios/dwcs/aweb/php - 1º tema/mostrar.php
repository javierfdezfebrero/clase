<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8" />
        <title>Paso por GET</title>
</head>
<body>
<h1> Valores Dos Ex.</h1>

<h1> Folla 2.1</h1>
<?php 

$nome=$_GET['nome']; 
$apelido=$_GET['apelido']; 

echo $nome, "<br>", $apelido;

?>
</body>
</html>