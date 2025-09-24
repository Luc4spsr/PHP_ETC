<?php 
    $numero = 4;
    $contador = 0;

    while ($contador <= 10) {
        $resultado = $numero * $contador;
        echo nl2br("$numero X $contador = $resultado\n");
        $contador++;
    }
?>