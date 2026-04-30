<?php
include('includes/header_admin.php');

require_once 'auth.php';
requireLogin();

$pagina = 'admin';

$modulos = [
  ['pagina' => 'menu', 'url' => 'menu.php', 'icono' => 'fa-square-list', 'titulo' => 'Menú', 'descripcion' => 'Gestiona los items del menú principal de la cabecera de la Web.'],
  ['pagina' => 'mensajes', 'url' => 'mensajes.php', 'icono' => 'fa-envelope-circle-check', 'titulo' => 'Mensajes', 'descripcion' => 'Gestión de los E-mails recibidos desde el formulario de la pagina de Contacto.'],
  ['pagina' => 'ayuda', 'url' => 'ayuda.php', 'icono' => 'fa-hands-holding-heart', 'titulo' => 'Ayúdanos', 'descripcion' => 'Gestión de las diferentes formas de donar y colaborar con el Santuario.'],
  ['pagina' => 'sobre_la_gatopia', 'url' => 'sobre_la_gatopia.php', 'icono' => 'fa-cat', 'titulo' => 'Sobre la Gatopia', 'descripcion' => 'Gestión del contenido de la pagina "Sobre la Gatopia".'],
  ['pagina' => 'header_gestiona', 'url' => 'header.php', 'icono' => 'fa-globe-pointer', 'titulo' => 'Cabecera de la Web', 'descripcion' => 'Gestión de las imágenes del encabezado de la pagina Web.'],
  ['pagina' => 'politica_privacidad', 'url' => 'politica_privacidad.php', 'icono' => 'fa-scroll-old', 'titulo' => 'Política de Privacidad', 'descripcion' => 'Gestión del contenido de la pagina "Política de privacidad".'],
];
?>

<body>
  <button class="hamburger" onclick="toggleMenu()"><i class="fa-regular fa-bars-filter"></i></button>
  <div class="header header-adopciones">Panel de Administración</div>

  <div class="container">
    <?php include('includes/sidebar.php'); ?>

    <div class="main">
      <div class="welcome">
        Bienvenido, <strong><?= htmlspecialchars($_SESSION['usuario']) ?></strong> (<?= $_SESSION['rol'] ?>)
      </div>
      <div class="info">Selecciona una opción del menú para comenzar a gestionar el contenido del sitio.</div>

      <div class="modulos-grid">
        <?php foreach ($modulos as $modulo): ?>
          <?php if ($modulo['pagina'] === 'usuarios' && $_SESSION['rol'] !== 'admin') continue; ?>
          <div class="modulo-item">
            <a href="/admin/<?= $modulo['url'] ?>" class="modulo-link">
              <i class="fa-regular <?= $modulo['icono'] ?> fa-xl"></i>
              <div class="modulo-titulo"><?= $modulo['titulo'] ?></div>
            </a>
            <div class="modulo-descripcion"><?= $modulo['descripcion'] ?></div>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </div>

<?php include('includes/footer_admin.php'); ?>