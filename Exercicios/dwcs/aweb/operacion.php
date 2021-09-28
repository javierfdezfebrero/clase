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

$primerNumero=$_GET['primernumero']; 
$segundoNumero=$_GET['segundonumero']; 
$operacion=$_GET['operacion']; 



switch ($operacion){
        case 'suma':
                $resultado= $primerNumero+$segundoNumero;
                echo "A ". $operacion." de:". $primerNumero. " + ". $segundoNumero." = ". $resultado;
                break;
        case 'resta':
                $resultado= $primerNumero-$segundoNumero;
                echo "A ". $operacion." de:". $primerNumero. " - ". $segundoNumero." = ". $resultado;
                break;
        case 'multiplicacion':
                $resultado= $primerNumero*$segundoNumero;
                echo "A ". $operacion." de:". $primerNumero. " * ". $segundoNumero." = ". $resultado;
                break;
        default:
                echo "operacion non valida";
                break;

}

?>
</body>
</html>