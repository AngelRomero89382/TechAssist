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
require_once '../config/conn.php';

try {
    session_start();
    
    if (!isset($_SESSION['user_id'])) {
        throw new Exception('No hay sesión activa');
    }

    $database = new Database();
    $conn = $database->getConnection();
    $userId = $_SESSION['user_id'];

    // Obtener datos
    $data = json_decode(file_get_contents('php://input'), true);
    $username = trim($data['username'] ?? '');
    $email = trim($data['email'] ?? '');
    $nivel = intval($data['nivel']);

    // Obtener info del navegador
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $browser = "Desconocido";
    $device = "PC";
    
    if (preg_match('/Firefox/i', $userAgent)) {
        $browser = "Mozilla Firefox";
    } elseif (preg_match('/Chrome/i', $userAgent)) {
        $browser = "Google Chrome";
    } elseif (preg_match('/Safari/i', $userAgent)) {
        $browser = "Safari";
    } elseif (preg_match('/Opera/i', $userAgent)) {
        $browser = "Opera";
    }

    if (preg_match('/mobile/i', $userAgent)) {
        $device = "Móvil";
    } elseif (preg_match('/tablet/i', $userAgent)) {
        $device = "Tablet";
    }

    $conn->begin_transaction();

    try {
        // Verificar duplicados
        $checkQuery = "SELECT id FROM usuarios 
                      WHERE (email = ? OR username = ?) 
                      AND id != ?";
        $checkStmt = $conn->prepare($checkQuery);
        $checkStmt->bind_param("ssi", $email, $username, $userId);
        $checkStmt->execute();
        
        if ($checkStmt->get_result()->num_rows > 0) {
            throw new Exception('Usuario o email ya existe');
        }

        // Actualizar usuario
        $updateQuery = "UPDATE usuarios 
                       SET username = ?, email = ?, nivel = ? 
                       WHERE id = ?";
        $updateStmt = $conn->prepare($updateQuery);
        $updateStmt->bind_param("ssii", $username, $email, $nivel, $userId);
        $updateStmt->execute();

        // Registrar en historial
        $historialQuery = "INSERT INTO historial_usuarios 
            (usuario_id, tipo_cambio, descripcion, estado_sesion, dispositivo, navegador) 
            VALUES (?, 'modificacion', 'Actualización de datos de cuenta', 'Activa', ?, ?)";
        $historialStmt = $conn->prepare($historialQuery);
        $historialStmt->bind_param("iss", $userId, $device, $browser);
        $historialStmt->execute();

        // Actualizar nivel en sesión
        $_SESSION['nivel'] = $nivel;

        $conn->commit();
        
        echo json_encode([
            'error' => false,
            'message' => 'Datos actualizados correctamente'
        ]);

    } catch (Exception $e) {
        $conn->rollback();
        throw $e;
    }

} catch (Exception $e) {
    error_log("Error al actualizar: " . $e->getMessage());
    echo json_encode([
        'error' => true,
        'message' => $e->getMessage()
    ]);
} finally {
    if (isset($database)) {
        $database->close();
    }
}