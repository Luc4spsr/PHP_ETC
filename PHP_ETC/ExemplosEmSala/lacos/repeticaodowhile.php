<?php 
    if (!empty($_GET['numero'])) {
        
        $numero = $_GET['numero'];
        $contador = 0;

        do {
            echo nl2br ("o número é :$numero\n");
            $numero++;
            $contador++;
        } while ($contador < 5);
    }
    else {
        echo nl2br ("Variável não iniciada");
    }
?>