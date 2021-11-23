<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8" />
        <title>Paso por GET</title>

</head>

<body>
<h1> Valores Dos Ex.</h1>

<h1> Folla 2.1</h1>

<h1> Ex. 1</h1>

<?php 
echo "<link rel=stylesheet href=estilos/style.css>";

for($i=0; $i < 10; $i++)
        echo "<h2> Oa crack </h2>";
 

?>
<h1> Ex. 2</h1>

<?php 
echo "<link rel=stylesheet href=estilos/style.css>";

for($i=0; $i <= 50; $i++)
        echo "<h2> Numero $i </h2>";
 

?>
<h1> Ex. 3</h1>

<?php 
echo "<link rel=stylesheet href=estilos/style.css>";

for($i=0; $i <= 50; $i++)
        if($i%2 != 0)
                echo "<h2> Numero Impar $i </h2>";
 

?>

<h1> Ex. 4</h1>

<?php 
echo "<link rel=stylesheet href=estilos/style.css>";
echo "<table>";
echo "<th>Par</th>";
echo "<th>Impar</th>";
for($i=0; $i <= 50; $i++)
        if($i%2 == 0)
                echo "<tr> <td> $i </td>";
        else
                echo "<td>  $i </td>";
echo "</tr>";
echo "</table>";

?>



<h1> Ex. 5</h1>
<?php 

  
  $multiplicarHasta = 11;
  $numero = 7;
  
   echo "<table><tr>";
   echo "<th>Tabla del ".$numero."</th></tr>";
   for ($j=1; $j < $multiplicarHasta; $j++) { 
    echo "<tr><td>".$numero. " x ".$j." = "."</td><td>".$numero * $j."</td></tr>";
   }
   echo "</table>";
   echo "<br>";
   
   ?>

   
<h1> Ex. 6</h1>
<?php 

$nome=$_GET['nome']; 
$apelido=$_GET['apelido']; 

echo "Nome: ". $nome, " "."Apelido: ". $apelido;
  

   ?>

   <h1> Ex. 7</h1>
<?php 

$nome=$_GET['nome_apelidos']; 
$mail=$_GET['mail'];
$musico=$_GET['musico'];  
$comico=$_GET['comico']; 
$actor=$_GET['actor'];

/*if (isset($_GET['maiscuarenta']))
        $anos= $_GET['maiscuarenta'];
else
        $anos= $_GET['vinteacuarenta'];
*/
$anos=$_GET['anos'];

$atopaches= $_GET['atopaches'];
$comentarios= $_GET['comentarios'];


echo "<table border=1>";
echo "<th>Datos</th>";
echo "<th>Valor</th>";
echo "<tr><td>Nome e apelidos </td> <td>", $nome," </td></tr>";
echo "<tr><td>E-mail </td> <td>", $mail ,"</td></tr>";
echo "<tr><td>Profesión </td> <td>", $musico, $comico, $actor," </td></tr>";
echo "<tr><td>Anos </td> <td>", $anos, "</td></tr>";
echo "<tr><td>Como nos atopou</td> <td>", $atopaches, "</td></tr>";
echo "<tr><td>Comantarios </td> <td>", $comentarios, "</td></tr>";
?>

<br>
<h1> Ex. 8</h1>
<?php 


$nome=$_POST['nome_apelidos']; 
$mail=$_POST['mail'];
$musico=$_POST['musico'];  
$comico=$_POST['comico']; 
$actor=$_POST['actor'];

/*if (isset($_POST['maiscuarenta']))
        $anos= $_POST['maiscuarenta'];
else
        $anos= $_POST['vinteacuarenta'];
*/
$anos=$_POST['anos'];

$atopaches= $_POST['atopaches'];
$comentarios= $_POST['comentarios'];


echo "<table border=1>";
echo "<th>Datos con Post</th>";
echo "<th>Valor con Post</th>";
echo "<tr><td>Nome e apelidos </td> <td>", $nome," </td></tr>";
echo "<tr><td>E-mail </td> <td>", $mail ,"</td></tr>";
echo "<tr><td>Profesión </td> <td>", $musico, $comico, $actor," </td></tr>";
echo "<tr><td>Anos </td> <td>", $anos, "</td></tr>";
echo "<tr><td>Como nos atopou</td> <td>", $atopaches, "</td></tr>";
echo "<tr><td>Comantarios </td> <td>", $comentarios, "</td></tr>";
   ?>
</body>
</html>