<?php
    include '../database/conexaoBanco.php';

    class diarioEntregaDAO{
        private $conexao = null;

        public function __construct(){
            $this->conexao = ConexaoBanco::getInstancia();
        }

        public function cadastrarEntrega($entrega){
            try{
                $stat = $this->conexao-prepare("insert into diarioDeBordoEntrega(idDiarioEntrega, placa, dataEntrega, horaEntrega, localEntrega) values(null, ?, ? ,? ,?)");
                
                $stat->bindvalue(1, $entrega->placa);
                $stat->bindvalue(2, $entrega->dataEntrega);
                $stat->bindvalue(3, $entrega->horaEntrega);
                $stat->bindvalue(4, $entrega->localEntrega);

                $stat->execute();

                $this->conexao = null;
            
            }catch(PDOException $e){
                
                echo 'Erro ao cadastrar entrega de viatura';
            }
        }
    }
?>