<?php
session_start();
include '../database/database.php'; // Inclui a conexão com o banco de dados

$login = $_POST['login'];
$senha = $_POST['senha'];

// Prepara e executa a consulta para verificar o login e a senha
$stmt = $conn->prepare("SELECT * FROM usuarios WHERE login = :login AND senha = :senha");
$stmt->bindParam(':login', $login);
$stmt->bindParam(':senha', $senha);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    $_SESSION['loggedin'] = true; // Inicia sessão de login
    header("Location: ../pages/configPerguntas/cadastro_perguntas.php"); // Redireciona para a página de perguntas
} else {
    echo "Login ou senha inválidos!";
}
?>
