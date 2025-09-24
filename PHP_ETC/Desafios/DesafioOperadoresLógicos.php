<?php 
    $numero1 = 5;
    $numero2 = 5;
    $numero3 = 10;
    $nome1 = "Renata";
    $nome2 = "renata";
    $nome3 = "Renata";
    
    echo nl2br (
        "Resolva o problema a seguir: Utilize os operadores de Comparação que foram aé aqui estudados" .
        "\n\nPrimeiro Número = $numero1" . 
        "\nSegundo Número = $numero2" . 
        "\nTerceiro Número = $numero3" . 
        "\nPrimeiro Nome = $nome1" .
        "\nSegundo Nome = $nome2" .
        "\nTerceiro Nome = $nome3"
    );
    
    //Conjunção and
    //Disjunção inclusiva or
    //Disjunção exclusiva xor
    //negação !

    echo nl2br("\n\n(O Primeiro Nome é diferente do Segundo Nome) E (O Primeiro Número é igual ao Segundo Número) Resultado = ");
    var_dump(($nome1 != $nome2) and ($numero1 == $numero2));
    echo nl2br("\n(O Primeiro Número é igual do Segundo Número) E (O Primeiro Nome é diferente do Terceiro Nome) Resultado = ");
    var_dump(($numero1 == $numero2) and ($nome1 != $nome3));
    echo nl2br("\n(O Primeiro Número é maior que o Segundo Número) E (O Primeiro Numero é menor que o Terceiro Numero) Resultado = ");
    var_dump(($numero1 > $numero2) and ($numero1 < $numero3));
    echo nl2br("\n(O Segundo Numero é maior ou igual ao Terceiro Numero) E (O Terceiro Número é menor ou igual ao Segundo Número) Resultado = ");
    var_dump(($numero2 >= $numero3) and ($numero3 <= $numero2));

    echo nl2br("\n\n(O Primeiro Nome é diferente do Segundo Nome) Ou (O Primeiro Número é igual ao Segundo Número) Resultado = ");
    var_dump(($nome1 != $nome2) or ($numero1 == $numero2));
    echo nl2br("\n(O Primeiro Número é igual do Segundo Número) Ou (O Primeiro Nome é diferente do Terceiro Nome) Resultado = ");
    var_dump(($numero1 == $numero2) or ($nome1 != $nome3));
    echo nl2br("\n(O Primeiro Número é maior que o Segundo Número) Ou (O Primeiro Numero é menor que o Terceiro Numero) Resultado = ");
    var_dump(($numero1 > $numero2 ) or ($numero1 < $numero3));
    echo nl2br("\n(O Segundo Número é maior ou igual ao Terceiro Numero) Ou (O Terceiro Número é menor ou igual ao Segundo Número) Resultado = ");
    var_dump(($numero2 >= $numero3) or ($numero3 <= $numero2));

    echo nl2br("\n\n(O Primeiro Nome é diferente do Segundo Nome) Ou...Ou (O Primeiro Número é igual ao Segundo Número) Resultado = ");
    var_dump(($nome1 != $nome2 ) xor ($numero1 == $numero2));
    echo nl2br("\n(O Primeiro Número é igual do Segundo Número) Ou...Ou (O Primeiro Nome é diferente do Terceiro Nome) Resultado = ");
    var_dump(($numero1 == $numero2) xor ($nome1 != $nome3));
    echo nl2br("\n(O Primeiro Número é maior que o Segundo Número) Ou...Ou (O Primeiro Numero é menor que o Terceiro Numero) Resultado = ");
    var_dump(($numero1 > $numero2) xor ($numero1 < $numero3));
    echo nl2br("\n(O Segundo Numero é maior ou igual ao Terceiro Numero) Ou...Ou (O Terceiro Número é menor ou igual ao Segundo Número) Resultado = ");
    var_dump(($numero2 >= $numero3) xor ($numero3 <= $numero2));

    echo nl2br("\n\nA negação de ((O Primeiro Nome é diferente do Segundo Nome) E (O Primeiro Número é igual ao Segundo Número)) Resultado = ");
    var_dump(!(($nome1 != $nome2) and ($numero1 == $numero2)));
    echo nl2br("\nA negação de ((O Primeiro Numero é igual do Segundo Numero) E (O Primeiro Nome é diferente do Terceiro Nome)) Resultado = ");
    var_dump(!(($numero1 == $numero2) and ($nome1 != $nome3)));
?>