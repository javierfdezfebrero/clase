<?php
namespace Clases;
class Portada
{
private $enlace;
private $nombre;

public function __construct()
{
    $this->enlace;
    $this->nombre;
}
function recuperarEnlaces()
{
    $array= array ( array ('Productos','./productos.php',),
                    array ('Familias','./familias.php',)
                );
return  $array;
}



}


