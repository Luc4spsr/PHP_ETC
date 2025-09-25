<?php 
    $numeroPrimeumeroSegundo = 10;
    $numeroSegundo = 2;
    $numeroTerceiro = 3.4;

    echo nl2br (
        "$numeroTerceiro arredondado aritmeticamente :".round($numeroTerceiro) .
        //A função round($variável) arredondado aritmeticamente um número real.

        "\n$numeroTerceiro arredondado para baixo ".floor($numeroTerceiro) .
        //A função floor($variável) arredonda um número real para baixo.

        "\n $numeroTerceiro arredondado para cima ".ceil($numeroTerceiro) .
        //A função ceil($variável) arredonda um número real para cima.

        "\npotência de $numeroPrimeumeroSegundo e $numeroSegundo : ".pow($numeroPrimeumeroSegundo, $numeroSegundo) .
        //a função pow($variavel1,$variavel2) eleva a primeira variavel a segunda.
        //Também é possivel usar potência com o operador [**]
        
        "\na raiz quadrada de $numeroPrimeumeroSegundo : ".sqrt($numeroPrimeumeroSegundo) .
        //a função sqrt($variável) faz a raiz quadrada.

        "\n A raiz quadada de (".(pow($numeroPrimeumeroSegundo, $numeroSegundo)).") é : ". sqrt(pow($numeroPrimeumeroSegundo, $numeroSegundo))
    );
?>