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

        public function deletarEntrega($idDiarioEntrega){
            try{
                $stat = $this->conexao->prepare("delete from diarioDeBordoEntrega where idDiarioEntrega = ?");

                $stat->bindValue(1, $idDiarioEntrega);

                $stat->execute();

                $this->conexao = null;

            }catch(PDOException $e){
                
                echo 'Erro ao deletar entrega de viatura';
            }
        }

        public function alterarEntrega($entrega){
            try{
                $stat = $this->conexao->prepare("update diarioDeBordoEntrega set placa = ?, dataEntrega = ?, horaEntrega = ?, localEntrega = ? where idDiarioEntrega = ?");
                
                $stat->bindValue(1, $entrega->placa);
                $stat->bindValue(2, $entrega->dataEntrega);
                $stat->bindValue(3, $entrega->horaEntrega);
                $stat->bindValue(4, $entrega->localEntrega);
                $stat->bindValue(5, $entrega->idDiarioEntrega);

                $stat->execute();

                $this->conexao=null;
            
            }catch(PDOException $e){
                
                echo 'Erro ao alterar entrega de viatura';
            }
        }
    }
?>