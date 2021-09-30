<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8" />
        <title>Folla 2.4</title>
</head>
<body>


<h1> Folla 2.4</h1>

<?php 

$sel=$_GET['elemento'];

$elementos =array("Alcalinos"=> array("Li"=>3, "Na"=>11,"K"=>19, "Rb"=>37, "Cs"=>55,"Fr"=>87),
   "Alcalino-terreos"=> array("Be"=>4, "Mg"=>12,"Ca"=>20, "Sr"=>38, "Ba"=>56,"Ra"=>88),
   "Terreos"=> array("B"=>5, "Al"=>13,"Ga"=>31, "In"=>49, "TL"=>81),
) ;

echo "<h2> O grupo ". $sel." está formado polos seguintes elementos: </h2>";
echo "<table border=1; >";
echo "<th>Nombre</th>";
echo "<th>Nº atómico</th>";

$cantidade=0;
foreach($elementos as $key => $value ){
        if($key=$sel){
        echo "<tr>";
        foreach($value as $campo =>$valor){
                $cantidade=count($value);
                echo "<td>". $valor ;
                echo " </td>";   
                
                
               
                } 
       echo "</tr>";      
        }


}
 

echo "</table>";
echo "<br>";



echo "Número total: ". $cantidade;


?>

</body>
</html>