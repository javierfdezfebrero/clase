<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        td,
        th {
            border: solid 1px black;
        }

        table {
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <?php
    function mostraTaboaCliente($array)
    {
        echo "<table><tr><th>Nome</th><th>Apelidos</th><th>email</th></tr>";
        foreach ($array as $value) {
            echo "<td>{$value['nome']}</td><td>{$value['apelidos']}</td><td>{$value['email']}</
td></tr>";
        }
        echo "</table>";
    }
    /* O RESTO DAS FUNCIÓNS PARA MOSTRAR NA PÁXINA */
    //...
    
    function mostraMensaxeBorrar(){
        echo "Cliente borrado";
    }
    ?>
</body>

</html>