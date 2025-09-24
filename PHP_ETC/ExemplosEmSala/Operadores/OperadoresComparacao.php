<?php 
    $numero1 = 10;
    $numero2 = 5;
    $numero3 = "10";
    //Não se pode usar echo para apresentar valores falso.
    
    /* "$numero1 == $numero2 : ".($numero1 == $numero2) ."\n".
    "$numero1 == $numero2 : ".($numero1 != $numero2) ."\n".*/
    
    //igual ou diferente.
    echo nl2br("$numero1 == $numero2 :");
    var_dump($numero1 == $numero2);
    echo nl2br("\n$numero1 != $numero2 : ");
    var_dump($numero1 != $numero2);
   
    //Maior ou menor.
    echo nl2br("\n$numero1 < $numero2 :");
    var_dump($numero1 < $numero2);
    echo nl2br("\n$numero1 > $numero2 :");
    var_dump($numero1 > $numero2);
    
    //Maior ou igual
    echo nl2br("\n$numero1 <= $numero2 :");
    var_dump($numero1 <= $numero2);
    echo nl2br("\n$numero1 >= $numero2 :");
    var_dump($numero1 >= $numero2);
    echo nl2br("\n$numero2 <= $numero2 :");
    var_dump($numero2 <= $numero2);
    
    //Idententico e não identico (Verifica se o tipo e o valor são iguais.)
    echo nl2br("\n$numero1 === $numero3 :");
    var_dump($numero1 === $numero3);
    echo nl2br("\n$numero1 !== $numero3 :");
    var_dump($numero1 !== $numero3);
?>