<?php
    $numeroPrimeiro = 5;
    $numeroSegundo = 54.9;
    $nomePessoa = "Lucas";
    
    echo nl2br (
        "O valor da a variavél numeroPrimeiro é: $numeroPrimeiro".
        
        "\nO valor da a variavél numeroSegundo é: " .number_format($numeroSegundo, 2, ',').
        //A função number_format($variável, quantidade de casas após a virgula, '. ou ,')
        //Formata um número real, escolhendo a quantidade de casas que aparecem após o ponto, e se será usada uma vírgula ou ponto.
        
        "\nO valor da variavél nomePessoa é: $nomePessoa"
    );
?>