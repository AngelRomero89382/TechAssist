<?php
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
