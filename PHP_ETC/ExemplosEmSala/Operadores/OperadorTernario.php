<?php 
    $idade = $_GET['idade'];
    $cidade = $_GET['cidade'];
    echo $idade >= 18 ? 
    "Maior de idade mora em $cidade" : "Menor de idade $cidade";
?>