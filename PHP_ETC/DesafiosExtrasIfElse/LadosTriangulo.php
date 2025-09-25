<?php 
    $lado1 = 3;
    $lado2 = 2; 
    $lado3 = 3;

    if (($lado1 == $lado2) and ($lado3== $lado1)) {
        echo "Triangulo equilátero";
    }
    else if (($lado1 == $lado2) or ($lado1 == $lado3) or ($lado2 == $lado3)) {
        echo "Triangulo isósceles";
    }
    else {
        echo "Triangulo escaleno";
    }
?>