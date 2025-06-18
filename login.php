<!-- Em programação tem um monte de maneira de conectar com base de dados
 isso se chama API

API significa Application Programming Interface (em português: Interface de Programação de Aplicações).
Uma API é um meio de comunicação entre dois sistemas. 
Ela permite que um software "converse" com outro, pedindo ou enviando informações.

 Mas com o mysqli usamos isso aqui
 $conn = new mysqli("localhost", "usuario", "senha", "nome_do_banco");
  -->


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

if ($senha === $row["senha"]) {
    $_SESSION["usuario"] = $nome; // Ou poderia ser o ID do usuário se quiser
    echo "Login realizado com sucesso!";
    // Redirecionar para outra página
    header("Location: dashboard.php");
    exit();
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