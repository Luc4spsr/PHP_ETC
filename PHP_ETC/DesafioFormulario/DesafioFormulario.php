<?php 
    $anos = ['1º Ano', '2º Ano', '3º Ano'];
    $disciplinas = ['Português', 'Matemática', 'Biologia', 'Física', 'Química'];
    $cidades = ['São Paulo', 'Brasília', 'Minas Gerais', 'Rio de Janeiro'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio Formulário</title>
</head>
<body>
    <form action="resposta.php" method="post">
        <label>Digite um Nome:</label>
        <input type="text" name="nome">
        <br><br>
        
        <label>Informe seu e-mail:</label>
        <input type="email" name="email">
        <br><br>
        
        <label>Selecione Ano de Escolaridade:</label>
        <br>
        <?php foreach ($anos as $ano) : ?> 
            <input type="radio" name="ano" value="<?php echo $ano?>">
            <label><?php echo $ano;?></label>
            <br>
        <?php endforeach ?>
        <br>
        
        <label>Selecione a(s) Suas Disciplina(s)</label>
        <br>
        <?php foreach ($disciplinas as $disciplina) : ?>
            <input type="checkbox" name="disciplina[]" value="<?php echo $disciplina;?>">
            <label><?php echo $disciplina;?></label>
        <?php endforeach ?>
        
        <br><br>
        <label>Escolha Sua Cidade:</label>
        <select name="cidade">
            <?php foreach ($cidades as $cidade) :?>
                <option value="<?php echo $cidade?>"><?php echo $cidade?></option>
            <?php endforeach ?>
        </select>
        
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>