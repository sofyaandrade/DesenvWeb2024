<?php
// Inclui a conexão ao banco de dados
include '../database/database.php';

// Obtem o ID da última pergunta via GET
$ultimo_id = isset($_GET['ultimo_id']) ? (int)$_GET['ultimo_id'] : 0;

// Consulta para buscar a próxima pergunta
$stmt = $conn->prepare("SELECT id, texto FROM perguntas WHERE id > :ultimo_id ORDER BY id LIMIT 1");
$stmt->bindParam(':ultimo_id', $ultimo_id, PDO::PARAM_INT);
$stmt->execute();

$pergunta = $stmt->fetch(PDO::FETCH_ASSOC);

// Verifica se encontrou alguma pergunta
if ($pergunta) {
    // Retorna a pergunta como JSON
    echo json_encode($pergunta);
} else {
    // Se não houver mais perguntas, retorna um JSON vazio
    echo json_encode(null);
}

// Certifique-se de que a conexão é encerrada corretamente
$conn = null;
?>
