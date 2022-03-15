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

if (isset($_GET['nomeFamilia'])) {
    $familia = $_GET['nomeFamilia'];
    $arrayFamilia = $familia->recuperarFamiliasPorNome($familia);
} else {
    $arrayFamilia = $familia->recuperarProductos();
}
echo $blade
    ->view()
    ->make('vistaFamilias', compact('titulo', 'encabezado', 'arrayFamilia'))
    ->render();
