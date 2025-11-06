<?php
    require_once 'produtoDTO.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['btnCadastrar'])) {
            $produtoDTO = new ProdutoDTO();
            $produtoDTO->__setNome($_POST['nome']);
            $produtoDTO->__setValor($_POST['valor']);
            $produtoDTO->__setQuantidade($_POST['quantidade']);
            $produtoDTO->__setDescricao($_POST['descricao']);
        }
    }
?>