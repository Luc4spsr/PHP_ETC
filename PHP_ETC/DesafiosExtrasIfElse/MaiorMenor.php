<?php 
    $num1 = 3;      
    $num2 = 4;
    $num3 = 6;
    $maior = 0;

    if ($num1 > $num2) {
        $maior = $num1;
    }
    else if ($num1 > $num3) {
        $maior = $num1;
    }
    else if ($num2 > $num3) {
        $maior = $num2;
    }
    else {
        $maior = $num3;
    }
    echo nl2br("entre $num1, $num2, $num3 \n$maior é o maior");
?>