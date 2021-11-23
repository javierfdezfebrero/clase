<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8" />
        <title>Login_2</title>
</head>
<body>
<h2> Folla 2.2 </h2>

<form method="_GET" action="numeros.php">

        <label>Primer número</label><input type="text" name="primernumero"><br>
        <label>Segundo número</label><input type="text" name="segundonumero"><br>
        <label>Terceiro número</label><input type="text" name="tercernumero"><br>
        <input type="submit" name="boton" value="Entrar">

</form>
<?php
         /*if (isset($_PUT['boton'])){
                include(operacion.php);
} */

$primerNumero=$_GET['primernumero']; 
$segundoNumero=$_GET['segundonumero'];
$tercerNumero=$_GET['tercernumero'];  



if (is_numeric($primerNumero) && is_numeric($segundoNumero) && is_numeric($tercerNumero)) {
        if($primerNumero > $segundoNumero && $primerNumero> $tercerNumero){
                        if ($segundoNumero> $tercerNumero) {
                               echo $primerNumero. ">". $segundoNumero . ">". $tercerNumero;
                        }else{
                             echo $primerNumero. ">". $tercerNumero . ">". $segundoNumero ;     
                        }
                        
        }

        }elseif($segundoNumero > $primerNumero && $segundoNumero > $tercerNumero){
                if ( $primerNumero > $tercerNumero){
                        echo $segundoNumero. ">". $primerNumero . ">". $tercerNumero;
                }else{
                       echo $segundoNumero. ">". $tercerNumero . ">". $primerNumero ; 
                }

        }else{
                if ($primerNumero > $segundoNumero) {
                        echo $tercerNumero. ">". $primerNumero . ">". $segundoNumero;
                }else{
                      echo $tercerNumero. ">". $segundoNumero . ">". $primerNumero;  
                }
        }


}else{
        echo "Error: Non son numeros";
}

?>

</body>
</html>