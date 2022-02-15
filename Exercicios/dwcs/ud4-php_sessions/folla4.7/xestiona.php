<?php
session_start();

require "../constantes.php";
require "../functions.php";



$idioma=$_COOKIE['idioma'];

$saludo= saludarIdioma($idioma);

if (empty($_SESSION['rol']) ) {
    header("location: ../login.php");
}


if (isset($_SESSION['rol']) && $_SESSION['rol'] =="admin") {

    echo '<form action="xestiona.php" method="get">
        <button type="submit" name="alta"> Alta</button>
        <button type="submit"  name="baixa">Baixa</button>
        <button type="submit"  name="modificar">Modificar</button>
 
    </form>';

}

?>