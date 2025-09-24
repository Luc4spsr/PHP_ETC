<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <?php
            if (!empty($_GET['numero'])) {
                $numero = $_GET['numero'];
                $contador = 0;
                while ($contador <= 10) {
                $resultado = $contador * $numero;
                echo "$numero x $contador = $resultado <br>";
                $contador++;
                }
            }
            else {
                echo "Número Não Escolhido";
            }
        ?>
    </section>
    <br>
    <a href="index.php"><input type="button" value="Voltar a Página Anterior"></a>
</body>
</html>