<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php 
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $nome = $_POST['nome'] ?? '';
            $email = $_POST['email'] ?? '';
            $ano = $_POST['ano'] ?? '';
            $disciplina = !empty($_POST['disciplina']) ? implode(', ', $_POST['disciplina']) : '';
            $cidade = $_POST['cidade'] ?? '';
            
            if (!empty($nome) and !empty($email) and !empty($ano) and !empty($disciplina) and !empty($cidade)) {
                echo "Nome :$nome<br>";
                echo "Email: $email<br>";
                echo "Escolaridade: $ano <br>";
                echo "Disciplinas: $disciplina<br>";
                echo "Cidade: $cidade";
            }
            else {
                echo "Por favor, prencha todos os campos do formulário.";
            }
        }  
    ?>
</body>
</html>