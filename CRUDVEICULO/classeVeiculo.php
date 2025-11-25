<?php 
class Veiculo {
        
    private $pdo;

    public function __construct($dbname, $host, $user, $senha, $port) {
        $dsn = "mysql:dbname=" . $dbname . ";host=" . $host . ";port=" . $port;
        try {
            $this->pdo = new PDO ($dsn, $user, $senha);
        }
        catch (PDOException $e) {
            echo "Erro com banco de dados: ".$e->getMessage();
            exit();
        }
        catch (Exception $e) {
            echo "Erro generico: ".$e->getMessage();
            exit();
        }
    }

    public function buscarDados() {
        $cmd = $this->pdo->query("SELECT * FROM veiculos");
        return $cmd->fetchAll(PDO::FETCH_ASSOC);
    }

    public function cadastrarVeiculo ($placa, $renavan, $anofabricacao, $marca, $cor, $combustivel){
        $cmd = $this->pdo->prepare("SELECT placa FROM veiculos WHERE placa = :p");
        $cmd->bindValue(":p", $placa);
        $cmd->execute();

        if ($cmd->rowCount() > 0) {
            return false;
        }

        $cmd = $this->pdo->prepare("
            INSERT INTO veiculos (placa, renavan, ano_fabricacao, marca, cor, combustivel)
            VALUES (:p, :r, :a, :m, :c, :com)
        ");
        $cmd->bindValue(":p", $placa);
        $cmd->bindValue(":r", $renavan);
        $cmd->bindValue(":a", $anofabricacao);
        $cmd->bindValue(":m", $marca);
        $cmd->bindValue(":c", $cor);
        $cmd->bindValue(":com", $combustivel);
        $cmd->execute();
        
        return true;
    }

    public function excluirVeiculo($placa) {
        $cmd = $this->pdo->prepare("DELETE FROM veiculos WHERE placa = :p");
        $cmd->bindValue(":p",$placa);
        $cmd->execute();
    }

    public function buscarDadosPessoa($placa) {
        $cmd = $this->pdo->prepare("SELECT * FROM veiculos WHERE placa = :placa");
        $cmd->bindValue(":placa", $placa);
        $cmd->execute();
        return $cmd->fetch(PDO::FETCH_ASSOC);
    }

    // ---- MÉTODO CORRETO PARA ATUALIZAR ----
    public function atualizarVeiculo($placaAntiga, $placaNova, $renavan, $ano, $marca, $cor, $combustivel) {

        // Se alterou a placa, verificar se já existe essa nova placa
        if ($placaAntiga !== $placaNova) {
            $cmd = $this->pdo->prepare("SELECT placa FROM veiculos WHERE placa = :p");
            $cmd->bindValue(":p", $placaNova);
            $cmd->execute();

            if ($cmd->rowCount() > 0) {
                return false; // nova placa já existe
            }
        }

        // Atualizar
        $cmd = $this->pdo->prepare("
            UPDATE veiculos 
            SET placa = :pNova,
                renavan = :r,
                ano_fabricacao = :a,
                marca = :m,
                cor = :c,
                combustivel = :com
            WHERE placa = :pAntiga
        ");

        $cmd->bindValue(":pNova", $placaNova);
        $cmd->bindValue(":r", $renavan);
        $cmd->bindValue(":a", $ano);
        $cmd->bindValue(":m", $marca);
        $cmd->bindValue(":c", $cor);
        $cmd->bindValue(":com", $combustivel);
        $cmd->bindValue(":pAntiga", $placaAntiga);

        $cmd->execute();
        return true;
    }
}
?>
