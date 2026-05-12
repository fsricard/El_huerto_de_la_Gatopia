<?php
// Función para crear rutas absolutas
function base_url(): string
{
    // Detectar protocolo
    $protocolo = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
        ? 'https://'
        : 'http://';

    // Host (dominio + puerto)
    $host = $_SERVER['HTTP_HOST'];

    // Ruta absoluta del proyecto
    $projectPath = realpath(__DIR__ . '/..');

    // Ruta absoluta del DOCUMENT_ROOT
    $rootPath = realpath($_SERVER['DOCUMENT_ROOT']);

    // Calcular subcarpeta correctamente
    $subcarpeta = str_replace('\\', '/', $projectPath);
    $rootPath   = str_replace('\\', '/', $rootPath);

    $subcarpeta = str_replace($rootPath, '', $subcarpeta);

    // Asegurar que empieza con "/"
    $subcarpeta = '/' . ltrim($subcarpeta, '/');

    // Asegurar que NO termina con "/"
    return rtrim($protocolo . $host . $subcarpeta, '/');
}

// Genera rutas absolutas correctas para assets.
function asset(string $ruta): string
{
    // Asegura que base_url() NO termina con "/"
    $base = rtrim(base_url(), '/');

    // Asegura que la ruta SÍ empieza con "/"
    $ruta = '/' . ltrim($ruta, '/');

    return $base . $ruta;
}

// Función para restringir contenido solo para el rol "admin"
function tienePermiso(): bool
{
    $rolesPermitidos = ['admin'];

    return in_array($_SESSION['rol'], $rolesPermitidos, true);
}

// Función para detectar dispositos móviles
function esSoloMovil()
{
    $ua = strtolower($_SERVER['HTTP_USER_AGENT'] ?? '');

    // Detectores de móvil
    $moviles = [
        'iphone',
        'ipod',
        'android',
        'blackberry',
        'windows phone',
        'opera mini',
        'mobile',
        'webos'
    ];

    // Si es tablet, no es móvil
    if (esSoloTablet()) {
        return false;
    }

    foreach ($moviles as $m) {
        if (strpos($ua, $m) !== false) {
            return true;
        }
    }

    return false;
}

// Función para detectar tablets
function esSoloTablet()
{
    $ua = strtolower($_SERVER['HTTP_USER_AGENT'] ?? '');

    // Detectores de tablet
    $tablets = [
        'ipad',
        'tablet',
        'kindle',
        'silk'
    ];

    foreach ($tablets as $t) {
        if (strpos($ua, $t) !== false) {
            return true;
        }
    }

    // Caso especial: Android tablet (Android sin "mobile")
    if (strpos($ua, 'android') !== false && strpos($ua, 'mobile') === false) {
        return true;
    }

    return false;
}

// Función combinada para detectar dispositivos móviles y tablets
function esMovilOtablet()
{
    return esSoloMovil() || esSoloTablet();
}

