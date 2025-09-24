<?php 
    $numero = $_GET['numero'];
    
    switch ($numero) {
        case 0 :
            echo ("Foi escolhido o digito 0");
            break;
        case 1 :
            echo ("Foi escolhido o digito 1");
            break;
        case 2:
            echo ("Foi escolhido o digito 2");
            break;
        case 3:
            echo ("Foi escolhido o digito 3");
            break;
        case 4:
            echo ("Foi escolhido o digito 4");
            break;
        case 5:
            echo ("Foi escolhido o digito 5");
            break;
        default:
            echo("Caso inexistente");
    }
    echo nl2br ("\n");
    var_dump($_GET);
?>
