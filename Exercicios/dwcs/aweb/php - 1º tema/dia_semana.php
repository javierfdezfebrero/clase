<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8" />
        <title>Login</title>
</head>
<body>
<h1> Login</h1>

<h1> Folla 2.2</h1>
<?php 

$dia=$_GET['dia']; 




if ($dia == 1){
      echo "Luns";  
}elseif ($dia == 2) {
        echo "Martes";   
}elseif ($dia == 3) {
        echo "Mercores" ;   
}elseif ($dia == 4) {
        echo "Xoves" ;  
}elseif ($dia == 5) {
        echo "Venres" ;   
}elseif ($dia == 6) {
        echo "Sabado";   
}elseif ($dia == 7) {
        echo "Domingo" ;    
}else{
     echo "Non se corresponde a un día da semana, debe ser entre 1-7";    
}

echo "<br>";
echo "Dias da semana con switch:";
echo "<br>";
switch ($dia){
        case 1:
                echo "Luns";
                break;  
        case 2:
                echo "Martes";
                break;  
        case 3:
                echo "Mercores";
                break;  
        case 4:
                echo "Xoves";
                break;  
        case 5:
                echo "Venres"; 
                break; 
        case 6:
                echo "Sabado"; 
                break; 
        case 7:
                echo "Domingo";
                break; 
        default:
                echo "Non se corresponde a un día da semana, debe ser entre 1-7";  
                break; 
}


?>
</body>
</html>