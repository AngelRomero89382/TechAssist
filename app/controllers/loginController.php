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

function getBrowserInfo() {
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

    return ['browser' => $browser, 'device' => $device];
}

try {
    $database = new Database();
    $conn = $database->getConnection();

    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $remember = isset($_POST['remember']) ? $_POST['remember'] === 'true' : false;
    
    if (empty($email) || empty($username)) {
        echo json_encode([
            'error' => true,
            'message' => 'Por favor complete todos los campos'
        ]);
        exit;
    }

    $conn->begin_transaction();

    try {
        // Verificar credenciales
        $query = "SELECT id, nivel FROM usuarios WHERE email = ? AND username = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ss", $email, $username);
        $stmt->execute();
        $result = $stmt->get_result();
        

        // Obtener información del navegador y dispositivo
        $browserInfo = getBrowserInfo();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();
            $user_id = $user['id'];
            
            // Actualizar estado del usuario
            $updateQuery = "UPDATE usuarios SET 
                ultima_sesion = NOW(),
                estado_sesion = 'Activa'
                WHERE id = ?";
            $updateStmt = $conn->prepare($updateQuery);
            $updateStmt->bind_param("i", $user_id);
            $updateStmt->execute();

            // Si remember es true, crear y guardar token
            if ($remember) {
                $token = bin2hex(random_bytes(32));
                
                // Guardar token en la base de datos
                $tokenQuery = "INSERT INTO tokens_sesion (usuario_id, token, activo) VALUES (?, ?, TRUE)";
                $tokenStmt = $conn->prepare($tokenQuery);
                $tokenStmt->bind_param("is", $user_id, $token);
                $tokenStmt->execute();

                // Establecer cookies
                $fiveYears = time() + (5 * 365 * 24 * 60 * 60);
                setcookie('remember_token', $token, $fiveYears, '/');
                setcookie('user_id', $user_id, $fiveYears, '/');

                // Registrar en historial la creación de la cookie
                $cookieDesc = "Cookie de sesión permanente creada";
                $historialQuery = "INSERT INTO historial_usuarios 
                    (usuario_id, tipo_cambio, descripcion, estado_sesion, dispositivo, navegador) 
                    VALUES (?, 'login', ?, 'Activa', ?, ?)";
                $historialStmt = $conn->prepare($historialQuery);
                $historialStmt->bind_param("isss", 
                    $user_id, 
                    $cookieDesc,
                    $browserInfo['device'],
                    $browserInfo['browser']
                );
                $historialStmt->execute();
            }

            // Registrar el login en historial
            $loginDesc = "Inicio de sesion - Exitoso";
            $historialQuery = "INSERT INTO historial_usuarios 
                (usuario_id, tipo_cambio, descripcion, estado_sesion, dispositivo, navegador) 
                VALUES (?, 'login', ?, 'Activa', ?, ?)";
            $historialStmt = $conn->prepare($historialQuery);
            $historialStmt->bind_param("isss", 
                $user_id, 
                $loginDesc,
                $browserInfo['device'],
                $browserInfo['browser']
            );
            $historialStmt->execute();

            // Iniciar sesión
            session_start();
            $_SESSION['user_id'] = $user_id;
            $_SESSION['nivel'] = $user['nivel'];

            $conn->commit();

            echo json_encode([
                'error' => false,
                'message' => 'Login exitoso',
                'nivel' => $user['nivel']
            ]);
        } else {
            // Login fallido - Verificar si el email existe para registrar el intento
            $emailQuery = "SELECT id FROM usuarios WHERE email = ?";
            $emailStmt = $conn->prepare($emailQuery);
            $emailStmt->bind_param("s", $email);
            $emailStmt->execute();
            $emailResult = $emailStmt->get_result();
            
            if ($emailResult->num_rows > 0) {
                $userId = $emailResult->fetch_assoc()['id'];
                
                // Registrar el intento fallido en el historial
                $failDesc = "Inicio de sesion - Fallido";
                $historialQuery = "INSERT INTO historial_usuarios 
                    (usuario_id, tipo_cambio, descripcion, estado_sesion, dispositivo, navegador) 
                    VALUES (?, 'login', ?, 'Cerrada', ?, ?)";
                $historialStmt = $conn->prepare($historialQuery);
                $historialStmt->bind_param("isss", 
                    $userId, 
                    $failDesc,
                    $browserInfo['device'],
                    $browserInfo['browser']
                );
                $historialStmt->execute();
            }
            
            $conn->commit();
            throw new Exception('El correo o nombre de usuario no coinciden');
        }
    

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