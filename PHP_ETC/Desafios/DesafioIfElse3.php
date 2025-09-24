<?php 
    $nome = "Matheus Alexandre";
    $faltas = 21;
    $nota1 = 5;
    $nota2 = 5;
    $nota3 = 5;
    $nota4 = 5;
    $media = ($nota1+$nota2+$nota3+$nota4)/4;
    
    if ($media >= 7 and $faltas <= 20) {
        echo "A media das notas do Aluno: $nome é : $media quantidade de faltas : $faltas sua situação final é aprovado!";
    } 

    else if (($media < 7 and $media >= 2) and ($faltas <= 20)) {
        echo "A media das notas do Aluno: $nome é : $media quantidade de faltas : $faltas sua situação final é recuperação!";
    }

    else if ($media < 2.0 or $faltas > 20) {
        echo "A media das notas do Aluno: $nome é : $media quantidade de faltas : $faltas sua situação final é reprovado!";
    }
?>