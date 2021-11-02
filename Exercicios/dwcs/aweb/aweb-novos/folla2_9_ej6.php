<?php



$datos= array(
    1=>['orixen'=> 'Madrid', 'destino'=>'Segovia', 'Distacia'=>90201],
    2=>['orixen'=> 'Madrid', 'destino'=>'A Coruña', 'Distacia'=>596887],
    3=>['orixen'=> 'Barcelona', 'destino'=>'Cadiz', 'Distacia'=>1152669],
    4=>['orixen'=> 'Bilbao', 'destino'=>'Valencia', 'Distacia'=>622233],
    5=>['orixen'=> 'Sevilla', 'destino'=>'Santander', 'Distacia'=>832067],
    6=>['orixen'=> 'Oviedo', 'destino'=>'Badajoz', 'Distacia'=>682429],
    );

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
function comparaCaracteresASC($a,$b)
{
    if(strcasecmp($a, $b)){
        return 1;
     }elseif (strcasecmp($b, $a)) {
        return -1;
     }
     else{
         return 0;
     }
}
function comparaCaracteresDES($a,$b)
{
    
    if(strcasecmp($b, $a)){
        return 1;
     }elseif (strcasecmp($a, $b)) {
        return -1;
     }
     else{
         return 0;
     }
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





function imprimir($array){
    echo" <table>";
    echo "<tr>";
    echo "<th>Orixen</th>";
    echo "<th>Destino</th>";
    echo "<th>Distancia</th>";
    echo " </tr>";
    foreach ($array as $key) {
       
    foreach ($key as $dato => $valor) {
   echo " <td> $valor</td>";

    }
    
    echo " </tr>";
}
}



if ($_GET['alforixen']) {
    uksort($datos['orixen'], 'comparaCaracteresASC');
    imprimir($datos);
}elseif($_GET['alfdestino']){
    uksort($datos, 'comparaCaracteresASC');
    imprimir($datos);
}elseif($_GET['alfdescorixen']){
    uksort($datos, 'comparaCaracteresDES');
    imprimir($datos);
}else{
    uksort($puntos, 'comparaTamaño');
    print_r($puntos);
}


?>