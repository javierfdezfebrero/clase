<?php
session_start(); /*MANTEMOS A SESIÓN INICIADA */
$_SESSION = array(); /* ELIMINAMOS TODAS AS VARIABLES */
// E FINALMENTE DESTRUIMOS A SESIÓN:
session_destroy();
header('Location: login.php');
?>


