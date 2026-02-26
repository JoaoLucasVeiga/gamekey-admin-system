<?php
session_start();


require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/controllers/ProdutoController.php';
require_once __DIR__ . '/controllers/PlataformaController.php';
require_once __DIR__ . '/controllers/AuthController.php'; 
require_once __DIR__ . '/controllers/DashboardController.php'; 


$pdo = conectar_db();


$action = $_GET['action'] ?? 'dashboard';

// Instância dos Controladores
$produtoController = new ProdutoController($pdo);
$plataformaController = new PlataformaController($pdo);
$authController = new AuthController($pdo);
$dashboardController = new DashboardController($pdo); 

// 🔐 Proteção de login (Bloqueia acesso se não estiver logado)
// Nota: Se a ação for login ou processar_login, permite o acesso.
if (!isset($_SESSION['usuario']) && !in_array($action, ['login', 'processar_login'])) {
    header('Location: index.php?action=login');
    exit;
}

// Roteador
switch ($action) {

    // 🔐 LOGIN
    case 'login': $authController->mostrarLogin(); break;
    case 'processar_login': $authController->login(); break;
    case 'logout': $authController->logout(); break;

   
    case 'dashboard': 
        $dashboardController->index(); 
        break;

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

    // Padrão (Se a rota não existir, vai para o dashboard)
    default:
        header('Location: index.php?action=dashboard');
        break;
}
?>