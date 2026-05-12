<?php
// admin/auth.php
session_start();

function requireLogin() {
    if (!isset($_SESSION['usuario'])) {
        header("Location: login.php");
        exit();
    }
}

function isAdmin() {
    return isset($_SESSION['rol']) && $_SESSION['rol'] === 'admin';
}

function isVisitante() {
    return isset($_SESSION['rol']) && $_SESSION['rol'] === 'visitante';
}