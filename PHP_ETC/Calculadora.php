<?php 
    class calculadora {
        public $numero1;
        public $numero2;

        public function __construct($numero1, $numero2) {
            $this->numero1 = $numero1;
            $this->numero2 = $numero2;
        }

        public function somaNumeros() {
            echo "$this->numero1 + $this->numero2 = ".$this->numero1 + $this->numero2;
        }
        public function subtracaoNumeros() {
            echo "$this->numero1 - $this->numero2 = ".$this->numero1 - $this->numero2;
        }
        public function multiplicacaoNumeros() {
            echo "$this->numero1 x $this->numero2 = ".$this->numero1 * $this->numero2;
        }
        public function divisaoNumeros() {
            echo "$this->numero1 / $this->numero2 = ".$this->numero1 / $this-> numero2;
        }
    }
?>

<?php  
    include_once('Calculadora.php');
    $calcular = new calculadora(10, 20);
    $calcular->somaNumeros();
    echo '<br>';
    $calcular->subtracaoNumeros(); 
    echo '<br>';
    $calcular->multiplicacaoNumeros(); 
    echo '<br>';
    $calcular->divisaoNumeros();
?>