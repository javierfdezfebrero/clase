<?php
require '../vendor/autoload.php';
use Clases\Portada;
use Clases\Familia;
use Philo\Blade\Blade;
$views = '../views';
$cache = '../cache';
$blade = new Blade($views, $cache);
$titulo = 'Portada';
$encabezado = 'Elixe que facer';
$label = 'Buscar por Producto';
$portada= new Portada;
$array= $portada->recuperarEnlaces();

 if (!empty($_POST['familia'])) {
    $buscar = $_POST['familia'];
    header("location: ./familias.php?nomeFamilia=$buscar");

 }else{
     if(isset($_POST['Familias'])){
        header("location: ./familias.php");
     }
 }

if (!empty($_POST['nomeProducto'])) {
    $buscar =$_POST['nomeProducto'];
    header("location: ./productos.php?nomeProducto=$buscar");

 }else{
     if(isset($_POST['Productos'])){
        header("location: ./productos.php");
     }
 }



 $familias = new Familia;
 $familiasArray = $familias->recuperarProductos();

echo $blade
 ->view()
 ->make('vistaPortada', compact('titulo', 'encabezado', 'label', 'array', 'familiasArray'))
 ->render();



