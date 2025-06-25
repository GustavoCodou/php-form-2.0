<?php

include 'db.php';

$error ='';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);
}

    if($password !== $confirm_password){
        echo "Password do not match";
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

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" ><br><br>

    <label for="password">Senha:</label>
    <input type="password" id="password" name="password" ><br><br>

    <label for="confirm_password">Confirmar senha:</label>
    <input type="password" id="confirm_password" name="confirm_password"><br><br>

    <button type="submit">Enviar</button>
</form>



</body>
</html>