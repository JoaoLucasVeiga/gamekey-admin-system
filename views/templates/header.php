<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameKey Admin | Painel Administrativo</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <div class="background-wrapper">
        <div class="particle"></div><div class="particle"></div><div class="particle"></div>
        <div class="particle"></div><div class="particle"></div><div class="particle"></div>
        <div class="particle"></div><div class="particle"></div><div class="particle"></div>
        <div class="particle"></div><div class="particle"></div><div class="particle"></div>
    </div>

    <header class="main-header">
        <h1><a href="index.php?action=dashboard">GameKey Admin</a></h1>
        <nav>
            <!-- Novo botão de Dashboard -->
            <a href="index.php?action=dashboard">Dashboard</a>
            
            <a href="index.php?action=listar_produtos">Gerenciar Produtos</a>
            <a href="index.php?action=listar_plataformas">Gerenciar Plataformas</a>

            <?php if (isset($_SESSION['usuario'])): ?>
                <span style="margin-left:15px; color: #fff; font-size: 0.9rem; opacity: 0.8;">
                    👤 <?= htmlspecialchars($_SESSION['usuario']); ?>
                </span>
                <a href="index.php?action=logout" style="margin-left:10px; color: #ff4d4d;">Sair</a>
            <?php endif; ?>
        </nav>
    </header>

    <main class="container">
        <?php
        if (isset($_SESSION['mensagem'])): ?>
            <div class="alert alert-<?= $_SESSION['mensagem']['tipo'] ?>">
                <?= $_SESSION['mensagem']['texto'] ?>
            </div>
        <?php
            unset($_SESSION['mensagem']);
        endif;
        ?>