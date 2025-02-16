<?php
// header.php - Incluye la cabecera común para todas las páginas

// Incluir las etiquetas necesarias para meta, charset, etc.
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trivia Game - <?php echo $pageTitle; ?></title> <!-- $pageTitle se define en cada página específica -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
</head>

<body>

    <!-- Header Section -->
    <header>
        <div class="container">
            <!-- Logo -->
            <div class="logo">
                <img src="path_to_logo/logo.png" alt="Trivia Game Logo" width="150"> <!-- Asegúrate de colocar la ruta correcta -->
            </div>

            <!-- Título -->
            <div class="game-title">
                <h1>Trivia Game</h1> <!-- Título del juego -->
            </div>

            <!-- Barra de Navegación -->
            <nav>
                <ul class="navbar">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="game.php">Jugar</a></li>
                    <li><a href="leaderboard.php">Tabla de Posiciones</a></li>
                    <li><a href="about.php">Sobre el Juego</a></li>
                    <li><a href="contact.php">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- Fin del Header -->

    <main>
        <!-- Aquí comienza el contenido principal de cada página -->