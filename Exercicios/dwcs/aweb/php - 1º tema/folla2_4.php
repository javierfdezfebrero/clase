<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8" />
        <title>Folla 2.4</title>
</head>
<body>


<h1> Folla 2.4</h1>

<?php 

$cidade[0]= array(
                "Madrid", 
                "Segovia",
                 90201,
);

$cidade[1]= array(
                "Madrid", 
               "A Coruña",
                 596887,
);
$cidade[2]= array(
                "Barcelona", 
                "Cadiz",
                 1152669,
);
$cidade[3]= array(
               "Bilbao", 
                "Valencia",
                 622233,
);
$cidade[4]= array(
                "Sevilla", 
                "Santander",
                 832067,
);
$cidade[5]= array(
                "Oviedo", 
                "Badajoz",
                 682429,
);



echo "<table border=1; >";
echo "<th>Orixen</th>";
echo "<th>Destino</th>";
echo "<th> Distancia</th>";



foreach($cidade as $key => $value ){
        echo "<tr>";
        foreach($value as $campo =>$valor){
                echo "<td>". $valor ;
                echo " </td>";   
                
                
               
                } 
       echo "</tr>";      



}
 

echo "</table>";
echo "<br>";

$maislongo=$cidade[0][2];
foreach($cidade as $key => $value ){
        for($i=0 ; $i<count($value); $i++){
                if($value[2]>$maislongo){
                      $maislongo=  $value[2];
                }
        
}
}


echo "O viaxe mais longo é ". $maislongo;


?>

</body>
</html>