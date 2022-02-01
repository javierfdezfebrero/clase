<?php




if (isset($_GET['lingua'])) {

    $lingua=$_GET['lingua'];

    switch ($lingua) {
        case 'es':
            echo "<h1></h1>";
        break;
        case 'gl':
            echo "<h1></h1>";
            break;
        case 'pt':
            echo "<h1></h1>";
            break;
    
        default:
            echo "<h1></h1>";
            break;
    }
}