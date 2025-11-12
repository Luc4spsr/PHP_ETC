<?php 
    require_once 'ProdutoDAO.php';
    require_once 'conexao.php';
    require_once 'ProdutoDTO.php';
    $produtoDAO = new ProdutoDAO($conexao);
    $produtoDTO = new ProdutoDTO();
    $produtoDAO->consultaDadosProdutos($produtoDTO);


?>