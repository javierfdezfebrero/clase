<?php   
setcookie('nome_user', 'Pedro');
setcookie('lingua', 'galego');
setcookie('tema', 'oscuro');

if (isset($_GET['enter'])){
    $nomeCookie= $_GET['nomeCookie'];
    $valorCookie= $_GET['valorCookie'];
    setcookie($nomeCookie,$valorCookie);


}
if (isset($_GET['borrarCookies'])) {
    if (isset($_GET['nomeCookie'])){
        $borrar=$_GET['nomeCookie'];
        setcookie($borrar,'adios', time( )-200); 
        header('Location:cookies.php');
    }else{
        echo "Debes introducir o nome da cookie";
    }
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
<?php
if (isset($_COOKIE['nome_user'])) {
   echo "o nome do usuario é ".$_COOKIE['nome_user']." <br>";
}

if (isset($_COOKIE['lingua'])) {
    echo "A lingua do usuario é ".$_COOKIE['lingua']." <br>";
 }
 if (isset($_COOKIE['tema'])) {
    echo "o tema do usuario é ".$_COOKIE['tema']." <br>";
 }

 foreach ($_COOKIE as $key => $value) {
     echo "Nome Cookie: ". $key. " Valor da Cookie: ". $value." <br>" ;
 }

 
 ?>




<form action="cookies.php" method="get">
    <label for="">Nome da Cookie</label>
    <input type="text" name="nomeCookie" id="">
    <label for="">valor da Cookie</label>
    <input type="text" name="valorCookie" id="">
    
    
    
    <button type="submit" name="enter">Gardar</button>
    <button type="submit" name="borrarCookies">Borrar Cookies</button>
</form>






    
</body>
</html>