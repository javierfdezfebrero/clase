<?php
require '../vendor/autoload.php';
use Clases\Familia;
use Philo\Blade\Blade;
$views = '../views';
$cache = '../cache';
$blade = new Blade($views, $cache);
$titulo = 'Familias';
$encabezado = 'Listado de Familiar';
$familia = new Familia();
$arrayFamilia = $familia->recuperarProductos();
echo $blade
 ->view()
 ->make('vistaFamilias', compact('titulo', 'encabezado', 'arrayFamilia'))
 ->render();