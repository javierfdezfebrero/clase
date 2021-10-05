<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8" />
        <title>Folla 2.5</title>
</head>
<body>


<h1> Folla 2.4</h1>

<?php 

$piloto=$_GET['piloto'];

$pilotos=array("Hamilton"=>array("Australia"=>2, "Baréin"=>3,"China"=>4, "Azerbaiyán"=>1, "España"=>1,"Mónaco"=>3,"Canadá"=>5,),
   "Vettel"=>array("Australia"=>1, "Baréin"=>1,"China"=>8, "Azerbaiyán"=>4, "España"=>4,"Mónaco"=>2,"Canadá"=>1),
   "Rainkkonen"=>array("Australia"=>3, "Baréin"=>"Abandonou","China"=>3, "Azerbaiyán"=>2, "España"=>"Abandonou","Mónaco"=>4,"Canadá"=>6),
   "Verstappen"=>array("Australia"=>6, "Baréin"=>"Abandonou","China"=>5, "Azerbaiyán"=>"Abandonou", "España"=>3,"Mónaco"=>9,"Canadá"=>3),
   "Bottas"=>array("Australia"=>8, "Baréin"=>2,"China"=>2, "Azerbaiyán"=>14, "España"=>2,"Mónaco"=>5,"Canadá"=>2),
) ;

$tabla =array("Abandonou"=>0, 1=>25, 2=>18, 3=>15, 4=>5, 5=>4, 6=>3, 7=>2, 8=>1,9=>0);

echo "<h2> A clasificación de ". $piloto." é: </h2>";
echo "<table border=1; width=600px;s >";
echo "<th>Gran Premio</th>";
echo "<th>Posición</th>";
echo "<th>Puntos</th>";

$cantidade=0;
$totalpuntos=0;
foreach($pilotos as $key => $value ){
        if($key==$piloto){
        echo "<tr>";
        foreach($value as $campo =>$valor){
                $cantidade+=1;
                echo "<td>". $campo ." </td>";
                echo "<td>". $valor ." </td>";
                foreach ($tabla as $posicion => $puntos) {
                        if ($valor == $posicion){
                                echo "<td>". $puntos ." </td>";
                                $totalpuntos=$totalpuntos+$puntos;

                        }
                       
                }
                 echo "</tr>"; 
                
               
                } 
            
        }


}
 

echo "</table>";
echo "<br>";


echo "Logo de ".$cantidade." premios o piloto ".$piloto." leva ".$totalpuntos." puntos.";




?>

</body>
</html>