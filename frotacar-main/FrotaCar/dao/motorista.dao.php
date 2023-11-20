<?php
    include '../database/conexaobanco.php';

    class motoristaDAO{
        private $conexao = null;

        public function __construct(){
            $this->conexao = ConexaoBanco::getInstancia();

        }

        public function cadastrarMotorista($motorista){
            try{
                $stat = $this->conexao->prepare("insert into motorista(idMotorista, nome, cpf, idFunc, setor, numeroCnh, validadeCnh) values(null, ?, ?, ?, ?, ?, ?)");
                
                $stat->bindValue(1, $motorista->nome);
                $stat->bindValue(2, $motorista->cpf);
                $stat->bindValue(3, $motorista->idFunc);
                $stat->bindValue(4, $motorista->setor);
                $stat->bindValue(5, $motorista->numeroCnh);
                $stat->bindValue(6, $motorista->validadeCnh);
                
                $stat->execute();

                $this->conexao = null;

            }catch(PDOException $e){

                echo 'Erro ao cadastrar motorista';
            }
        }

        public function deletarMotorista($idMotorista){
            try{
                $stat = $this->conexao->prepare("delete from motorista where idViatura = ?");
                
                $stat->bindValue(1, $idMotorista);
                
                $stat->execute();

                $this->conexao = null;

            }catch(PDOException $e){

                echo 'Erro ao deletar motorista';
            }
        }

        public function alterarMotorista($motorista){
            try{
                $stat = $this->conexao->prepare("update motorista set nome = ?, cpf = ?, idFunc = ?, setor = ?, numeroCnh = ?, valdiadeCnh = ? where idMotorista = ?");

                $stat->bindValue(1, $motorista->nome);
                $stat->bindValue(2, $motorista->cpf);
                $stat->bindValue(3, $motorista->idFunc);
                $stat->bindValue(4, $motorista->setor);
                $stat->bindValue(5, $motorista->numeroCnh);
                $stat->bindValue(6, $motorista->validadeCnh);
                $stat->bindValue(7, $motorista->idMotorista);

                $stat->execute();
                
                $this->conexao=null;

            }catch(PDOException $e){
                
                echo 'Erro ao alterar motorista';
            }
        }

    }
?>