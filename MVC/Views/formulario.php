<?php 
// formulario.php
// $veiculo será null para novo registro, ou um array para edição
$is_edit = $veiculo !== null;
$titulo = $is_edit ? "Editar Veículo (Placa: " . $veiculo['placa'] . ")" : "Novo Veículo";
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $titulo; ?></title>
</head>
<body>
    <h2><?php echo $titulo; ?></h2>

    <form method="POST" action="index.php?action=salvar">
        <label for="placa">Placa (Chave Primária):</label><br>
        <input type="text" id="placa" name="placa" 
               value="<?php echo $is_edit ? htmlspecialchars($veiculo['placa']) : ''; ?>" 
               <?php echo $is_edit ? 'readonly' : 'required'; ?>><br><br>
        
        <?php if ($is_edit): ?>
            <input type="hidden" name="placa" value="<?php echo htmlspecialchars($veiculo['placa']); ?>">
        <?php endif; ?>

        <label for="renavan">Renavan:</label><br>
        <input type="text" id="renavan" name="renavan" 
               value="<?php echo $is_edit ? htmlspecialchars($veiculo['renavan']) : ''; ?>" required><br><br>

        <label for="ano_fabricacao">Ano de Fabricação:</label><br>
        <input type="number" id="ano_fabricacao" name="ano_fabricacao" 
               value="<?php echo $is_edit ? htmlspecialchars($veiculo['ano_fabricacao']) : ''; ?>" required><br><br>
        
        <label for="marca">Marca:</label><br>
        <input type="text" id="marca" name="marca" 
               value="<?php echo $is_edit ? htmlspecialchars($veiculo['marca']) : ''; ?>" required><br><br>

        <label for="cor">Cor:</label><br>
        <input type="text" id="cor" name="cor" 
               value="<?php echo $is_edit ? htmlspecialchars($veiculo['cor']) : ''; ?>" required><br><br>

        <p>Combustível:</p>
        <?php $combustivel_atual = $is_edit ? $veiculo['combustivel'] : ''; ?>
        
        <input type="radio" id="gasolina" name="combustivel" value="Gasolina" 
               <?php echo $combustivel_atual === 'Gasolina' ? 'checked' : ''; ?> required>
        <label for="gasolina">Gasolina</label><br>

        <input type="radio" id="alcool" name="combustivel" value="Álcool" 
               <?php echo $combustivel_atual === 'Álcool' ? 'checked' : ''; ?>>
        <label for="alcool">Álcool</label><br>

        <input type="radio" id="flex" name="combustivel" value="Flex" 
               <?php echo $combustivel_atual === 'Flex' ? 'checked' : ''; ?>>
        <label for="flex">Flex</label><br><br>

        <button type="submit"><?php echo $is_edit ? 'Salvar Alterações' : 'Cadastrar Veículo'; ?></button>
        <a href="index.php">Cancelar</a>
    </form>
</body>
</html>