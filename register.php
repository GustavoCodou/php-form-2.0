<?php

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "Nome: " . $_POST["nome"] . "<br>";
    echo "Senha: " . $_POST["senha"] . "<br>";
    echo "Email: " . $_POST["email"];
}

$stmt = $conn->prepare("INSERT INTO usuarios (nome, email) VALUES (?, ?)");
$stmt->bind_param("ss", $nome, $email); // "ss" = duas strings

// 4. Executar a query
if ($stmt->execute()) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir: " . $stmt->error;
}

// 5. Fechar conexões
$stmt->close();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method ="post">
        <input type="text" name="nome" placeholder="Seu nome">
        <input type="text" name="password" placeholder="Sua senha">
        <input type="email" name="email" placeholder="Seu email">
    <button type="submit">Enviar</button>
    </form>


</body>
</html>