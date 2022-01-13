<?php
session_start();

$diccionario= array();

if(isset($_SESSION['diccionario'])){
    $diccionario=$_SESSION['diccionario'];
    echo "<table><tr><th>ingles</th><th>Galego</th><th></th></tr>";
    foreach ($diccionario as $key => $value) {
    echo '<tr><td>'.$key.' </td><td>'.$value.'</td><td><a href="diccionario.php?eliminarElemento=&palabraEliminar='.$key.'"><button type="submit">Eliminar</button></a></td></tr>';
    
    }
    echo "</table>";     
    echo '<form action="diccionario.php" method="GET"><label>Palabra en Ingles</label><input name="palabraIngles"><br><label>Palabra en Galego</label><input name="palabraGalego"><button type="submit" name="engadirElemento">Engadir</button></form>';
}

if (isset($_GET['engadirElemento'])) {
    $palabraIngles=$_GET['palabraIngles'];
    $palabraGalego=$_GET['palabraGalego'];

    $diccionario[$palabraIngles]=$palabraGalego;

    echo "Engadimos nova palabra";
}
if (isset($_GET['eliminarElemento'])) {
    $palabraEliminar=$_GET['palabraEliminar'];
    unset($diccionario[$palabraEliminar]);
    echo "Eliminamos a palabra";
}

$_SESSION['diccionario'] =$diccionario;

?>
