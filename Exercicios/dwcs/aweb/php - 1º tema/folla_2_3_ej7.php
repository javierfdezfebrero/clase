<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8" />
        <title>Ejercicio 7 folla 2.3</title>
</head>
<body>
<h1> Valores Dos Ex. Numero5</h1>

<h1> Folla 2.3</h1>
<?php 

$comunidades= array(
                "Andalucía"=>"593,6",
                "Aragón"=>"600,3",
                "Asturias"=>"489,7",
                "Baleares"=>"489,7",
                "Canarias"=>"573,2",
                "Cantabria"=>"551,5",
                "Castilla e León "=>"645,3",
                "Castilla la Mancha "=>"555,8",
                "Cataluña"=>"568,3",
                "Comunidade Valenciana"=>"561,1",
                "Extremadura"=>"584,3",
                "Galicia"=>"600,1",
);


echo "<table border=1; >";
echo "<th>Comunidade</th>";
echo "<th>Escolarización por 1000
habitantes</th>";
echo "<th> %escolarizació</th>";
foreach($comunidades as $key => $value ){
                echo "<tr> <td>". $key ." </td>";
                echo "<td>". $value ." </td>"; 
                $var=($value*100)/1000; 
                echo "<td> ". $var ."</td>"; 
}
        
echo "</tr>";
echo "</table>";







?>
</body>
</html>