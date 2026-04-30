<?php
// admin/login.php
session_start();
require_once '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    // Buscar el usuario en la base de datos
    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE nombre = ?");
    $stmt->execute([$usuario]);
    $datos = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($datos && password_verify($clave, $datos['clave'])) {
        $_SESSION['usuario'] = $datos['nombre'];
        $_SESSION['rol'] = $datos['rol'];
        header("Location: admin.php");
        exit();
    } else {
        $error = "Credenciales incorrectas";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Panel de Administración</title>

    <!-- Fuentes de Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Agdasima&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="includes/backend.css">
</head>
<body>
    <div class="login-container">
        <h2>Acceso al panel</h2>

        <?php if (isset($error)): ?>
            <div class="error"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>

        <form method="post">
            <input type="text" name="usuario" placeholder="Usuario" required />
            <input type="password" name="clave" placeholder="Contraseña" required />
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>