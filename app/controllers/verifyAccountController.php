<?php
/**
 * TechAssist - Sistema de Aprendizaje Interactivo
 * Copyright (c) 2024 TechAssist
 * Autor: Angel Jesús Romero Pérez
 * 
 * Este archivo es parte de TechAssist y está protegido por derechos de autor.
 * Uso no autorizado de este código está prohibido.
 * 
 * @package TechAssist
 * @author Angel Jesús Romero Pérez
 * @copyright 2024 TechAssist
 */
header('Content-Type: application/json');
require_once __DIR__ . '/../config/conn.php';

try {
    session_start();
    
    if (!isset($_SESSION['user_id'])) {
        throw new Exception('No hay sesión activa');
    }

    $database = new Database();
    $conn = $database->getConnection();
    
    // Obtener datos del request
    $data = json_decode(file_get_contents('php://input'), true);
    $email = $data['email'] ?? '';
    $username = $data['username'] ?? '';
    $user_id = $_SESSION['user_id'];

    // Info del navegador
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $browser = "Desconocido";
    $device = "PC";
    
    if (preg_match('/Firefox/i', $user_agent)) {
        $browser = "Mozilla Firefox";
    } elseif (preg_match('/Chrome/i', $user_agent)) {
        $browser = "Google Chrome";
    } elseif (preg_match('/Safari/i', $user_agent)) {
        $browser = "Safari";
    } elseif (preg_match('/Opera/i', $user_agent)) {
        $browser = "Opera";
    }

    if (preg_match('/mobile/i', $user_agent)) {
        $device = "Móvil";
    } elseif (preg_match('/tablet/i', $user_agent)) {
        $device = "Tablet";
    }

    $conn->begin_transaction();

    try {
        // Verificar credenciales
        $query = "SELECT id FROM usuarios 
                 WHERE id = ? AND email = ? AND username = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("iss", $user_id, $email, $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 0) {
            // Registrar intento fallido
            $historialQuery = "INSERT INTO historial_usuarios 
                (usuario_id, tipo_cambio, descripcion, estado_sesion, dispositivo, navegador) 
                VALUES (?, 'intento-eliminacion', 'Intento de eliminación de cuenta fallido', 'Activa', ?, ?)";
            $historialStmt = $conn->prepare($historialQuery);
            $historialStmt->bind_param("iss", $user_id, $device, $browser);
            $historialStmt->execute();
            
            $conn->commit();
            throw new Exception('Verificación fallida');
        }

        $conn->commit();
        
        echo json_encode([
            'error' => false,
            'message' => 'Verificación exitosa'
        ]);

    } catch (Exception $e) {
        $conn->rollback();
        throw $e;
    }

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