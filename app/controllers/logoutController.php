<?php
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

    // Obtener info del navegador
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
        // Verificar estado actual
        $checkQuery = "SELECT estado_sesion FROM usuarios WHERE id = ?";
        $checkStmt = $conn->prepare($checkQuery);
        $checkStmt->bind_param("i", $user_id);
        $checkStmt->execute();
        $result = $checkStmt->get_result();
        $user = $result->fetch_assoc();

        // Solo proceder si la cuenta no está eliminada
        if ($user['estado_sesion'] !== 'Eliminada') {
            // Invalidar token si existe
            if (isset($_COOKIE['remember_token'])) {
                $token = $_COOKIE['remember_token'];
                
                $tokenQuery = "UPDATE tokens_sesion SET activo = FALSE 
                              WHERE usuario_id = ? AND token = ?";
                $tokenStmt = $conn->prepare($tokenQuery);
                $tokenStmt->bind_param("is", $user_id, $token);
                $tokenStmt->execute();

                setcookie('remember_token', '', time() - 3600, '/');
                setcookie('user_id', '', time() - 3600, '/');
            }

            // Actualizar estado del usuario
            $updateQuery = "UPDATE usuarios SET estado_sesion = 'Cerrada' WHERE id = ?";
            $updateStmt = $conn->prepare($updateQuery);
            $updateStmt->bind_param("i", $user_id);
            $updateStmt->execute();

            // Registrar en historial
            $historialQuery = "INSERT INTO historial_usuarios 
                (usuario_id, tipo_cambio, descripcion, estado_sesion, dispositivo, navegador) 
                VALUES (?, 'logout', 'Cierre de sesión', 'Cerrada', ?, ?)";
            $historialStmt = $conn->prepare($historialQuery);
            $historialStmt->bind_param("iss", $user_id, $device, $browser);
            $historialStmt->execute();
        }

        $conn->commit();
        
        // Destruir sesión
        session_unset();
        session_destroy();

        echo json_encode([
            'error' => false, 
            'message' => 'Sesión cerrada exitosamente'
        ]);

    } catch (Exception $e) {
        $conn->rollback();
        throw $e;
    }

} catch (Exception $e) {
    error_log("Error en logout: " . $e->getMessage());
    echo json_encode([
        'error' => true,
        'message' => 'Error al cerrar sesión'
    ]);
} finally {
    if (isset($database)) {
        $database->close();
    }
}