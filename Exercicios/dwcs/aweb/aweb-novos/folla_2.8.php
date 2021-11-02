<?php


$puntos = array("Ana"=>123, "Belén"=>14,"Felipe"=>3,"Moncho"=>245,"Artur"=>10);


sort($puntos);

echo "Este e o array ordenado: <br>";

foreach  ($puntos as $clave) 
    echo $clave."<br>" ;


echo "<br>";

// sort( ) , rsort( ), asort( ), arsort( ),
// ksort( ), krsort( ), shuffle( ), array_reverse( ).

$cRsort = $puntos;

rsort($cRsort);

echo "Este e o array ordenado con rsort: <br>";
foreach  ($cRsort as $key => $clave) 
    echo $key . " => ". $clave."<br>" ;


echo "<br>";


$cAsort = $puntos;

asort($cAsort);

echo "Este e o array ordenado asort: <br>";

foreach  ($cAsort as $key => $clave) 
echo $key . " => ". $clave."<br>" ;


echo "<br>";



$cArsort = $puntos;

arsort($cArsort);

echo "Este e o array ordenado arsort: <br>";

foreach  ($cArsort as $key => $clave) 
echo $key . " => ". $clave."<br>" ;


echo "<br>";

$cKsort = $puntos;

ksort($cKsort);

echo "Este e o array ordenado ksort: <br>";

foreach  ($cKsort as $key => $clave) 
echo $key . " => ". $clave."<br>" ;


echo "<br>";

$cKrsort = $puntos;

krsort($cKrsort);

echo "Este e o array ordenado krsort: <br>";

foreach  ($cKrsort as $key => $clave) 
echo $key . " => ". $clave."<br>" ;


echo "<br>";

$cShuffle = $puntos;

shuffle($cShuffle);

echo "Este e o array ordenado Shuffle: <br>";

foreach  ($cShuffle as $key => $clave) 
echo $key . " => ". $clave."<br>" ;


echo "<br>";

$cAReverse = array_reverse($puntos);
$cAReverse_p = array_reverse($puntos, true);

print_r($cAReverse);
echo "<br>";
print_r($cAReverse_p);


?>