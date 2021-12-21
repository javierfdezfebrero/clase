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
<h2>Estou na páxina 1a!! </h2>
<form action="sesion1b.php" method="get">
<label for="">Nombre</label>
<input type="text" name="nome" id="nome">
<label for="">Contrasinal</label>
<input type="text" name="contrasinal" id="contrasinal">

<button type="submit">Enviar</button>

</form>

<!-- VEMOS AS VARIABLES DE SESSION -->
<?php
if (isset($_SESSION['datos'])){

$datos= $_SESSION['datos'];

echo "O usuario é ".$datos['nome']." e o contrasinal é ".$datos['contrasinal'];
}
?>

</body>
</html>