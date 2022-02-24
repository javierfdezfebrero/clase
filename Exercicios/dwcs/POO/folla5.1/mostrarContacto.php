<?php
require 'contacto.php';


$miguel = new contacto('miguel', 'fdez','646548874');

$miguel->setNome('miguel');
$miguel->setApelidos('fdez');
$miguel->asignaTfno('646548874');



$miguel->mostraInformacion();

echo 'esta e a info de '.$miguel->mostraInformacion();