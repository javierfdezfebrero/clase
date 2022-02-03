<?php
session_start();
if (!isset($_SESSION['marcadecontrol'])) {
    session_regenerate_id(true); //borrarmos o ficheiro da ID da sesión anterior
    $_SESSION['marcadecontrol']= true;
    echo "hola";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
</head>
<body>
<br/>
<!-- DEFINIMOS UNHA VARIABLE -->
<?php
$_SESSION['usuario']="Javier";

?>
<h2>Estou na páxina 1a!! </h2>
<a href="sesion1b.php">Ir a sesion1b </a>
</body>
</html>