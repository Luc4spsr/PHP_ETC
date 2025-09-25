<?php 
    $idade = 15;
    $testePratico = false;

    if (($idade >= 18) and ($testePratico == true)) {
        echo ("Pode retirar CNH");
    }
    else if (($idade < 18) and ($testePratico == false)) {
        echo ("Não está apto. Reprovado no teste prático e não tem idade");
    }
    else if (($idade < 18)) {
        echo("Reprovado pela idade");
    }
    else {
        echo ("Reprovado pelo teste prático");
    }
?>