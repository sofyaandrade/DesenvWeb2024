<?php
session_start();

if (!isset($_COOKIE['usuario']) || !isset($_COOKIE['inicio_sessao'])) {
    echo "<script>alert('Dados da sessão foram perdidos. Por favor, faça login novamente.');</script>";
    header("Location: login.php");
    exit();
}

$current_time = date("Y-m-d H:i:s");
$_SESSION['last_request_time'] = $current_time;

$usuario = $_COOKIE['usuario'];
$inicio_sessao = $_COOKIE['inicio_sessao'];

if (empty($usuario) || empty($inicio_sessao)) {
    echo "<script>alert('Dados da sessão incompletos');</script>";
    header("Location: login.php");
    exit();
}

$session_start_time = strtotime($inicio_sessao); 
$current_time_unix = strtotime($current_time);
$session_duration = $current_time_unix - $session_start_time;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Sessão do Usuário</title>
</head>
<body>
    <h2>Informações da Sessão</h2>
    <p><strong>Login:</strong> <?php echo htmlspecialchars($usuario); ?></p>
    <p><strong>Data/Hora de Início da Sessão:</strong> <?php echo $inicio_sessao; ?></p>
    <p><strong>Data/Hora da Última Requisição:</strong> <?php echo $_SESSION['last_request_time']; ?></p>
    <p><strong>Tempo de Sessão (segundos):</strong> <?php echo $session_duration; ?></p>

    <br>
    <a href="login.php">Voltar ao Login</a>
</body>
</html>

