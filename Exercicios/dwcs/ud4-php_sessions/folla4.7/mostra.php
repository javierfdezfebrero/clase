<?php
session_start();

require "constantes.php";
require "functions.php";

if (isset($_SESSION['rol'])) {
    if ($_SESSION['rol'] != 'admin') {
        header('Location:mostrar/mostrarUser.php');
        
    }
    include "xestiona.php";
    
}
