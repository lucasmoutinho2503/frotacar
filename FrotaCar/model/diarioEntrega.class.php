<?php
    class DiarioEntrega{
        private $idDiarioEntrega;
        private $placa;
        private $dataEntrega;
        private $horaEntrega;
        private $localEntrega;

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
            return '<br>Código: '. $this->idDiarioEntrega.
                   '<br>Placa: '. $this->placa.
                   '<br>Data de Entrega: '. $this->dataEntrega.
                   '<br>Hora de Entrega: '. $this->horaEntrega.
                   '<br>Local: '. $this->localEntrega;
        }
    }
?>