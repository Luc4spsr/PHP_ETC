<?php 
    $dsn = "mysql:host=localhost;dbname=turmak";
    $usuario = "root";
    $senha = "";

    try {
        $conexao = new PDO($dsn, $usuario, $senha);
        echo "Conectado ao Banco de Dados com Sucesso!";
    } catch (PDOException $erro) {
        echo "Erro ao conectar com banco".$erro->getMessage();
    }
    
?>