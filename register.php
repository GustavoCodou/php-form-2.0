<?php

include 'db.php';

$error ='';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

    echo "Senha: " . $_POST["senha"] . "<br>";
    echo "Email: " . $_POST["email"];
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="post">
    <label for="username">Nome de usuário:</label>
    <input type="text" id="username" name="username" placeholder="Seu nome" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Seu email" required>

    <label for="password">Senha:</label>
    <input type="password" id="password" name="password" placeholder="Sua senha" required>

    <label for="confirm_password">Confirmar senha:</label>
    <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirme sua senha" required>

    <button type="submit">Enviar</button>
</form>



</body>
</html>