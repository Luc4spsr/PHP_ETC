<?php 
    $num = $_GET['num'];
    $incrementos = $_GET['incrementos'];
    $contador= 0;
    
    while ($contador < $incrementos) {
        echo  nl2br ("$num \n");
        $num++;
        $contador++;
    }
    
?>