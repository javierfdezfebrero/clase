<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8" />
        <title>Funcions</title>
</head>
<body>
<?php

function suma($n1, $n2,$n3=null,$n4=null){
        return $n1+$n2+$n3+$n4;

};

function multiplicacion($n1, $n2,$n3=1,$n4=1){
        return $n1*$n2*$n3*$n4;

};

function maior($n1, $n2,$n3,$n4)){
        $maior=$n1;
        if($n2>$maior){
                $maior=$n2;
                if($n3>$maior){
                        $maior=$n3;
                        if($2>$maior){
                                $maior=$n2;

        }


};
function menor(){

};
function media(){

};
function factorial(){

};
function maior2(){

};
function mediana(){

};
function desc(){

};
function asc(){

};



if(isset($_GET['suma2'])){
$num1=$_GET['n1'];
$num2=$_GET['n2'];

echo suma($num1, $num2);

}
if(isset($_GET['suma3'])){
$num1=$_GET['n1'];
$num2=$_GET['n2'];
$num3=$_GET['n3'];

echo suma($num1, $num2,$num3);

}
if(isset($_GET['suma4'])){
$num1=$_GET['n1'];
$num2=$_GET['n2'];
$num3=$_GET['n3'];
$num4=$_GET['n4'];

echo suma($num1, $num2,$num3, $num4);

}

if(isset($_GET['mul2'])){
$num1=$_GET['n1'];
$num2=$_GET['n2'];

echo multiplicacion($num1, $num2);

}
if(isset($_GET['mul3'])){
$num1=$_GET['n1'];
$num2=$_GET['n2'];
$num3=$_GET['n3'];

echo multiplicacion($num1, $num2,$num3);

}
if(isset($_GET['mul4'])){
$num1=$_GET['n1'];
$num2=$_GET['n2'];
$num3=$_GET['n3'];
$num4=$_GET['n4'];

echo multiplicacion($num1, $num2,$num3, $num4);

}

?>
</body>
</html>