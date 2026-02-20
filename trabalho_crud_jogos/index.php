<?php
session_start();

require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/controllers/ProdutoController.php';
require_once __DIR__ . '/controllers/PlataformaController.php';
require_once __DIR__ . '/controllers/AuthController.php'; // NOVO

$pdo = conectar_db();

$action = $_GET['action'] ?? 'listar_produtos';

$produtoController = new ProdutoController($pdo);
$plataformaController = new PlataformaController($pdo);
$authController = new AuthController($pdo); // NOVO


// 🔐 Proteção de login
if (!isset($_SESSION['usuario']) && !in_array($action, ['login', 'processar_login'])) {
    header('Location: index.php?action=login');
    exit;
}

switch ($action) {

    // 🔐 LOGIN
    case 'login': $authController->mostrarLogin(); break;
    case 'processar_login': $authController->login(); break;
    case 'logout': $authController->logout(); break;

    // Plataformas
    case 'listar_plataformas': $plataformaController->listar(); break;
    case 'criar_plataforma': $plataformaController->criar(); break;
    case 'salvar_plataforma': $plataformaController->salvar(); break;
    case 'editar_plataforma': $plataformaController->editar(); break;
    case 'atualizar_plataforma': $plataformaController->atualizar(); break;
    case 'excluir_plataforma': $plataformaController->excluir(); break;

    // Produtos
    case 'listar_produtos': $produtoController->listar(); break;
    case 'criar_produto': $produtoController->criar(); break;
    case 'salvar_produto': $produtoController->salvar(); break;
    case 'editar_produto': $produtoController->editar(); break;
    case 'atualizar_produto': $produtoController->atualizar(); break;
    case 'excluir_produto': $produtoController->excluir(); break;

    default:
        header('Location: index.php?action=listar_produtos');
        break;
}
?>