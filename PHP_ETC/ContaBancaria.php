<?php
    class ContaBancaria {
        public $numeroConta;
        private $saldoConta;

        public function __construct($numeroConta, $saldoConta){
            $this->numeroConta = $numeroConta;
            $this->saldoConta = $saldoConta;
        }

        public function mostraSaldo(){
            echo "A conta numero $this->numeroConta tem saldo $this->saldoConta";
        }

        public function __getMostrarSaldo(){
            echo "Seu saldo é : ".$this->saldoConta;
        }
    }
    $conta = new ContaBancaria(1231245, 123.2);
    $conta->__getMostrarSaldo();
?>