<?php 
    $nomes = ['Maria', 'Pedro', 'João', 'Ana', 'Fernando'];
    if(!empty($_POST['nome'])) {    
        echo "Você escolheu ".$_POST['nome'];
    }
    else {
        echo "Nenhum selecionado";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Radio</title>
</head>
<body>
    <form action="" method="post">
        <?php 
            foreach ($nomes as $nome) : 
        ?>
            <input type="radio" name="nome" value="<?php echo "$nome"?>">
            <label for=""> <?php echo "$nome"?> </label>
            <br>
        <?php endforeach ?>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>