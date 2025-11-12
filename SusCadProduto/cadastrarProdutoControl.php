<?php
    require_once 'produtoDTO.php';
    require_once 'ProdutoDAO.php';
    require_once 'conexao.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['btnCadastrar'])) {
            $produtoDTO = new ProdutoDTO();
            $produtoDTO->__setNome($_POST['nome']);
            $produtoDTO->__setValor($_POST['valor']);
            $produtoDTO->__setQuantidade($_POST['quantidade']);
            $produtoDTO->__setDescricao($_POST['descricao']);

            $produtoDAO = new ProdutoDAO($conexao);
            $produtoDAO->inserirDadosBanco($produtoDTO);
        }
    }
?>