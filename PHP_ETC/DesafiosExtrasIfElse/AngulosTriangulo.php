<?php 
    $angulo1 = 45;
    $angulo2 = 45;
    $angulo3  = 120;
    
    if (($angulo1 == 90) or ($angulo2 == 90) or ($angulo3 == 90)) {
        echo "Triângulo retângulo";
    }
    else if (($angulo1 > 90) or ($angulo2 > 90) or ($angulo3 > 90)) {
        echo "Trângulo Obtusângulo";
    }
    else if (($angulo1 < 90) and ($angulo2 < 90) and ($angulo3 < 90)) {
        echo "Triângulo Acutângulo";
    }
?>