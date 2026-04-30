<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>

    <link rel="stylesheet" href="includes/backend.css">

    <!-- FontAwesome 7.0.1 CSS -->
    <link href="../includes/fontawesome/css/brands.css" rel="stylesheet" />
    <link href="../includes/fontawesome/css/chisel-regular.css" rel="stylesheet" />
    <link href="../includes/fontawesome/css/duotone.css" rel="stylesheet" />
    <link href="../includes/fontawesome/css/duotone-light.css" rel="stylesheet" />
    <link href="../includes/fontawesome/css/duotone-regular.css" rel="stylesheet" />
    <link href="../includes/fontawesome/css/duotone-thin.css" rel="stylesheet" />
    <link href="../includes/fontawesome/css/etch-solid.css" rel="stylesheet" />
    <link href="../includes/fontawesome/css/fontawesome.css" rel="stylesheet" />
    <link href="../includes/fontawesome/css/jelly-duo-regular.css" rel="stylesheet" />
    <link href="../includes/fontawesome/css/jelly-fill-regular.css" rel="stylesheet" />
    <link href="../includes/fontawesome/css/jelly-regular.css" rel="stylesheet" />
    <link href="../includes/fontawesome/css/light.css" rel="stylesheet" />
    <link href="../includes/fontawesome/css/notdog-duo-solid.css" rel="stylesheet" />
    <link href="../includes/fontawesome/css/notdog-solid.css" rel="stylesheet" />
    <link href="../includes/fontawesome/css/regular.css" rel="stylesheet" />
    <link href="../includes/fontawesome/css/sharp-duotone-light.css" rel="stylesheet" />
    <link href="../includes/fontawesome/css/sharp-duotone-regular.css" rel="stylesheet" />
    <link href="../includes/fontawesome/css/sharp-duotone-solid.css" rel="stylesheet" />
    <link href="../includes/fontawesome/css/sharp-duotone-thin.css" rel="stylesheet" />
    <link href="../includes/fontawesome/css/sharp-light.css" rel="stylesheet" />
    <link href="../includes/fontawesome/css/sharp-regular.css" rel="stylesheet" />
    <link href="../includes/fontawesome/css/sharp-solid.css" rel="stylesheet" />
    <link href="../includes/fontawesome/css/sharp-thin.css" rel="stylesheet" />
    <link href="../includes/fontawesome/css/slab-press-regular.css" rel="stylesheet" />
    <link href="../includes/fontawesome/css/slab-regular.css" rel="stylesheet" />
    <link href="../includes/fontawesome/css/solid.css" rel="stylesheet" />
    <link href="../includes/fontawesome/css/svg.css" rel="stylesheet" />
    <link href="../includes/fontawesome/css/svg-with-js.css" rel="stylesheet" />
    <link href="../includes/fontawesome/css/thin.css" rel="stylesheet" />
    <link href="../includes/fontawesome/css/thumbprint-light.css" rel="stylesheet" />
    <link href="../includes/fontawesome/css/v4-font-face.css" rel="stylesheet" />
    <link href="../includes/fontawesome/css/v4-shims.css" rel="stylesheet" />
    <link href="../includes/fontawesome/css/v5-font-face.css" rel="stylesheet" />
    <link href="../includes/fontawesome/css/whiteboard-semibold.css" rel="stylesheet" />

    <!-- Fuentes de Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Agdasima&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        function toggleEdit(id) {
            const form = document.getElementById('edit-' + id);
            form.style.display = form.style.display === 'none' ? 'block' : 'none';
        }
    </script>
</head>