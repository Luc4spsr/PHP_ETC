<?php 
    class calculadora {
    public $numero1;
    public $numero2;

    public function __construct($numero1, $numero2) {
        $this->numero1 = $numero1;
        $this->numero2 = $numero2;
    }

    public function somaNumeros() {
        echo "$this->numero1 + $this->numero2 = ".($this->numero1 + $this->numero2);
    }
    public function subtracaoNumeros() {
        echo "$this->numero1 - $this->numero2 = ".($this->numero1 - $this->numero2);
    }
    public function multiplicacaoNumeros() {
        echo "$this->numero1 x $this->numero2 = ".($this->numero1 * $this->numero2);
    }
    public function divisaoNumeros() {
        if ($this->numero2 != 0) {
            echo "$this->numero1 / $this->numero2 = ".($this->numero1 / $this-> numero2);
        }
        else {
            echo "Não é possível dividir por 0!";
        }
    }
    }   
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="div1">
        <h1>Calculadora</h1>
        <br><br>
        <form action="index.php" method="post">
            <label><span>Digite o primeiro número:</span></label>
            <br>
            <input placeholder="Número" autofocus type="number" name="numero1" id="">
            <br><br>
            <label><span>Digite o segundo número:</span></label>
            <br>
            <input placeholder="Número"type="number" name="numero2" id="">
            <br><br>
            <input type="submit" value="+" name="soma">
            <input type="submit" value="-" name="sub">
            <input type="submit" value="÷ " name="divisao">
            <input type="submit" value="X" name="multi">
        </form>
        <br>
            <div class="div2">
                    <?php
                        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                            if (isset($_POST['numero1']) and isset($_POST['numero2']) and $_POST['numero1'] != "" and $_POST['numero2'] != "") {
                                $numero1 = $_POST['numero1'];
                                $numero2 = $_POST['numero2'];
                                $calcular = new calculadora($numero1, $numero2);
                                if (isset($_POST['soma'])) {
                                $calcular->somaNumeros();
                                }
                                else if (isset($_POST['sub'])) {
                                    $calcular->subtracaoNumeros();
                                }
                                else if (isset($_POST['divisao'])) {
                                    $calcular->divisaoNumeros();
                                }
                                else if (isset($_POST['multi'])) {
                                    $calcular->multiplicacaoNumeros();
                                }
                            }
                            else {
                                echo 'Insira os números!';
                            }
                        }
                        else {
                            echo "Esperando os números!";
                        }
                    ?>
            </div>
</div>
</body>
</html>