<?php
require_once 'models/Produto.php';
require_once 'models/Plataforma.php';

class DashboardController {
    private $produtoModel;
    private $plataformaModel;

    public function __construct($pdo) {
        $this->produtoModel = new Produto($pdo);
        $this->plataformaModel = new Plataforma($pdo);
    }

    public function index() {
        
        
        
        if (!isset($_SESSION['usuario'])) {
            header("Location: index.php?action=login");
            exit;
        }

        $totalProdutos = $this->produtoModel->contarTodos();
        $totalPlataformas = $this->plataformaModel->contarTodos();

        include 'views/dashboard/index.php';
    }
}