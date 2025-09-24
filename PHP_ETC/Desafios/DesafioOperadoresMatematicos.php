<?php
    $numero1 = -4;
    $numero2 = 2;
    
    echo nl2br (
        "Resolva as operações a seguir: ". 
        "\nPrimeiro numero = $numero1, Segundo Número =$numero2" .
        
        "\n\nsoma de ($numero1) + ($numero2) é = ".$numero1+$numero2 .
        //operador de soma.
        
        "\nA subtração de ($numero1) - ($numero2) é = ".$numero1-$numero2 .
        //Operador de subtração.
        
        "\nA multiplicação de ($numero1) * ($numero2) é = ".$numero1*$numero2 .
        //Operador de multiplicação.

        "\nA divisão de ($numero1) / ($numero2) é = ".$numero1/$numero2 .
        //Operadore de divisão

        "\nA exponenciação de ($numero1) ** ($numero2) é = ".$numero1**$numero2 .
        //Operador de potência

        "\nO inverso de $numero1 é: ".-$numero1
        //Inverte o sinal de um número -$variável
    );
?>