<?php
    require ('dados.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Tecnologia</title>
</head>
<body>
    <form action="Dados.php" method="post">
        <label for="">Selecione uma opção:</label>
        <br>
        <select name="selecao" id="">
            <?php foreach ($tecnologias as $tecnologia) : ?>
            <option value="<?php echo $tecnologia; ?>"><?php echo $tecnologia;?></option>
            <?php endforeach ?>
        </select>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>