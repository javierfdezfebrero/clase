<?php
require '../vendor/autoload.php';
use Clases\Producto;
use Philo\Blade\Blade;
$views = '../views';
$cache = '../cache';
$blade = new Blade($views, $cache);
$titulo = 'Productos';
$encabezado = 'Listado de Productos';
$producto = new Producto();
$arrayProductos = $producto->recuperarProductos();
echo $blade
 ->view()
 ->make('vistaProductos', compact('titulo', 'encabezado', 'arrayProductos'))
 ->render();