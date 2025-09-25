<?php
    $numero1 = 20;
    $nome = "Paulo Henrique";
    $valor = 2.50;

    echo nl2br (
        "O número Primeiro é: $numero1".
        "\n$nome recebeu: ".number_format($valor, 2, ',')
        //A função number_format($variável,quantidade de casas após a virgula,". ou ,")
        //Formata um número real, escolhendo a quantidade de casas que aparecem após o ponto, e se será usada uma vírgula ou ponto.
    );
?>