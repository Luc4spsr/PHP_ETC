<?php  
    $nomePessoa = " Caio Ferreira Oliveira Ferreira  ";
    echo nl2br (
        "O valor da variavél nomePessoa é: $nomePessoa".
    
        "\n$nomePessoa tem ".strlen( $nomePessoa) . " caracteres".
        //A função strlen($variavel) retorna quantidade de caracteres de um texto (string).

        "\nO nome Ferreira se inicia na posição: ".strpos($nomePessoa,'Ferreira').
        //A função strpos($variavel, 'palavra no texto') retorna a posição da palavra que está entre ASPAS SIMPLES.

        "\nO nome $nomePessoa com todas as letras em minúsculo: ".strtolower($nomePessoa).
        // A função strtolower($variavel) retorna um texto em letras minúscula.

        "\nO nome $nomePessoa com todas as letras em maiúsculo: ".strtoupper($nomePessoa).
        // A função strtoupper($variavel) retorna um texto em letras maíscula.

        "\nO nome $nomePessoa tem como ultimo sobrenome: ".substr($nomePessoa,14).
        //A função substr($variável,'número da posição') retorna o texto a partir da posição digitada (no caso a posição 14)
        //Note que há um espaço no incio da string da variável $nomePessoa então, esta função retornaria [Oliveira Ferreira]

        "\nQuantidade de Ferreira de $nomePessoa: ".substr_count($nomePessoa,"Ferreira").
        //A função substr_count($variável,'palavra no texto') conta quantas vezes uma palavra no texto digitada entre ASPAS SIMPLES aparece.
        
        "\nA quantidade de caracteres de $nomePessoa sem espaços no inicio e no fim tem ".strlen(trim($nomePessoa))
        //Neste caso os espaços finais e inicias são removidos e então é realizado a contagem de caracteres.
    );
?>