<?php 
    $i = 0;
    $a = 0;
    $num=0;
    
    while ($a <= 10 ){
        
        while ($i <= 10) {
            $conta = $i * $num;
            echo "$num x $i = $conta<br>";
            $i++; 
        }
        
        echo "<br>";
        $i=0;
        $num++;
        $a++;
    }
    ?>