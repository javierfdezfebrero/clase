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

$nome=$_GET['nome']; 
$apelido=$_GET['apelido']; 
$idade=$_GET['idade']; 



if ($idade >= 65){
      echo "Bos días "." ". $nome. " ". $apelido ;  
}elseif ($idade < 18) {
        echo "Bos días crack "." ". $nome. " ". $apelido ;   
}else{
     echo "A traballar "." ". $nome. " ". $apelido ;    
}
?>
</body>
</html>