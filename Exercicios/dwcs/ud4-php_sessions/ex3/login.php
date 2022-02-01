<?php
session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<form action="login.php" method="GET">
    <label for="">Usuario</label><br>
    <input type="text" name="user_input" id="user_input"><br>
    <label for="">Contrasinal</label><br>
    <input type="password" name="pass_input" id="pass_input"><br>
    <button type="submit" name="entrar_input">Entrar</button>
</form>

<?php
    if (isset($_GET['entrar_input'])) {
        $user = $_GET['user_input'];
        $pass = $_GET['pass_input'];
        $valido = false;
        if($user == 'Javier' || $user == 'Ana'){
            if ($pass=='abc123.') {
                $valido=true;
            }
        }

        if($valido){
            $_SESSION['user']=$user;
            echo "<script>alert('Benvido');location.href ='datos.php';</script>";
        }else{
            echo "Error, usuario ou contrasinal incorrecto";
        }
    }

?>
    
</body>
</html>