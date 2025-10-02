<?php
header("Content-Type: application/json");
include('../login/config.php');

// ✅ Ativar exibição de erros para debug
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($conn->connect_error) {
    echo json_encode(["success" => false, "message" => "Erro na conexão com o banco: " . $conn->connect_error]);
    exit();
}

if (!isset($_GET['data'])) {
    echo json_encode(["success" => false, "message" => "Data não fornecida"]);
    exit();
}

// ✅ A data já deve estar no formato correto (YYYY-MM-DD)
$dataSelecionada = $_GET['data'];

// 🛠 DEBUG: Log para verificar o que foi recebido
error_log("🔍 Data recebida no PHP: " . json_encode($dataSelecionada));

// Garante que a data está correta antes da query
if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $dataSelecionada)) {
    echo json_encode(["success" => false, "message" => "Formato de data inválido", "data_recebida" => $dataSelecionada]);
    exit();
}

// ✅ Busca os horários ocupados no banco
$sql = "SELECT horario, duracao FROM agendamentos WHERE data = ?";
$stmt = $conn->prepare($sql);

// ⚠️ Se a preparação da query falhar
if (!$stmt) {
    echo json_encode(["success" => false, "message" => "Erro ao preparar a consulta: " . $conn->error]);
    exit();
}

$stmt->bind_param("s", $dataSelecionada);
$executado = $stmt->execute();

// ⚠️ Se a execução da query falhar
if (!$executado) {
    echo json_encode(["success" => false, "message" => "Erro ao executar a consulta: " . $stmt->error]);
    exit();
}

$result = $stmt->get_result();
$horariosOcupados = [];

while ($row = $result->fetch_assoc()) {
    $horarioInicio = substr($row['horario'], 0, 5); // Converte HH:MM:SS para HH:MM
    $duracao = intval($row['duracao']); // Duração em minutos

    // 🛠 DEBUG: Verificando os horários ocupados
    error_log("📌 Horário ocupado encontrado: " . $horarioInicio . " | Duração: " . $duracao . " min");

    // Converte para timestamp
    $horaInicioTimestamp = strtotime($horarioInicio);

    // Bloqueia os horários dentro da duração do serviço
    for ($i = 0; $i < $duracao; $i += 30) {
        $horariosOcupados[] = date("H:i", $horaInicioTimestamp + ($i * 60));
    }
}

// Remove duplicatas
$horariosOcupados = array_values(array_unique($horariosOcupados));

echo json_encode(["success" => true, "horarios_ocupados" => $horariosOcupados]);
exit();
?>
