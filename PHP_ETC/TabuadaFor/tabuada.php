<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>

<body>
    <?php
        if ( !empty($_POST['numero']) ) {
            $numero = $_POST['numero'];
            for ($cont = 0; $cont <= 10; $cont++) {
                echo nl2br ("$numero + $cont = ".$numero+$cont."\n");
            }
        } 
        else {
            echo "valor inválido";
        }
    ?>
    <br>
    <a href="index.html"><input type="button" value="Voltar a Página Anterior"></a>
</body>


</html>