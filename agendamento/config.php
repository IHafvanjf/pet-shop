<?php
$host = 'localhost';
$user = 'u953537988_root';
$password = '13579012Victor)';
$dbname = 'u953537988_pets';
$port = 3308;

// Criando a conexão com o banco de dados
$conn = new mysqli($host, $user, $password, $dbname, $port);

// Verificando a conexão
if ($conn->connect_error) {
    die("Erro de conexão com o banco de dados: " . $conn->connect_error);
}

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}

?>
