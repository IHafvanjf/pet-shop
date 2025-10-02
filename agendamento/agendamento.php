<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', 'error_log.txt');

session_start();
include 'config.php';

header('Content-Type: application/json'); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Pegando dados do formulário
        // Recebendo o JSON enviado pelo JavaScript
        $json = file_get_contents('php://input');
        $dados = json_decode($json, true); // Decodifica o JSON para array associativo

        if (!$dados) {
            echo json_encode(['status' => 'error', 'message' => 'Dados inválidos.']);
            exit;
        }

        $nome = $dados['nome'] ?? null;
        $telefone = $dados['telefone'] ?? null;
        $email = $dados['email'] ?? null;
        $servicos = json_encode($dados['servicos']); // Lista de serviços (JSON)
        $preco_total = $dados['preco_total'] ?? null;
        $data = isset($dados['data']) ? DateTime::createFromFormat('d/m/Y', $dados['data'])->format('Y-m-d') : null;
        $horario = $dados['horario'] ?? null;
        $duracao = $dados['duracao'] ?? null;
        $observacao = $dados['observacao'] ?? null;
        $bairro = $dados['bairro'] ?? null;
        $rua = $dados['rua'] ?? null;
        $complemento = $dados['complemento'] ?? null;
        $transporte = $dados['transporte'] ?? null;


        // Inserir no banco de dados
        $sql = "INSERT INTO agendamentos 
                (nome, telefone, email, servicos, preco_total, data, horario, duracao, observacao, bairro, rua, complemento, transporte) 
                VALUES 
                (:nome, :telefone, :email, :servicos, :preco_total, :data, :horario, :duracao, :observacao, :bairro, :rua, :complemento, :transporte)";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':nome' => $nome,
            ':telefone' => $telefone,
            ':email' => $email,
            ':servicos' => $servicos,
            ':preco_total' => $preco_total,
            ':data' => $data,
            ':horario' => $horario,
            ':duracao' => $duracao,
            ':observacao' => $observacao,
            ':bairro' => $bairro,
            ':rua' => $rua,
            ':complemento' => $complemento,
            ':transporte' => $transporte
        ]);

        echo json_encode(['status' => 'success', 'message' => 'Agendamento realizado com sucesso!']);
    } catch (PDOException $e) {
        echo json_encode(['status' => 'error', 'message' => 'Erro ao agendar: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Método inválido.']);
}
?>
