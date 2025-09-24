<?php 
    $dia = $_GET['dia'];

    switch ($dia) {
        case 1:
            echo "Dia $dia - hoje é domingo";
            break;
        case 2:
            echo "Dia $dia - hoje é segunda";
            break;
        case 3:
            echo "Dia $dia - hoje é terça";
            break;
        case 4:
            echo "Dia $dia - hoje é quarta";
            break;
        case 5:
            echo "Dia $dia - hoje é quinta";
            break;
        case 6:
            echo "Dia $dia - hoje é sexta";
            break;
        case 7:
            echo "Dia $dia - hoje é Sábado";
            break;
        default:
            echo "Escolha $dia fora de escopo";
    }

?>