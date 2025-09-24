<?php 
    $num1 = 10;
    $num2 = 10;
    $num3 = 15;
    $nome1 = "Ricardo";
    $nome2 = "ricardo";
    $nome3 = "Ricardo";    
    
    echo nl2br(
        "Resolva o problema a segui:Utilize os Operadores de comparação que foram té aqui estudados.\n".
        "\nPrimeiro número = $num1".
        "\nSegundo número = $num2".
        "\nTerceiro número = $num3".
        "\nPrimeiro nome = $nome1".
        "\nSegundo nome = $nome2".
        "\nTerceiro nome = $nome3\n"
    );

    echo nl2br("\nO primeiro nome é diferente do segundo nome :");
    var_dump($nome1 != $nome2);
    echo nl2br("\nO primeiro nome é diferente do terceiro nome :");
    var_dump($nome1 != $nome3);
    echo nl2br("\nO primeiro nome é diferente do segundo nome :");
    var_dump($nome1 != $nome2);
    echo nl2br("\nO primeiro nome é igual ao terceiro nome :");
    var_dump($nome1 == $nome3);

    echo nl2br("\n\nO primeiro número é diferente do segundo número");
    var_dump($num1 != $num2);
    echo nl2br("\nO primeiro número é diferente do terceiro número");
    var_dump($num1 != $num3);
    echo nl2br("\nO primeiro número é igual ao segundo número");
    var_dump($num1 == $num2);
    echo nl2br("\nO primeiro número é igual ao terceiro número");
    var_dump($num1 == $num3);
    
    echo nl2br("\n\nO Primeiro Número é identico ao Segundo Número :");
    var_dump($num1 === $num2);
    echo nl2br("\nO Primeiro Número é identico do Terceiro Número :");
    var_dump($num1 === $num3);
    echo nl2br("\nO Primeiro Número não é identico ao Segundo Número :");
    var_dump($num1 !== $num2);
    echo nl2br("\nO Primeiro Número não é identico ao Terceiro Número :");
    var_dump($num1 !== $num3);
    
    echo nl2br("\n\nO Primeiro Número é maior que o Segundo Número: ");
    var_dump($num1 > $num2);
    echo nl2br("\nO Primeiro Número é maior que o Terceiro Número: ");
    var_dump($num1 > $num3);
    echo nl2br("\nO Primeiro Número é menor que o Segundo Número: ");
    var_dump($num1 > $num2);
    echo nl2br("\nO Primeiro Número é menor que o Terceiro Número: ");
    var_dump($num1 < $num3);
    
    echo nl2br("\n\nO Primeiro Número é maior ou igual ao Segundo Número: ");
    var_dump($num1 >= $num2);
    echo nl2br("\nO Primeiro Número é maior ou igual ao Terceiro Número: ");
    var_dump($num1 >= $num2);
    echo nl2br("\nO Primeiro Número é menor ou igual ao Segundo Número: ");
    var_dump($num1 <= $num2);
    echo nl2br("\nO Primeiro Número é menor ou igual ao Terceiro Número:");
    var_dump($num1 <= $num3);

?>