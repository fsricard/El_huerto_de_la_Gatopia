<div class="sidebar" id="sidebar">
    <a href="/admin/admin.php" class="<?= $pagina === 'admin' ? 'activo' : '' ?>">
        <i class="fa-regular fa-house-user <?= $pagina === 'admin' ? 'fa-beat' : '' ?>"></i> Inicio
    </a>
    <a href="/admin/menu.php" class="<?= $pagina === 'menu' ? 'activo' : '' ?>">
        <i class="fa-regular fa-square-list <?= $pagina === 'menu' ? 'fa-beat' : '' ?>"></i> Menú
    </a>
    <a href="/admin/mensajes.php" class="<?= $pagina === 'mensajes' ? 'activo' : '' ?>">
        <i class="fa-regular fa-envelope-circle-check <?= $pagina === 'mensajes' ? 'fa-beat' : '' ?>"></i> Mensajes
    </a>
    <a href="/admin/ayuda.php" class="<?= $pagina === 'ayuda' ? 'activo' : '' ?>">
        <i class="fa-regular fa-hands-holding-heart <?= $pagina === 'ayuda' ? 'fa-beat' : '' ?>"></i> Ayúdanos
    </a>
    <a href="/admin/sobre_la_gatopia.php" class="<?= $pagina === 'sobre_la_gatopia' ? 'activo' : '' ?>">
        <i class="fa-regular fa-cat <?= $pagina === 'sobre_la_gatopia' ? 'fa-beat' : '' ?>"></i> Sobre la Gatopia
    </a>
    <a href="/admin/header.php" class="<?= $pagina === 'header_gestiona' ? 'activo' : '' ?>">
        <i class="fa-regular fa-globe-pointer <?= $pagina === 'header_gestiona' ? 'fa-beat' : '' ?>"></i> Cabecera de la Web
    </a>
    <a href="/admin/politica_privacidad.php" class="<?= $pagina === 'politica_privacidad' ? 'activo' : '' ?>">
        <i class="fa-regular fa-scroll-old <?= $pagina === 'politica_privacidad' ? 'fa-beat' : '' ?>"></i> Política de Privacidad
    </a>

    <?php
    $superAdmins = ['RicardFS', 'Miriam'];
    if ($_SESSION['rol'] === 'admin' && in_array($_SESSION['usuario'], $superAdmins)):
    ?>
        <a href="/admin/super_admin/super_admin.php" class="admin-personal <?= $pagina === 'super_admin' ? 'activo' : '' ?>">
            <i class="fa-regular fa-user-crown <?= $pagina === 'super_admin' ? 'fa-beat' : '' ?>"></i> Super admin
        </a>
    <?php endif; ?>
    
    <a href="/admin/logout.php">
        <i class="fa-regular fa-right-from-bracket"></i> Cerrar sesión
    </a>
</div>