<?php

function menorAmaior($a,$b)
{
if($a<$b)
return -1;
elseif ($a>$b)
return 1;
else
return 0;
}
function maiorAMenor($a,$b)
{
if($a<$b)
return 1;
elseif ($a>$b)
return -1;
else
return 0;
}
function comparaCaracteres($a,$b)
{
    return strcasecmp($a, $b);
}

function comparaTamaño($a,$b)
{
     if(strlen($a)>strlen($b)){
        return -1;
     }else{
        return 1;
     }
}

/*
$datos=array('f'=>4, 'g'=>8, 'a'=>-1, 'b'=>-10);

uasort($datos, 'menorAmaior');


foreach ($datos as $key => $value) {
    echo  $key ."=>".$value."<br>";
}


echo "<br>";




uksort($datos, 'comparaCaracteres');
uasort($datos, 'maiorAMenor');

foreach ($datos as $key => $value) {
    echo  $key ."=>".$value."<br>";
}
*/

$puntos = array("Ana"=>123, "Belén"=>14,"Felipe"=>3,"Moncho"=>245,"Artur"=>10);

if ($_GET['masMenos']) {
    uasort($puntos, 'maiorAMenor');
    print_r($puntos);
}elseif($_GET['menosMas']){
    uasort($puntos, 'menorAMaior');
    print_r($puntos);
}elseif($_GET['alf']){
    uksort($puntos, 'comparaCaracteres');
    print_r($puntos);
}else{
    uksort($puntos, 'comparaTamaño');
    print_r($puntos);
}

?>