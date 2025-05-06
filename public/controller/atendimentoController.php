<?php
require_once __DIR__ . '/../config/config.php';

$roomsSQL = "SELECT * FROM QUARTO WHERE deletedat IS NULL";
$roomsExecute = $pdo->prepare($roomsSQL);
$roomsExecute->execute();
$rooms = $roomsExecute->fetchAll(PDO::FETCH_ASSOC);

$data = json_decode(file_get_contents("php://input"), true);

if (
    isset($data['nome']) && 
    isset($data['nascimento']) && 
    isset($data['fiador']) && 
    isset($data['contato'])
) {
    $nome = $data['nome'];
    $nascimento = $data['nascimento'];
    $fiador = $data['fiador'];
    $contato = $data['contato'];

    $sql = "INSERT INTO hospedagem (nome, nascimento, fiador, contato) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $nome, $nascimento, $fiador, $contato);

    if ($stmt->execute()) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "error" => $stmt->error]);
    }
} else {
    echo json_encode(["success" => false, "error" => "Dados incompletos"]);
}

?>