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
    $database = new Database();
    $conn = $database->getConnection();

    $username = trim($_POST['username'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $level = trim($_POST['level'] ?? '');
    
    if (empty($username) || empty($email) || empty($level)) {
        throw new Exception('Todos los campos son requeridos');
    }

    // Convertir nivel
    $nivelDB = match($level) {
        'basic' => 1,
        'medium' => 2,
        'advanced' => 3,
        default => 1
    };

    // Verificar duplicados
    $stmt = $conn->prepare("SELECT id FROM usuarios WHERE username = ? OR email = ?");
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    
    if ($stmt->get_result()->num_rows > 0) {
        throw new Exception('Usuario o email ya existe');
    }

    // Registrar usuario
    $conn->begin_transaction();

    try {
        $insertStmt = $conn->prepare("INSERT INTO usuarios (username, email, nivel) VALUES (?, ?, ?)");
        $insertStmt->bind_param("ssi", $username, $email, $nivelDB);
        
        if (!$insertStmt->execute()) {
            throw new Exception('Error al registrar usuario');
        }

        $userId = $conn->insert_id;

        // Registrar en historial
        $historialStmt = $conn->prepare(
            "INSERT INTO historial_usuarios (usuario_id, tipo_cambio, descripcion) 
             VALUES (?, 'registro', ?)"
        );
        
        $desc = "Registro nuevo usuario - Nivel: $nivelDB";
        $historialStmt->bind_param("is", $userId, $desc);
        
        if (!$historialStmt->execute()) {
            throw new Exception('Error al registrar historial');
        }

        $conn->commit();
        
        echo json_encode([
            'error' => false,
            'message' => 'Registro exitoso'
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