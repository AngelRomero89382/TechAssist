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

class AuthModel {
    private $conn;
    
    public function __construct($database) {
        $this->conn = $database->getConnection();
    }

    public function checkAuth() {
        // Intentar iniciar sesión solo si no hay una activa
        if (session_status() == PHP_SESSION_NONE) {
            try {
                @session_start();
            } catch (Exception $e) {
                // Si falla el inicio de sesión, limpiar cookies y redirigir
                $this->removeCookies();
                header('Location: ../../index.php');
                exit;
            }
        }

        // Verificar sesión activa
        if (isset($_SESSION['user_id'])) {
            return true;
        }

        // Verificar cookies
        if (isset($_COOKIE['remember_token']) && isset($_COOKIE['user_id'])) {
            try {
                return $this->validateRememberToken();
            } catch (Exception $e) {
                $this->removeCookies();
                header('Location: ../../index.php');
                exit;
            }
        }

        return false;
    }

    private function validateRememberToken() {
        try {
            $token = $_COOKIE['remember_token'];
            $user_id = $_COOKIE['user_id'];

            $query = "SELECT u.id, u.nivel, u.estado_sesion 
                     FROM usuarios u 
                     INNER JOIN tokens_sesion t ON u.id = t.usuario_id 
                     WHERE t.token = ? 
                     AND t.usuario_id = ? 
                     AND t.activo = TRUE";
            
            $stmt = $this->conn->prepare($query);
            $stmt->bind_param("si", $token, $user_id);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows === 1) {
                $user = $result->fetch_assoc();
                
                // Si la cuenta fue eliminada, limpiar todo
                if ($user['estado_sesion'] === 'Eliminada') {
                    $this->removeCookies();
                    header('Location: ../../index.php');
                    exit;
                }

                $_SESSION['user_id'] = $user['id'];
                $_SESSION['nivel'] = $user['nivel'];
                return true;
            }

            $this->removeCookies();
            return false;

        } catch (Exception $e) {
            error_log("Error validando token: " . $e->getMessage());
            $this->removeCookies();
            return false;
        }
    }

    private function removeCookies() {
        if (isset($_COOKIE['remember_token'])) {
            setcookie('remember_token', '', time() - 3600, '/');
        }
        if (isset($_COOKIE['user_id'])) {
            setcookie('user_id', '', time() - 3600, '/');
        }
    }

    public function forceLogout() {
        if (isset($_SESSION['user_id']) && isset($_COOKIE['remember_token'])) {
            try {
                $token = $_COOKIE['remember_token'];
                $user_id = $_SESSION['user_id'];

                $query = "UPDATE tokens_sesion SET activo = FALSE 
                         WHERE usuario_id = ? AND token = ?";
                $stmt = $this->conn->prepare($query);
                $stmt->bind_param("is", $user_id, $token);
                $stmt->execute();

                $query = "UPDATE usuarios SET estado_sesion = 'Cerrada' 
                         WHERE id = ?";
                $stmt = $this->conn->prepare($query);
                $stmt->bind_param("i", $user_id);
                $stmt->execute();
            } catch (Exception $e) {
                error_log("Error en forceLogout: " . $e->getMessage());
            }
        }

        $this->removeCookies();
        if (session_status() == PHP_SESSION_ACTIVE) {
            session_unset();
            session_destroy();
        }
    }
}