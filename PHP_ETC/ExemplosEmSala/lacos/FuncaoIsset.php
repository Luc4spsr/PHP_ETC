<?php 
    //isset verifica se a variavel EXISTE ao colocar na url 
    if ( isset($_GET['numero']) and isset($_GET['incrementos']) ) {
        
        $numero = $_GET['numero'];
        $incrementos = $_GET['incrementos'];
        $contador= 0;

        while ($contador < $incrementos) {
            echo  nl2br ("$numero \n");
            $numero++;
            $contador++;
        }

    }
    else if ( isset($_GET['numero']) xor isset($_GET['incrementos']) ){
        
        if (isset($_GET['numero'])) {
            echo "Variável incrementos não criada.";
        }

        else {
            echo "Variável numero não criada";
        }
    } 
    else {
            echo "Variável numero e variavel incrementos não criada";
        }
    
    ?>