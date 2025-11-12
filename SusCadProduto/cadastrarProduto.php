<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>SisCadProduto</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="cadastrarProduto.php">Cadastrar</a></li>
            <li><a href="consultarProduto.php">Consultar</a></li>
        </ul>
    </nav>
    <h1>CADASTRAR PRODUTO</h1>
    <p>Informe os dados do produto.</p>
    <form action="cadastrarProdutoControl.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <br><br>
        <label for="valor">Valor:</label>
        <input type="text" name="valor" id="valor">
        <br><br>
        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" id="quantidade">
        <br><br>
        <label for="quantidade">Descrição:</label>
        <input type="text" name="descricao" id="descricao">
        <br><br>
        <input type="submit" value="Cadastrar" name="btnCadastrar">
    </form>
</body>
</html>