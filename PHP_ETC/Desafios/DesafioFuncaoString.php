<?php 
    $texto = "  De grão em grão, a galinha enche o papo  ";
    echo nl2br ( 
        "$texto" .
        //echo funciona sem (), mas para usar nl2br é necessário usar (). 
        
        "\n\nO texo tem ".strlen($texto)." caracteres" .
        //A função strlen($variavel) retorna quantidade de caracteres de um texto (string).
        
        "\nA palavra galinha começa na posição: ".strpos($texto,'galinha') .
        //A função strpos($variavel, 'palavra no texto') retorna a posição da palavra que está entre ASPAS SIMPLES.
        
        "\nO texto todo em letras minúscula: ".strtolower($texto) .
        // A função strtolower($variavel) retorna o texto em letras minúscula.
        
        "\nO texto todo em letras minúscula: ".strtoupper($texto) .
        // A função strtoupper($variavel) retorna o texto em letras maíscula.

        "\nParte do texto: ".substr($texto, 13) . 
        //A função substr($variável,'número da posição') retorna o texto a partir da posição digitada (no caso a posição 13)
        //Note que há espaços no incio da string da variável $texto então, esta função retornaria [grão, a galinha enche o papo]   

        "\nA palavra grão aparece ".substr_count($texto,'grão'). " vezes no texto" .
        //A função substr_count($variável,'palavra no texto') conta quantas vezes uma palavra no texto digitada entre ASPAS SIMPLES aparece.

        "\n O texto tem ".strlen(trim($texto)). " caracteres sem os esaços finais e iniciais"
        //A função trim($variável) remove os espaços no inicio e no final do texto.
        //Neste caso os espaços finais e inicias são removidos e então é realizado a contagem de caracteres.
    );
?>
