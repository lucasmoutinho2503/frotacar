<?php
    class DiarioRetirada{
        private $idDiarioRetirada;
        private $nome
        private $placa;
        private $modelo;
        private $dataRetirada;
        private $horaRetirada;
        private $localRetirada;
        private $destino;
        private $dataEntregaEstimada;
        private $horaEntregaEstimada;
        
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
            return '<br>Código: '. $this->idDiarioRetirada.
                   '<br>Nome: '.$this->nome.
                   '<br>Placa: '. $this->placa.
                   '<br>Modelo: '. $this->modelo.
                   '<br>Data: '. $this->dataRetirada.
                   '<br>Hora: '. $this->horaRetirada.
                   '<br>Origem: '. $this->localRetirada.
                   '<br>Destino: '. $this->destino.
                   '<br>Data de Entrega (Previsão): '. $this->dataEntregaEstimada.
                   '<br>Horario de Entrega (Previsão): '. $this->horaEntregaEstimada;
        }
    }
?>