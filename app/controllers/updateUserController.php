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

    $data = json_decode(file_get_contents('php://input'), true);
    $type = $data['type'] ?? '';
    $value = $data['value'] ?? '';
    $user_id = $_SESSION['user_id'];

    $database = new Database();
    $conn = $database->getConnection();
    
    $conn->begin_transaction();

    try {
        if ($type === 'username' || $type === 'email') {
            $checkQuery = "SELECT id FROM usuarios WHERE $type = ? AND id != ?";
            $checkStmt = $conn->prepare($checkQuery);
            $checkStmt->bind_param("si", $value, $user_id);
            $checkStmt->execute();
            
            if ($checkStmt->get_result()->num_rows > 0) {
                throw new Exception("Este $type ya está en uso");
            }
        }

        if ($type === 'level') {
            $value = match($value) {
                'basic' => 1,
                'medium' => 2,
                'advanced' => 3,
                default => throw new Exception('Nivel inválido')
            };
        }

        $query = match($type) {
            'username' => "UPDATE usuarios SET username = ? WHERE id = ?",
            'email' => "UPDATE usuarios SET email = ? WHERE id = ?",
            'level' => "UPDATE usuarios SET nivel = ? WHERE id = ?",
            default => throw new Exception('Tipo de modificación inválido')
        };

        $stmt = $conn->prepare($query);
        
        if ($type === 'level') {
            $stmt->bind_param("ii", $value, $user_id);
        } else {
            $stmt->bind_param("si", $value, $user_id);
        }
        
        if (!$stmt->execute()) {
            throw new Exception('Error al actualizar datos');
        }

        $userAgent = $_SERVER['HTTP_USER_AGENT'];
        $device = strpos($userAgent, 'Mobile') ? 'Móvil' : 'PC';
        $browser = 'Desconocido';

        if (strpos($userAgent, 'Firefox')) {
            $browser = 'Mozilla Firefox';
        } elseif (strpos($userAgent, 'Chrome')) {
            $browser = 'Google Chrome';
        } elseif (strpos($userAgent, 'Safari')) {
            $browser = 'Safari';
        } elseif (strpos($userAgent, 'Opera')) {
            $browser = 'Opera';
        }

        $description = match($type) {
            'username' => 'Cambio de nombre de usuario',
            'email' => 'Cambio de correo electrónico',
            'level' => 'Cambio de nivel de conocimiento'
        };

        $historialQuery = "INSERT INTO historial_usuarios 
            (usuario_id, tipo_cambio, descripcion, dispositivo, navegador) 
            VALUES (?, 'modificacion', ?, ?, ?)";
        $historialStmt = $conn->prepare($historialQuery);
        $historialStmt->bind_param("isss", $user_id, $description, $device, $browser);
        $historialStmt->execute();

        if ($type === 'email' || $type === 'username') {
            $tokenQuery = "UPDATE tokens_sesion SET activo = FALSE WHERE usuario_id = ?";
            $tokenStmt = $conn->prepare($tokenQuery);
            $tokenStmt->bind_param("i", $user_id);
            $tokenStmt->execute();

            if (isset($_COOKIE['remember_token'])) {
                setcookie('remember_token', '', time() - 3600, '/');
                setcookie('user_id', '', time() - 3600, '/');
            }
        }

        if ($type === 'level') {
            $_SESSION['nivel'] = $value;
        }

        $conn->commit();

        echo json_encode([
            'error' => false,
            'message' => 'Datos actualizados correctamente',
            'reload' => ($type === 'email' || $type === 'username')
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