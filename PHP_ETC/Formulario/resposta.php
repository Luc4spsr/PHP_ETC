<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incremento</title>
</head>
<body>
    <?php 
    if (!empty($_GET['numero'])) {
        
        $numero = $_GET['numero'];
        $contador = 0;

        do {
            echo nl2br ("o número é :$numero\n");
            $numero++;
            $contador++;
        } while ($contador < 5);
    }
    else {
        echo nl2br ("Variável não iniciada");
    }
?>
    <br>
    <a href="index.php"><input type="button" value="Voltar"></a>
</body>
</html>