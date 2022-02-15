<?php
if (isset($_SESSION['rol'])) {
    if ($_SESSION['rol'] != 'admin') {
        header('Location:mostrar/mostrarUser.php');
        
    }
    include "xestiona.php";
    
}
