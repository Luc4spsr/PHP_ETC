<?php
    if ( !empty($_GET['numero']) and is_numeric($_GET['numero']) ) {
        $numero = $_GET['numero'];
        for ($cont = 0; $cont <= 10; $cont++) {
            echo nl2br ("$numero + $cont = ".$numero+$cont."\n");
        }
    } 
    else {
        echo "valor inválido";
    }
?>