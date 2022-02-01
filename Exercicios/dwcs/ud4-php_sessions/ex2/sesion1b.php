<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
</head>
<body>
<br/>
<h2>Estou na páxina 1b!! </h2>
<br>
<?php
/* PODEMOS ACCEDER Á VARIABLE */
echo "O usuario é ".$_GET['nome']." e ao contrasinal ".$_GET['contrasinal'];

$datos=array("nome"=>$_GET['nome'], "contrasinal"=>$_GET['contrasinal']);

$_SESSION['datos']=$datos;
?>

<a href="sesion1a.php">Ir a sesion1a</a>
<br>
</body>
</html>