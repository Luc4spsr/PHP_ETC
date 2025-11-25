<?php 
// lista.php
// $veiculos é o array de dados vindo do Controller
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Veículos</title>
</head>
<body>
    <h2>Lista de Veículos Cadastrados</h2>
    <a href="index.php?action=salvar">Novo Cadastro</a>
    <hr>
    
    <?php if (empty($veiculos)): ?>
        <p>Nenhum veículo cadastrado.</p>
    <?php else: ?>
        <table border="1" style="width:100%;">
            <thead>
                <tr>
                    <th>Placa</th>
                    <th>Renavan</th>
                    <th>Ano</th>
                    <th>Marca</th>
                    <th>Cor</th>
                    <th>Combustível</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($veiculos as $veiculo): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($veiculo['placa']); ?></td>
                        <td><?php echo htmlspecialchars($veiculo['renavan']); ?></td>
                        <td><?php echo htmlspecialchars($veiculo['ano_fabricacao']); ?></td>
                        <td><?php echo htmlspecialchars($veiculo['marca']); ?></td>
                        <td><?php echo htmlspecialchars($veiculo['cor']); ?></td>
                        <td><?php echo htmlspecialchars($veiculo['combustivel']); ?></td>
                        <td>
                            <a href="index.php?action=editar&placa=<?php echo urlencode($veiculo['placa']); ?>">Editar</a> |
                            <a href="index.php?action=deletar&placa=<?php echo urlencode($veiculo['placa']); ?>" 
                               onclick="return confirm('Tem certeza que deseja deletar o veículo <?php echo htmlspecialchars($veiculo['placa']); ?>?');">Deletar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</body>
</html>