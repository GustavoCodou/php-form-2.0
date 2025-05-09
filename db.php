<?php
$host = "localhost";     // ou IP do servidor
$usuario = "root";       // padrão no XAMPP
$senha = "";             // vazio no XAMPP
$banco = "meu_banco";

// Criar conexão
$conn = new mysqli($host, $usuario, $senha, $banco);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

echo "Conexão bem-sucedida!";
?>