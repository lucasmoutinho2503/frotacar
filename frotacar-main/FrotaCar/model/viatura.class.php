<?php
    class Viatura{
        private $idViatura;
        private $placa;
        private $placaDiscreta;
        private $marca;
        private $modelo;
        private $cor;
        private $ano;
        private $renavam;
        private $tipo;
        private $setor;
        private $subSetor;
        
        public function __construct(){

        }

        public function Viatura(){

        }

        public function __get($atrib){
            return $this->$atrib;
        }

        public function __set($atrib, $valor){
            $this->$atrib = $valor;
        }

        public function __toString(){
            return '<br>Código: '. $this->idViatura.
                   '<br>Placa: '. $this->placa.
                   '<br>Placa Discreta: '. $this->placaDiscreta.
                   '<br>Marca: '. $this->marca.
                   '<br>Modelo: '. $this->modelo.
                   '<br>Cor: '. $this->cor.
                   '<br>Ano: '. $this->ano.
                   '<br>Renavam: '. $this->renavam.
                   '<br>Tipo: '. $this->tipo.
                   '<br>Setor: '. $this->setor.
                   '<br>SubSetor: '. $this->subSetor;
        }
    }
?>