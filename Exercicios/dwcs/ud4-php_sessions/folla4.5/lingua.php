<?php
if (isset($_GET['enter'])){
if (isset($_GET['lingua'])) {

    $lingua=$_GET['lingua'];

    switch ($lingua) {
        case 'es':
            setcookie('lingua', 'es');
            header('Location: lingua.php');
        break;
        case 'gl':
            setcookie('lingua', 'gl');
            header('Location: lingua.php');
            break;
        case 'pt':
            setcookie('lingua', 'pt');
            header('Location: lingua.php');
            break;
    
        default:
             setcookie('lingua', 'gl');
             header('Location: lingua.php');
            break;
    }
}
}

?>

<!DOCTYPE html>
<html lang="gl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linguas</title>
</head>
<body>

<form action="lingua.php" method="get">
    <label for=""><?php 
    if (isset($_COOKIE['lingua'])) {

        $lingua=$_COOKIE['lingua'];
    
        switch ($lingua) {
            case 'es':
                echo "Seleciona el idioma";
            break;
            case 'gl':
                echo "Seleciona a tua lingua";
                break;
            case 'pt':
                echo "Escolha a sua lingua";
                break;
        
            default:
                echo "Seleciona a tua lingua";
                break;
        }
    }else{
        echo "Seleciona a tua lingua";
    }
    ?></label>
    <select name="lingua" id="">
        <option value="gl">Galego</option>
        <option value="es">Español</option>
        <option value="pt">Portugues</option>
    </select>
    <button type="submit" name="enter">Selecionar</button>
</form>
    
</body>
</html>