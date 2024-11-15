<?php
$host = 'localhost';  // O endereço do seu banco de dados
$dbname = 'teste';  // O nome do banco de dados
$user = 'postgres';  // O usuário do banco de dados
$password = 'postgres';  // A senha do usuário

try {
    $conn = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?>