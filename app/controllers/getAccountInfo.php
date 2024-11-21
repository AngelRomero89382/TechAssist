<?php
header('Content-Type: application/json');
require_once '../config/conn.php';

try {
    session_start();
    if (!isset($_SESSION['user_id'])) {
        throw new Exception('No hay sesión activa');
    }

    $database = new Database();
    $conn = $database->getConnection();
    $userId = $_SESSION['user_id'];

    $query = "SELECT username, email, nivel, fecha_registro, ultima_sesion 
              FROM usuarios 
              WHERE id = ?";
              
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        throw new Exception('Usuario no encontrado');
    }

    echo json_encode($result->fetch_assoc());

} catch (Exception $e) {
    echo json_encode([
        'error' => true,
        'message' => $e->getMessage()
    ]);
} finally {
    if (isset($database)) {
        $database->close();
    }
}