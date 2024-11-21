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
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function protegerRuta() {
    $rutasPublicas = ['index.php'];
    $rutaActual = basename($_SERVER['PHP_SELF']);

    if (!in_array($rutaActual, $rutasPublicas) && !isset($_SESSION['user_id'])) {
        header('../../index.php');
        exit;
    }
}

function getNivelUsuario() {
    if (!isset($_SESSION['nivel'])) {
        return 0;
    }
    return (int)$_SESSION['nivel'];
}
