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

    $query = "SELECT 
                historial_usuarios.fecha_cambio,
                historial_usuarios.tipo_cambio,
                historial_usuarios.descripcion,
                historial_usuarios.dispositivo,
                historial_usuarios.navegador,
                historial_usuarios.estado_sesion,
                CASE 
                    WHEN historial_usuarios.descripcion LIKE '%Cookie%' THEN 'cookie'
                    WHEN historial_usuarios.tipo_cambio = 'login' THEN 'login'
                    WHEN historial_usuarios.tipo_cambio = 'logout' THEN 'logout'
                    ELSE 'other'
                END as evento_tipo
              FROM historial_usuarios
              INNER JOIN usuarios ON historial_usuarios.usuario_id = usuarios.id
              WHERE usuarios.id = ?
              ORDER BY historial_usuarios.fecha_cambio DESC
              LIMIT 100";
              
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();

    $historial = [];
    while ($row = $result->fetch_assoc()) {
        // Mejorar la presentación de la descripción
        $row['descripcion_formateada'] = formatearDescripcion($row['descripcion'], $row['tipo_cambio']);
        $historial[] = $row;
    }

    echo json_encode($historial);

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

function formatearDescripcion($descripcion, $tipo) {
    $desc = mb_strtolower($descripcion);
    
    if (strpos($desc, 'cookie') !== false) {
        if (strpos($desc, 'creada') !== false) {
            return 'Sesión permanente activada';
        } elseif (strpos($desc, 'eliminada') !== false) {
            return 'Sesión permanente desactivada';
        }
    }
    
    switch ($tipo) {
        case 'login':
            return 'Inicio de sesión';
        case 'logout':
            return 'Cierre de sesión';
        case 'registro':
            return 'Cuenta creada';
        case 'modificacion':
            return 'Datos actualizados';
        default:
            return ucfirst($descripcion);
    }
}