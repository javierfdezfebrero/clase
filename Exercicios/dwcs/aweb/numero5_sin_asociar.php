<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8" />
        <title>Numero5</title>
</head>
<body>
<h1> Valores Dos Ex. Numero5</h1>

<h1> Folla 2.3</h1>
<?php 

$array[0] = $_GET['n1'];
$array[1] = $_GET['n2'];
$array[] = $_GET['n3'];
$array[]= $_GET['n4'];
$array[] = $_GET['n5'];

/*
$array=[
        'n1'=>$n1,
        'n2'=>$n2,
        'n3'=>$n3,
        'n4'=>$n4,
        'n5'=>$n5,
];
*/
echo "Sin asociar";
echo  "<br>";
foreach($array as $key => $value )
        echo $key. "  =  ". $value . "<br>";

$suma=0;

for ($i=0; $i<=count($array); $i++){
        $suma=$suma+$array[$i];

}echo  "<br>";
echo $suma;
echo  "<br>";

$producto=1;

for ($i=0; $i<count($array); $i++){
        $producto=$producto*$array[$i];

}
echo $producto;
echo  "<br>";

$max=$array[0];
$min=$array[0];

for ($i=0; $i<count($array); $i++){
       if($array[$i]>$max){
        $max=$array[$i];
       }
       if($array[$i]<$min){
        $min=$array[$i];
       }
}
echo $max." ". $min;
echo  "<br>";


?>
</body>
</html>