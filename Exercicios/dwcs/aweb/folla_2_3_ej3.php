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




$soldos=array(
        "javier"=>"1000",
        "miguel"=>"2000",
        "ana"=>"3000",
        "paco"=>"4000",
        "gonzalo"=>"5000",
);


echo  "<br>";

echo "<table>";
echo "<th>Alumno</th>";
echo "<th>Soldo</th>";
foreach($soldos as $key => $value ){
        echo "<tr> <td> ". $key ." </td>";
        echo "<td> ". $value ."</td>";
}

echo  "<br>";
$max=$soldos["javier"];
$min=$soldos["javier"];
foreach($soldos as $key => $value ){
        if($soldos[$key]>$max){
        $max=$soldos[$key];
       }
       if($soldos[$key]<$min){
        $min=$soldos[$key];
       }
       
}


echo "<tr><td>maximo</td>";
echo "<td>". $max ."</td>";
echo "</tr>";
echo "<tr><td>minimo</td>";
echo "<td>". $min ."</td>";


echo "</tr>";
echo "</table>";
?>
</body>
</html>