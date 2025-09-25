<?php 
    $numero1 = 10;
    $numero2 = 2;
    echo nl2br (
        "$numero1 + $numero2 = " . ($numero1 + $numero2) .
        //Operadora de adição +.
        
        "\n$numero1 - $numero2 = " . ($numero1 - $numero2) .
        //Operador de subtração -.
        
        "\n$numero1 * $numero2 = " . ($numero1 * $numero2) .
        //operador de multiplicação *.
        
        "\n$numero1 / $numero2 = " . ($numero1 / $numero2) .
        //Operador de divisão /.
        
        "\n$numero1 % $numero2 = " . ($numero1 % $numero2) .
        //Operador de resto de divisão (módulo) %.
        
        "\n$numero1 ** $numero2 = " . ($numero1 ** $numero2) .
        //Operador de potência **.
        
        "\nA inversão de $numero1 é: " . (-$numero1)
        //Inverte o sinal do número -$variável.
    );
?>