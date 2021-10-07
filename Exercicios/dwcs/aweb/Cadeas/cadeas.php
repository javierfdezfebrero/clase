<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8" />
        <title>Folla 2.7</title>
</head>
<body>


<h1> Funcións de tratamento de cadeas de caracteres</h1>

<?php 


$texto=$_GET['texto'];
$sel=$_GET['funcion'];

$cadea="Hoxe estamos nun día de outubro chove, chove!!";
$cadea2="oxe estamos nun día de outubro chove, chove!!";
$funcions=array("strlen"=>"strlen","substr"=>"substr","strstr"=>"strstr","strchr"=>"strchr","strrchr"=>"strrchr","strpos"=>"strpos","str_replace"=>"str_replace","substr_replace"=>"substr_replace","trim"=>"trim","ltrim"=>"ltrim","rtrim"=>"rtrim","strtoupper"=>"strtoupper","strtolower"=>"strtolower","explode"=>"explode","ucfirst"=>"ucfirst","ucwords"=>"ucwords","strcmp"=>"strcmp","urlencode"=>"urlencode","urldecode"=>"urldecode","stripSlashes"=>"stripSlashes","nl2br"=>"nl2br");
$explicacion=array("strlen"=>"Devolve o número de caracteres
da cadea","substr"=>"Devolve unha
subcadea, empezando polo comezo e de lonxitude lonxitude","strstr"=>"Devolve a cadea desde a primeira
aparición da cadea busca","strchr"=>"Idéntica á anterior, pero a primeira
aparición da letra","strrchr"=>"Devolve a cadea desde a última
aparición do carácter ","strpos"=>"Devolve   a   posición   numérica   da
primeira aparición","str_replace"=>"Substitúe as aparicións da cadea buscada na cadea orixinal pola substituída","substr_replace"=>"substitúe a cadea pola cadea","trim"=>"Elimina os espazos á esquerda e dereita da
cadea","ltrim"=>"Elimina os espazos á esquerda da cadea","rtrim"=>"elimina os espazos á dereita da cadea","strtoupper"=>"pasa a maiúsculas todos os caracteres dun
texto","strtolower"=>"Pasa a minúsculas todos os caracteres dun
texto","explode"=>"Devolve un
array que contén en cada posición do mesmo as partes da cadea separadas polo
separador","ucfirst"=>"A maiúsculas o primeiro carácter da cadea","ucwords"=>"A maiúsculas cada palabra","strcmp"=>"Devolve un enteiro. Devolve < 0 se str1
é vai antes alfabeticamente que str2;  >0 se str2 vai antes alfabeticamente que str1, 0
se son iguais","urlencode"=>"Devolve   unha   cadea   codificada   para   pasar
variables a unha páxina php","urldecode"=>"Decodifica calquera cifrado %## dunha cadea
dada (suponse que foi previamente codificada para ser pasada a outra páxina
php)");

function comprobarfuncion($par, $cadea,$cadea2=null){
    if($par=="strlen"){
        echo "<td>".strlen($cadea). " </td>";
    }
    if($par=="substr"){
        echo "<td>".substr($cadea, 2 , 3). " </td>";
    }
    if($par=="strstr"){
        echo "<td>".strstr($cadea, 'í'). " </td>";
    }
    if($par=="strchr"){
        echo "<td>".strchr($cadea, 'a'). " </td>";
    }
    if($par=="strrchr"){
        echo "<td>".strrchr($cadea, 'a'). " </td>";
    }
    if($par=="strpos"){
        echo "<td>".strpos($cadea, 'a'). " </td>";
    }
    if($par=="str_replace"){
        echo "<td>".str_replace('a', 'e',$cadea). " </td>";
    }
    if($par=="substr_replace"){
        echo "<td>".substr_replace($cadea,'a', 5). " </td>";
    }
    if($par=="trim"){
        echo "<td>".trim($cadea). " </td>";
    }
    if($par=="ltrim"){
        echo "<td>".ltrim($cadea). " </td>";
    }
    if($par=="rtrim"){
        echo "<td>".rtrim($cadea). " </td>";
    }
    if($par=="strtoupper"){
        echo "<td>".strtoupper($cadea). " </td>";
    }
    if($par=="strtolower"){
        echo "<td>".rtrim($cadea). " </td>";
    }

    if($par=="explode"){
        echo "<td>".print_r(explode("/", $cadea)). " </td>";
    }
    if($par=="ucfirst"){
        echo "<td>".ucfirst($cadea). " </td>";
    }
    if($par=="ucwords"){
        echo "<td>".ucwords($cadea). " </td>";
    }
    if($par=="strcmp"){
        echo "<td>".strcmp($cadea, $cadea2). " </td>";
    }
    if($par=="urlencode"){
        echo "<td>".urlencode($cadea). " </td>";
    }
    if($par=="urldecode"){
        echo "<td>".urldecode($cadea). " </td>";
    }
    if($par=="stripSlashes"){
        echo "<td>".stripSlashes($cadea). " </td>";
    }
    if($par== "nl2br"){
        echo nl2br($cadea);
    }
}

function functsel($par, $funcions){
    foreach ($funcions as $nome => $funcion){
        if($nome==$par){
            echo $funcion;
        }
    }
}

function functapli($par, $text, $funcions){
    foreach ($funcions as $nome => $funcion){
        if($nome==$par){
            comprobarfuncion($nome,$text);
        }
    }
}
/*
// Ejercicio 1 de folla 2.7
echo "<h2>Como funcionan as cadeas de caracteres </h2>";
echo "<table border=1; >";
echo "<th>Nome da funcion</th>";
echo "<th>Explicacion</th>";
echo "<th>Exemplo</th>";


foreach ($funcions as $nome => $funcion){
    echo "<tr>";
    echo "<td>". $nome." </td>";   
    foreach ($explicacion as $funct => $explic){
        if($nome==$funct){
            echo "<td>". $explic." </td>";

        }
    }
   comprobarfuncion($funcion, $cadea,$cadea2);

    echo "</tr>";  
}
                         
    
echo "</table>";
echo "<br>";

echo "Cadea orixinal: ".$cadea;
echo "<br>";
echo "Segunda cadea: ".$cadea2;
*/


echo "cadea introducida na caixa de texto: ".$texto;
echo "<br>";
echo "Función aplicada: ";
functsel($sel, $funcions);
echo "<br>";
echo "Cadea despois de serlle aplicada a función: ";
functapli($sel, $texto, $funcions);



?>

</body>
</html>