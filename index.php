
<!-- 
 
Temos que colocar um include, para termos as coisas de outra pagina
sem copiar o codigo

include 'db.php'

tem o require também que diz se o arquivo der pau, a pagina falha

  -->

<?php

include 'db.php'

session_start();

if (!isset($_SESSION["usuario"])) {
   
    header("Location: login.php");
    exit();
}

echo "Bem-vindo, " . $_SESSION["usuario"];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <li>
        <a href="register.php">Registro</a>
    </li>
    Tem que ver como faz para ver se o usuario já está logado
    <li>
        <a href="login.html">Login</a>
    </li>
    
</body>
</html>