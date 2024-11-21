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
        // Verificar si la cuenta ya fue eliminada
        $checkQuery = "SELECT estado_sesion FROM usuarios WHERE id = ?";
        $checkStmt = $conn->prepare($checkQuery);
        $checkStmt->bind_param("i", $user_id);
        $checkStmt->execute();
        $result = $checkStmt->get_result();
        $user = $result->fetch_assoc();

        if ($user['estado_sesion'] !== 'Eliminada') {
            // Actualizar usuario
            $updateQuery = "UPDATE usuarios SET 
                username = NULL,
                email = NULL,
                estado_sesion = 'Eliminada'
                WHERE id = ?";
            $updateStmt = $conn->prepare($updateQuery);
            $updateStmt->bind_param("i", $user_id);
            $updateStmt->execute();

            // Desactivar tokens
            $tokenQuery = "UPDATE tokens_sesion SET activo = FALSE WHERE usuario_id = ?";
            $tokenStmt = $conn->prepare($tokenQuery);
            $tokenStmt->bind_param("i", $user_id);
            $tokenStmt->execute();

            // Solo registrar si no está eliminada
            $historialQuery = "INSERT INTO historial_usuarios 
                (usuario_id, tipo_cambio, descripcion, estado_sesion, dispositivo, navegador) 
                VALUES (?, 'eliminacion', 'Usuario eliminó su cuenta', 'Eliminada', ?, ?)";
            $historialStmt = $conn->prepare($historialQuery);
            $historialStmt->bind_param("iss", $user_id, $device, $browser);
            $historialStmt->execute();
        }

        // Limpiar cookies
        if (isset($_COOKIE['remember_token'])) {
            setcookie('remember_token', '', time() - 3600, '/');
            setcookie('user_id', '', time() - 3600, '/');
        }

        $conn->commit();
        
        session_unset();
        session_destroy();

        echo json_encode([
            'error' => false,
            'message' => 'Cuenta eliminada'
        ]);

    } catch (Exception $e) {
        $conn->rollback();
        throw $e;
    }

} catch (Exception $e) {
    error_log("Error al eliminar: " . $e->getMessage());
    echo json_encode([
        'error' => true,
        'message' => 'Error al eliminar la cuenta'
    ]);
} finally {
    if (isset($database)) {
        $database->close();
    }
}