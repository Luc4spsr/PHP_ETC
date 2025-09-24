<?php 
    //Função empty verifica se a variável NÂO EXISTE ao colocar na url é preciso negar (inverter o valor) com ! 
    //para verificar se ela EXISTE
    if ( !empty($_GET['numero']) and !empty($_GET['incrementos']) ) {
        $numero = $_GET['numero'];
        $incrementos = $_GET['incrementos'];
        $contador= 0;

        while ($contador < $incrementos) {
            echo  nl2br ("$numero \n");
            $numero++;
            $contador++;
        }
    }
    
    else if ( !empty($_GET['numero']) xor !empty($_GET['incrementos']) ) {
        
        if (empty($_GET['numero'])) {
            echo "Variável numero não inciada";
        }
        
        else {
            echo "Variável incrementos não inciada";
        }
    }
    
    
    else {
        echo "Variáveis não iniciadas";
    }    
?>