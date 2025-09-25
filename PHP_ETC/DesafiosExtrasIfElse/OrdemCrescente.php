<?php 
    $num1 = 1;
    $num2 = 5;
    $num3 = 3;
    $aux = 0;
    if ($num1 > $num2) {
        $aux = $num1;
        $num1 = $num2;
        $num2 = $aux;
    }

    if ($num1 > $num3) {
        $aux = $num1;
        $num1 = $num3;
        $num3 = $aux;
    }

    if ($num2 > $num3) {
        $aux = $num2;
        $num2 = $num3;
        $num3 = $aux;
    }

    echo "Ordem crescente: $num1, $num2, $num3";
?>