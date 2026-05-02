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

// Función para mostrar el CopyRight en el footer
function CopyrightGatopia($startYear = 2021)
{
    $currentYear = date('Y');
    $yearDisplay = ($startYear == $currentYear) ? $currentYear : "$startYear – $currentYear";
    return "&copy; $yearDisplay El huerto de la Gatopía - Todos los derechos reservados";
}

// Función para verificar los permisos del usuario
function tienePermiso($modulo)
{
    if (!isset($_SESSION['rol'])) return false;

    $rol = $_SESSION['rol'];

    // Módulos con acceso restringido
    $modulosRestrictivos = ['usuarios', 'comentarios', 'mensajes', 'documentos', 'adopciones'];

    // Solo los admins pueden editar estos módulos
    if (in_array($modulo, $modulosRestrictivos)) {
        return $rol === 'admin';
    }

    // Otros módulos pueden tener reglas distintas
    return true;
}

// Mostrar infomarción según el rol
function mostrarInfoAcceso($modulo)
{
    if (!isset($_SESSION['rol'])) return;

    $rol = $_SESSION['rol'];

    if ($rol === 'admin') {
        echo "<div class='info'>Tienes acceso total al módulo <strong>$modulo</strong>. Puedes ver, editar y eliminar contenido.</div>";
    } elseif ($rol === 'visitante') {
        echo "<div class='info'>Acceso de solo lectura al módulo <strong>$modulo</strong>. No puedes modificar ni eliminar contenido.</div>";
    }
}

// Iniciar sesión
function iniciarSesionSegura()
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
}

// Función para imprimir textos personalizados en "header_base.php"
function mostrarTextoPersonalizado()
{
    // Recupera la ruta desde la variable global
    $pagina = $GLOBALS['pagina_actual'] ?? '';

    // Define los textos personalizados
    $textos = [
        ''                        => '¡Bienvenido a la página principal, Ricard!',
        'ayudanos'                => 'AYUDA A LA GATOPÍA',
        'contacto'                => 'DÉJANOS TU MENSAJE',
        'politica-privacidad'     => 'POLITICA DE PRIVACIDAD',
        'sobre-la-gatopia'        => 'SOBRE LA GATOPÍA',
    ];

    // Imprime el texto correspondiente o uno por defecto
    echo $textos[$pagina] ?? '¡Gracias por visitarnos!';
}

// Función para mostrar el mensaje de la Gatopía
function mostrarGatopia()
{
    echo '<div class="gatopia-container">';
    echo '  <div class="gatopia">';
    echo '    <h2><a href="https://lagatopiademiriam.com" target="_blank" rel="noopener noreferrer">';
    echo '      La Gatopía de Miriam';
    echo '    </a></h2>';
    echo '  </div>';
    echo '</div>';
}
