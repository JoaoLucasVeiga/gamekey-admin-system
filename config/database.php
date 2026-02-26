<?php

function conectar_db() {
   
    
    
    $whitelist_local = array('127.0.0.1', '::1', 'localhost');

    if (in_array($_SERVER['SERVER_NAME'], $whitelist_local)) {
        // --- AMBIENTE LOCAL (XAMPP) ---
        $host = 'localhost';
        $dbname = 'db_steamkeys_globais'; 
        $user = 'root';
        $password = '';
    } else {
      
        $host = 'sql305.infinityfree.com';
        $dbname = 'if0_41206744_gamekeys'; 
        $user = 'if0_41206744';
        $password = 'HCyQdWKO9Rq2';
    }

    try {
      
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Erro na conexão com o banco de dados: " . $e->getMessage());
    }
}
?>