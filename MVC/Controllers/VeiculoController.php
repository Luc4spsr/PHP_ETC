<?php
// VeiculoController.php
require_once __DIR__ . '/../Models/Veiculo.php';

class VeiculoController {
    private $model;

    public function __construct() {
        $this->model = new Veiculo();
    }

    public function processarRequisicao() {
        $action = $_GET['action'] ?? 'listar';

        switch ($action) {
            case 'salvar':
                $this->salvar();
                break;
            case 'editar':
                $this->editar();
                break;
            case 'deletar':
                $this->deletar();
                break;
            case 'listar':
            default:
                $this->listar();
                break;
        }
    }

    // Processa o formulário (Criação ou Edição)
    private function salvar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'placa' => trim($_POST['placa']),
                'renavan' => trim($_POST['renavan']),
                'ano_fabricacao' => trim($_POST['ano_fabricacao']),
                'marca' => trim($_POST['marca']),
                'cor' => trim($_POST['cor']),
                'combustivel' => trim($_POST['combustivel']),
            ];
            
            if ($this->model->salvar($data)) {
                header('Location: index.php'); // Redireciona para a listagem
                exit;
            } else {
                echo "Erro ao salvar o veículo.";
            }
        } else {
            // Se for GET, mostra o formulário vazio
            $this->mostrarFormulario();
        }
    }

    // Preenche o formulário para edição
    private function editar() {
        $placa = $_GET['placa'] ?? null;
        if ($placa) {
            $veiculo = $this->model->buscarPorPlaca($placa);
            $this->mostrarFormulario($veiculo);
        } else {
            header('Location: index.php'); // Se não tiver placa, volta para a lista
        }
    }

    // Remove um registro
    private function deletar() {
        $placa = $_GET['placa'] ?? null;
        if ($placa && $this->model->deletar($placa)) {
            header('Location: index.php');
            exit;
        } else {
            echo "Erro ao deletar ou placa não fornecida.";
        }
    }

    // Exibe a listagem
    private function listar() {
        $veiculos = $this->model->listarTodos();
        include __DIR__ . '/../Views/lista.php'; // Carrega a View de listagem
    }

    // Exibe o formulário (Novo ou Edição)
    private function mostrarFormulario($veiculo = null) {
        include __DIR__ . '/../Views/formulario.php'; // Carrega a View de formulário
    }
}