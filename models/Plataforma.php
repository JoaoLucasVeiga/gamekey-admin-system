<?php


class Plataforma {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function listar() {
        $stmt = $this->pdo->query("SELECT * FROM plataformas ORDER BY nome");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function criar($nome) {
        $stmt = $this->pdo->prepare("INSERT INTO plataformas (nome) VALUES (?)");
        return $stmt->execute([$nome]);
    }

    public function buscarPorId($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM plataformas WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function atualizar($id, $nome) {
        $stmt = $this->pdo->prepare("UPDATE plataformas SET nome = ? WHERE id = ?");
        return $stmt->execute([$nome, $id]);
    }

    public function excluir($id) {
        $stmt = $this->pdo->prepare("DELETE FROM plataformas WHERE id = ?");
        return $stmt->execute([$id]);
    }
    public function contarTodos() {
        try {
            $query = "SELECT COUNT(*) as total FROM plataformas";
            // AQUI ESTÁ A CORREÇÃO: usando pdo em vez de conn
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
            return $resultado['total'];
        } catch (PDOException $e) {
            return 0;
        }
    }
}
?>