<?php 
    $nome1 = "Ana Paula";
    $nome2 = "Ana Luiza Moura";
    $nome3 = "José Carlos";
    $numero1 = 80;
    $numero2 = 80;
    $numero3 = 150.15;

    echo nl2br (
        "Desenvolva a atividade a seguir: os seis dados (valores) logo abaixo são variáveis, portato valores dinâmico".
        "\n\nPrimeiro Nome = $nome1" .
        "\nSegundo Nome = $nome2" .
        "\nTerceiro Nome = $nome3" .

        "\n\nPrimeiro Número = $numero1" . 
        "\nSegundo Número= $numero2" . 
        "\nTerceiro Número = $numero3" .

        "\n\nO valor da variável Primeiro Nome é: $nome1" . 
        "\nO valor da variável Terceiro Nome é: $nome3" . 
        "\n$nome1 e $nome3 são casados e possuem uma filha: $nome2" .
        "\n$nome2 é estudade e ganha uma bolsa de: R$ ". number_format($numero3, 2, ',') . " por mês equivalente à: R$ " .number_format($numero3 * 12, 2, ',') . 
        "\no nome $nome2 possui " . strlen($nome2) . " o último sobrenome é : " .substr($nome2, 10) .
        "\nIncrementando uma unidade (Pós Incremento) à variável Primeiro Número: " .$numero1++ . 
        "\nO novo valor da variável Primeiro Número é : $numero1" .
        "\nA raiz quadrada da variável PrimeiroNúmero é : " .sqrt($numero1)
        "
        da
        "
    );

    echo nl2br ("\n\nO valor $numero1 == Valor $numero2 : ");
    var_dump($numero1 == $numero2);

    echo nl2br ("\nO valor $numero2 <= Valor $numero1 : ");
    var_dump($numero2 <= $numero1);

    echo nl2br ("\n$numero1 >= $numero2 xor $numero1 != $numero2 : ");
    var_dump(($numero1 >= $numero2) xor ($numero1 != $numero2));

    echo nl2br("\n$numero2 == $numero2 and $numero1 != $numero2 : ");
    var_dump(($numero2 == $numero2) and ($numero1 != $numero2));
?>