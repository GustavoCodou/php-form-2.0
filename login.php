<?php

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "Nome: " . $_POST["nome"] . "<br>";
    echo "Senha: " . $_POST["senha"] . "<br>";
    echo "Email: " . $_POST["email"];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de login</title>
</head>
<body>
    
</body>
</html>