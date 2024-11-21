<?php
session_start();
require_once '../config/conn.php';

$userId = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
$userLevel = 0; // Valor predeterminado si no se encuentra el nivel del usuario

if ($userId !== null) {
    $database = new Database();
    $conn = $database->getConnection();

    $query = "SELECT nivel FROM usuarios WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        $userLevel = $user['nivel'];
    }

    $database->close();
}

header('Content-Type: application/json');
echo json_encode(['userLevel' => $userLevel]);
?>