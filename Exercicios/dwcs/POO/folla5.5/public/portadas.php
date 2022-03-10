<?php
require '../vendor/autoload.php';
use Clases\Portada;
use Philo\Blade\Blade;
$views = '../views';
$cache = '../cache';
$blade = new Blade($views, $cache);
$titulo = 'Portada';
$encabezado = 'Elixe que facer';
$label = 'Buscar por Producto';
$portada= new Portada;
$array= $portada->recuperarEnlaces();
echo $blade
 ->view()
 ->make('vistaPortada', compact('titulo', 'encabezado', 'label','array'))
 ->render();

