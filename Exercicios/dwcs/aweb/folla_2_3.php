<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8" />
        <title>Numero5</title>
</head>
<body>
<h1> </h1>

<h1> Folla 2.3</h1>
<?php 




$soldos=[
        "javier"=>"1000",
        "miguel"=>"2000",
        "ana"=>"3000",
        "paco"=>"4000",
        "gonzalo"=>"5000",
];


echo  "<br>";

echo "<table>";
echo "<th>Alumno</th>";
echo "<th>Soldo</th>";
foreach($soldos as $key => $value ){
        echo "<tr> <td> ". $key ." </td>";
        echo "<td> ". $value ."</td>";
}

echo  "<br>";
$suma=0;
foreach($soldos as $key => $value ){
        $suma=$suma+$value;
       
}

$media=$suma/count($soldos);
echo "<tr><td>Media</td>";
echo "<td>". $media ."</td>";



echo "</tr>";
echo "</table>";
?>
</body>
</html>