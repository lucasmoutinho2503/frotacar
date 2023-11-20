<?php
    class Motorista{
        private $idMotorista;
        private $nome;
        private $cpf;
        private $idFunc;
        private $setor;
        private $numeroCnh;
        private $validadeCnh;

        public function __construct(){

        }

        public function Motorista(){

        }

        public function __get($atrib){
            return $this->$atrib;
        }

        public function __set($atrib, $valor){
            $this->$atrib = $valor;
        }

        public function __toString(){
            return '<br>Código: '. $this->idMotorista.
                   '<br>Nome: '. $this->nome.
                   '<br>CPF: '. $this->cpf.
                   '<br>ID Funcional: '. $this->idFunc.
                   '<br>Setor: '. $this->setor.
                   '<br>CNH: '. $this->numeroCnh.
                   '<br>Validade CNH: '. $this->validadeCnh;
        }
    }
?>