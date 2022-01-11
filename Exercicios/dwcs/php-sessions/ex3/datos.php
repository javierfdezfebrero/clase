<?php
session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
</head>
<body>
 <?php
    $user = $_SESSION['user'];

    echo "<h1>Hola <span>".$user."</span></h1>";?>

    <form action="" method="get">
        <button type="submit">Ordenar por Nombre de empresa</button>
        <button type="submit">Ordenar por empregado asignado</button>
    </form>

    <?php if ($user== 'Javier'){ ?>
        <form action="" method="get">
            <button type="submit">Engadir rexistro</button>
        </form>
       

    <?php }
 ?>
    
</body>
</html>