<?php 
    $primeiroNumero = 10;
    
    //Trabalhando operadores de atribuição aninhada
    echo nl2br (
        "A forma aninhada da variável Primeiro Número é ". ($primeiroNumero = ($segundoNumero = 10) + 15) .
        "\n O valor da variavél é primeiro número : $primeiroNumero" .
        "\nO valor da variável Segundo Número é : $segundoNumero" .
        
        //Trabalhando Operadores de atribuição combinado
        "\nA forma combinada da variável Segundo Número é : ". ($segundoNumero *= 4) .
        // A mesma coisa que $segundoNumero = ($segundoNumero * 4)
        "\n O valor da variavél primeiro número: $primeiroNumero" .
        "\nO valor da variável Segundo Número é : $segundoNumero" .

        //Trabalhando Operadores de atribuição referência
        "\n O valor da Variável Primeiro Número como referência ao Segundo Número é :". ($segundoNumero = &$primeiroNumero) .
        "\n O valor da variavél é primeiro número: $primeiroNumero" .
        "\nO valor da variável Segundo Número é : $segundoNumero"
    );
?>  