<?php 
    $numero1 = 5;
    echo nl2br ( 
        //Pré incremento (++$$variável) incrementa um número (adiciona + 1) e mostra na tela.
        "$numero1 + 1 = ".++$numero1.
       
        //Pré decremento (--$$variável) incrementa um número (subtrai - 1) e mostra na tela.
        "\n$numero1 - 1 = ".--$numero1.
        
        //Pós incremento ($variável++) mostra um número na tela primeiro e após mostra-lo o incrementa.
        "\n\n".$numero1++. " (Nesta linha o pós incremento é feito porém, não é mostrado)".
        "\n$numero1". " (Variável após incremento)".

        //Pós decremento ($variável--) mostra um número na tela primeiro e após mostra-lo o decrementa.
        "\n\n".$numero1--. " (Nesta linha o pós decremento é feito porém, não é mostrado)".
        "\n $numero1". " (Variável após decrecremento)"
    );
?>