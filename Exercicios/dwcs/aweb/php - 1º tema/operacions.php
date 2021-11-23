<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8" />
        <title>Login_2</title>
</head>
<body>
<h2> Folla 2.2 </h2>

<form method="_GET" action="operacions.php">

        <label>Primer numero</label><input type="text" name="primernumero"><br>
        <label>Segundo numero</label><input type="text" name="segundonumero">
        <label>Operacion</label>
        <select name="operacion">
          <option value="suma">Suma</option>
          <option value="resta" selected>Resta</option>
          <option value="multiplicacion">Multiplicacion</option>
        </select>
        <input type="submit" name="boton" value="Entrar">

</form>
<?php
         /*if (isset($_PUT['boton'])){
                include(operacion.php);
} */

$primerNumero=$_GET['primernumero']; 
$segundoNumero=$_GET['segundonumero']; 
$operacion=$_GET['operacion']; 


if (is_numeric($primerNumero) && is_numeric($segundoNumero)) {
        
switch ($operacion){
        case 'suma':
                $resultado= $primerNumero+$segundoNumero;
                echo "A ". $operacion." de: ". $primerNumero. " + ". $segundoNumero." = ". $resultado;
                break;
        case 'resta':
                $resultado= $primerNumero-$segundoNumero;
                echo "A ". $operacion." de: ". $primerNumero. " - ". $segundoNumero." = ". $resultado;
                break;
        case 'multiplicacion':
                $resultado= $primerNumero*$segundoNumero;
                echo "A ". $operacion." de: ". $primerNumero. " * ". $segundoNumero." = ". $resultado;
                break;
        default:
                echo "operacion non valida";
                break;

}
}else{
        echo "Error: Non son numeros";
}

?>

</body>
</html>