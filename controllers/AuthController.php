<?php

require_once __DIR__ . '/../models/Usuario.php';

class AuthController {

    private $usuarioModel;

    public function __construct($pdo) {
        $this->usuarioModel = new Usuario($pdo);
    }

    public function mostrarLogin() {
        require __DIR__ . '/../views/auth/login.php';
    }

    public function login() {

        $email = $_POST['email'] ?? '';
        $senha = $_POST['senha'] ?? '';

        if (empty($email) || empty($senha)) {
            $erro = "Preencha todos os campos.";
            require __DIR__ . '/../views/auth/login.php';
            return;
        }

        $usuario = $this->usuarioModel->buscarPorEmail($email);

        if ($usuario && password_verify($senha, $usuario['senha'])) {

            $_SESSION['usuario'] = $usuario['nome'];

            header('Location: index.php');
            exit;

        } else {
            $erro = "Email ou senha inválidos.";
            require __DIR__ . '/../views/auth/login.php';
        }
    }

    public function logout() {
        session_destroy();
        header('Location: index.php?action=login');
        exit;
    }
}