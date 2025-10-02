<?php
    $carros = [
        'Uno' => 1991,
        'Palio' => 2000,
        'Gol' => 2025,
        'Passat' => 1998,
        'Nissan' => 2024,
        'Ferrari' => 2026
    ];
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!empty($_POST['modelo'])) {
            $modelo= $_POST['modelo'];
            foreach ($modelo as $ano) {
                    echo "$ano ";
            }
        }
        else {
            echo "Selecione um dos modelos!";
        }
    }
    else {
        echo "Você precisa enviar pelo formulário!";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox</title>
</head>

<body>
    <form action="FormularioChechbox.php" method="POST">
        <?php foreach($carros as $modelo => $ano) :?>
        <input type="checkbox" name="modelo[]" id="" value="<?php echo $modelo?>">
        <label for=""> <?php echo $modelo?> </label>
        <br>
        <?php endforeach ?>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>