<?php 
    $primeiroNumero = 10.3;
    $segundoNumero = 4.7;

    echo nl2br(
        "Resolva o problema a seguir: utilize as funções matemáticas até aqui estudadas para reolver:" .
        "\n\nPrimeiro número: $primeiroNumero" .
        "\nSegundo número: $segundoNumero" .

        "\n\nResultado do Primeiro Número $primeiroNumero arredondado com a função round: ".round($primeiroNumero) .
        "\nResultado do Segundo Número $segundoNumero arredondado com a função round: ".round($segundoNumero) .
        //A função round($variável) arredondado aritmeticamente um número real.

        "\nResultado do Primeiro Número $primeiroNumero arredondado com a função floor: ".floor($primeiroNumero). 
        "\nResultado do Segundo Número $segundoNumero arredondado com a função floor: ".floor($segundoNumero) .
        //A função floor($variável) arredonda um número real para baixo.

        "\nResultado do Primeiro Número $primeiroNumero arredondado com a função ceil: ".ceil($primeiroNumero) .
        "\nResultado do Segundo Número $segundoNumero arredondado com a função ceil: ".ceil($segundoNumero) .
        //A função ceil($variável) arredonda um número real para cima.

        "\n A potetência de ". floor($primeiroNumero) . " elevado a " . ceil($segundoNumero) . " é ". pow(floor($primeiroNumero), ceil($segundoNumero)) .
        //A função pow($variavel1,$variavel2) eleva a primeira variavel a segunda.
        //Também é possivel usar potência com o operador [**]

        "\nA raiz Quadrada de " .floor($segundoNumero) . " é: " . sqrt(floor($segundoNumero))
        //a função sqrt($variável) faz a raiz quadrada.
    );
?>
