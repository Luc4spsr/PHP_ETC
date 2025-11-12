<?php 
    class ProdutoDTO {
        private $id;
        private $nome;
        private $valor;
        private $quantidae;
        private $descricao;
        private $listaProdutos;

        public function __construct() {
        }
        
        public function __setId($id) {
            $this->id = $id;
        }
        
        public function __getId() {
            return $this->id;
        }

        public function __setNome($nome) {
            $this->nome = $nome;
        }
        
        public function __getNome() {
            return $this->nome;
        }

        public function __setValor($valor) {
            $this->valor = $valor;
        }
        
        public function __getValor() {
            return $this->valor;
        }

        public function __setQuantidade($quantidade) {
            $this->quantidade = $quantidade;
        }
        
        public function __getQuantidade() {
            return $this->quantidade;
        }

        public function __setDescricao($descricao) {
            $this->descricao = $descricao;
        }
        
        public function __getDescricao() {
            return $this->descricao;
        }
        
        public function __setListaProduto($listaProdutos) {
            $this->listaProdutos = $listaProdutos;
        }

        public function __getListaProduto() {
            return $this->listaProdutos;
        }
    }

?>