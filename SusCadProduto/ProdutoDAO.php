<?php 
    class ProdutoDAO {
        public $conexao;
        
        public function __construct($conexao) {
            $this->conexao = $conexao;
        }

        public function inserirDadosBanco($produtoDTO) {
            $sql = 'INSERT INTO produto (nome, valor, quantidade, descricao) VALUES (:nome, :valor, :quantidade, :descricao)';
            $insert = $this->conexao->prepare($sql);
            $insert->bindValue(":nome",$produtoDTO->__getNome());
            $insert->bindValue(":valor",$produtoDTO->__getValor());
            $insert->bindValue(":quantidade",$produtoDTO->__getQuantidade());
            $insert->bindValue(":descricao",$produtoDTO->__getDescricao());

            $insert->execute();
        }

        public function consultaDadosProdutos($produtoDTO){
            $sql = 'SELECT * FROM produto';
            $select = $this->conexao->prepare($sql);
            $select->execute();

            if($select->rowCount() > 0) {
                $listaProdutos = $select->fetchAll();
                $produtoDTO->__setListaProduto($listaProdutos);
            }
        }
    }

?>