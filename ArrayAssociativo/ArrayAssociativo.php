<?php
    $carros = [
        'Uno' => 1991,
        'Palio' => 2000,
        'Gol' => 2025,
        'Passat' => 1998,
        'Nissan' => 2024,
        'Ferrari' => 2026
    ];
    foreach ($carros as $modelo => $ano) {
        echo nl2br("O carro $modelo é do $ano \n");
    }
    
?>