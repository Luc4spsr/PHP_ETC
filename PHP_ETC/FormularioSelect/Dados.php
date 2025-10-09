<?php
    $tecnologias = ['PHP', 'HTML', 'JAVASCRIPT', 'PYTHON', 'JAVA'];
    if (!empty($_POST['selecao'])) {
        echo "Você selecionou: ".$_POST['selecao'];
    }
?>