<?php 
    echo "Resolva as opreções a seguir: Utilize os operadores de atribuição para resolver";

    $PrimeiroNumero = 20;
    $SegundoNumero = 10;

    echo nl2br (
        "\n\nPrimeiro Número: $PrimeiroNumero" .
        "\nSegundo Número; $SegundoNumero" .

        "\n\nSomando 5 Unidades da varável Primeiro número: ". ($PrimeiroNumero = $PrimeiroNumero + 5) .
        //Atruição aninhada.

        "\nSubtraindo 2 Unidades da varável segundo número: ". ($SegundoNumero  -= 2) .
        "\nMultiplicando a varável primeiro número por 5: ". ($PrimeiroNumero  *= 5) .
        "\nDividindo segundo número por 4: ". ($SegundoNumero  /= 4) .
        //atribuição combinada.

        "\nO módulo de Primeiro número pelo segundo número é: ". ($PrimeiroNumero % $SegundoNumero)
        // % é módulo ou resto da divisão.
    );
?>