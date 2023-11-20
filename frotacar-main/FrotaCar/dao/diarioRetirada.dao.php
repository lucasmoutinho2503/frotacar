<?php
    include '../database/conexaobanco.php';

    class diarioRetiradaDAO{
        private $conexao = null;

        public function __construct(){
            $this->conexao = ConexaoBanco::getInstancia();
        }

        public function cadastrarRetirada($retirada){
            try{
                $stat = $this->conexao->prepare("insert into diarioDeBordoRetirada(idDiarioRetirada, nome, placa, modelo, dataRetirada, horaRetirada, localRetirada, destino, dataEntregaEstimada, horaEntregaEstimada) values(null, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

                $stat->bindValue(1, $retirada->nome);
                $stat->bindValue(2, $retirada->placa);
                $stat->bindValue(3, $retirada->modelo);
                $stat->bindValue(4, $retirada->dataRetirada);
                $stat->bindValue(5, $retirada->horaRetirada);
                $stat->bindValue(6, $retirada->localRetirada);
                $stat->bindValue(7, $retirada->destino);
                $stat->bindValue(8, $retirada->dataEntregaEstimada);
                $stat->bindValue(9, $retirada->horaEntregaEstimada);

                $stat->execute();

                $this->conexao = null;

            }catch(PDOException $e){

                echo 'Erro ao cadastrar retirada de viatura';
            }
        }

        public function deletarRetirada($idDiarioRetirada){
            try{
                $stat = $this->conexao->prepare("delete from diarioDeBordoRetirada where idDiarioRetirada = ?");

                $stat->bindValue(1, $idDiarioRetirada);

                $stat->execute();

                $this->conexao = null;

            }catch(PDOException $e){
               
                echo 'Erro ao deletar retirada de viatura!';
            }
        }

        public function alterarRetirada($retirada){
            try{
                $stat = $this->conexao->prepare("update diarioDeBordoRetirada set nome = ?, placa ?, modelo = ?, dataRetirada = ?, horaRetirada = ?, localRetirada = ?, destino = ?, dataEntregaEstimada = ?, horaEntregaEstimada = ? where idDiarioRetirada = ?");
                
                $stat->bindValue(1, $retirada->nome);
                $stat->bindValue(2, $retirada->placa);
                $stat->bindValue(3, $retirada->modelo);
                $stat->bindValue(4, $retirada->dataRetirada);
                $stat->bindValue(5, $retirada->horaRetirada);
                $stat->bindValue(6, $retirada->localRetirada);
                $stat->bindValue(7, $retirada->destino);
                $stat->bindValue(8, $retirada->dataEntregaRetirada);
                $stat->bindValue(9, $retirada->horaEntregaRetirada);
                $stat->bindValue(10, $retirada->idDiarioRetirada);
            
            }catch(PDOException $e){

                echo 'Erro ao alterar retirada de viatura';
            }
        }
    }
?>