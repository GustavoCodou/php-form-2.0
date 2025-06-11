<?php
session_start();
include 'db.php';

$conn = new mysqli("localhost", "usuario", "senha", "nome_do_banco");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    // Preparar a consulta para evitar SQL Injection
    $stmt = $conn->prepare("SELECT senha FROM usuarios WHERE nome = ?");
    $stmt->bind_param("s", $nome);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows === 1) {
        // Usuário encontrado
        $row = $resultado->fetch_assoc();

        if ($senha === $row["senha"]) {
            echo "Login realizado com sucesso!";
            // Aqui você pode iniciar a sessão, redirecionar, etc.
        } else {
            echo "Senha incorreta!";
        }
    } else {
        echo "Usuário não encontrado!";
    }

    $stmt->close();
    $conn->close();
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