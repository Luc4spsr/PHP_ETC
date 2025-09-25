<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senha</title>
</head>

<body>
    <?php
        if (!empty($_POST['senha']) and is_numeric($_POST['senha'])) {
            $senha = $_POST['senha'];
            echo "Sua senha é : $senha";
        }
        else if (!is_numeric($_POST['senha'])) {
            echo "Sua senha deve ter apenas números";
        }
        else {
            echo "Senha inválida";
        }
    ?>
</body>

</html>