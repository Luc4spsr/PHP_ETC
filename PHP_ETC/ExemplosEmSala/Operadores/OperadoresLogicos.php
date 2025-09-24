<?php 
    $numero1 = 12;
    $numero2 = 10;
    $nome1 = "Andre";
    $nome2 = "andre";

    echo ( "($nome1 == $nome2) e ($numero1 > $numero2): ");
    var_dump(($nome1 == $nome2) and ($numero1 > $numero2));
    
    echo nl2br ( "\n($numero1 <= $numero2) ou ($numero1 == $numero1): ");
    var_dump(($numero1 <= $numero2) or ($numero1 == $numero1));
   
    echo nl2br ( "\n($numero2 > $numero1) ou exclusivo (" . ( strlen($nome1) ." == ". strlen($nome2)) . "): ");
    var_dump(($numero2 > $numero1) xor (strlen($nome1) == strlen($nome2)));

    echo nl2br ("\n!($numero1 >= $numero2) : ");
    var_dump(!($numero1 >= $numero2));
?>
