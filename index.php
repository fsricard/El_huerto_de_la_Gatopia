<?php
// ==========================================
//  ROUTER PRINCIPAL DEL FRONTEND
// ==========================================

// Sanitizar parámetros
$view  = isset($_GET['view'])  ? trim($_GET['view'])  : 'inicio';
$slug  = isset($_GET['slug'])  ? trim($_GET['slug'])  : null;
$extra = isset($_GET['extra']) ? trim($_GET['extra']) : null;

// ==========================================
//  LISTA DE VISTAS PERMITIDAS
// ==========================================

$rutas_validas = [
    'inicio'
];

// Si la vista no existe → 404
if (!in_array($view, $rutas_validas)) {
    http_response_code(404);
    $GLOBALS['pagina_actual'] = '404';
    $view = '404';
}

// Define página actual para el header y el footer
$GLOBALS['pagina_actual'] = $view;

// ==========================================
//  CARGAR HEADER
// ==========================================
require_once __DIR__ . '/includes/header.php';

// ==========================================
//  LÓGICA DEL ROUTER
// ==========================================

// ---------------------------
//  PÁGINA DE INICIO
// ---------------------------
if ($view === 'inicio') {
    require __DIR__ . '/views/inicio.php';
}

// ---------------------------
//  404
// ---------------------------
else {
    require __DIR__ . '/views/404.php';
}

// ==========================================
//  CARGAR FOOTER
// ==========================================
require_once __DIR__ . '/includes/footer.php';