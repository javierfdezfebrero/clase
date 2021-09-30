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
$array[2] = $_GET['n3'];
$array[3]= $_GET['n4'];
$array[4] = $_GET['n5'];



$suma=0;
$media=0;
$count=1;
foreach($array as $key => $value ){
        $suma=$suma+$value;
        echo "Suma dentro de foreach: ".$suma;
        echo  "<br>";
        echo "Media dentro do foreach: ".$suma/$count;
        echo  "<br>";
        $media = $suma/$count;
        $count++;
}
        




echo "Suma: ".$suma;
echo  "<br>";
echo "Media: ".$media;
echo  "<br>";
echo "Cantidade de numeros: ".$count;
echo  "<br>";



?>
</body>
</html>