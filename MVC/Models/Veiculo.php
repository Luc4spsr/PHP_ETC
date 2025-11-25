<?php
// Veiculo.php
require_once __DIR__ . '/../Config/Database.php';

class Veiculo {
    private $conn;

    public function __construct() {
        $this->conn = Database::getConnection();
    }

    // --- C (Create) e U (Update) ---
    public function salvar($data) {
        // Verifica se a placa já existe para decidir se é INSERT ou UPDATE
        $sql = "SELECT placa FROM veiculos WHERE placa = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$data['placa']]);

        if ($stmt->fetch()) {
            // UPDATE
            $sql = "UPDATE veiculos SET renavan=?, ano_fabricacao=?, marca=?, cor=?, combustivel=? WHERE placa=?";
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute([
                $data['renavan'], $data['ano_fabricacao'], $data['marca'], $data['cor'], $data['combustivel'], $data['placa']
            ]);
        } else {
            // INSERT
            $sql = "INSERT INTO veiculos (placa, renavan, ano_fabricacao, marca, cor, combustivel) 
                    VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute([
                $data['placa'], $data['renavan'], $data['ano_fabricacao'], $data['marca'], $data['cor'], $data['combustivel']
            ]);
        }
    }

    // --- R (Read - Todos) ---
    public function listarTodos() {
        $sql = "SELECT * FROM veiculos ORDER BY placa";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // --- R (Read - Único) ---
    public function buscarPorPlaca($placa) {
        $sql = "SELECT * FROM veiculos WHERE placa = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$placa]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // --- D (Delete) ---
    public function deletar($placa) {
        $sql = "DELETE FROM veiculos WHERE placa = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$placa]);
    }
}