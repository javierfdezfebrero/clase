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

$usuario=$_GET['usuario']; 
$contrasinal=$_GET['contrasinal']; 

switch ($usuario) {
        case 'Javier':
                echo "Usuario "." ", $usuario, " ". " esta permitido";
                break;
        case 'javier':
                echo "Usuario "." ", $usuario," ". " esta permitido";
                break;
        case 'javi':
                echo "Usuario "." ", $usuario, " ". " esta permitido";
                break;
        case 'Javi':
                echo "Usuario "." ", $usuario, " ". " esta permitido";
                break;
        default:
               echo "Usuario"." ", $usuario, " ". " non esta permitido";
                break;
}





$usuarios= array('Javier', 'javi', 'Javi', 'javier');

foreach ($usuarios as $key) {
if (strcmp ($usuario , $key ) == 0) { 
      $resultado= 1;
      break;

}

}

if ($resultado==1){
      echo "Usuario "." ", $usuario, " ". " esta permitido";  
}else{
     echo "Usuario"." ", $usuario, " ". " non esta permitido";   
}
?>
</body>
</html>