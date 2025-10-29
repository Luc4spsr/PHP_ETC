<?php  
    include_once('Calculadora.php');
    $calcular = new calculadora(10, 20);
    $calcular->somaNumeros();
    echo '<br>';
    $calcular->subtracaoNumeros(); 
    echo '<br>';
    $calcular->multiplicacaoNumeros(); 
    echo '<br>';
    $calcular->divisaoNumeros();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos</title>
</head>
<body style='text-align:center;'>
    <h1>Calculadora</h1>
    <form action="" method="post">
        <label>Digite o primeiro número:</label>
        <br>
        <input placeholder="Número" autofocus type="number" name="numero1" id="">
        <br><br>
        <label>Digite o segundo número:</label>
        <br>
        <input placeholder="Número"type="number" name="numero2" id="">
        <br><br>
        <input type="submit" value="+" name="">
        <input type="submit" value="-" name="">
        <input type="submit" value="/" name="">
        <input type="submit" value="*" name="">
    </form>
</body>
</html>