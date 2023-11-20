<?php
    include '../database/conexaobanco.php';

    class ViaturaDAO{
        private $conexao = null;

        public function __construct(){
            $this->conexao = ConexaoBanco::getInstancia();
            
        }

        public function cadastrarViatura($viatura){
            try{
                $stat = $this->conexao->prepare("insert into viatura(idViatura, placa, placaDiscreta, marca, modelo, cor, ano, renavam, tipo, setor, subSetor) values (null, ?,?,?,?,?,?,?,?,?,?,?)");

                $stat->bindValue(1, $viatura->placa);
                $stat->bindValue(2, $viatura->placaDiscreta);
                $stat->bindValue(3, $viatura->marca);
                $stat->bindValue(4, $viatura->modelo);
                $stat->bindValue(5, $viatura->cor);
                $stat->bindValue(6, $viatura->ano);
                $stat->bindValue(7, $viatura->$renavam);
                $stat->bindValue(8, $viatura->tipo);
                $stat->bindValue(9, $viatura->setor);
                $stat->bindValue(10, $viatura->subSetor);

                $stat->execute();

                $this->conexao=null;

            }catch(PDOException $e){

                echo 'Erro ao cadastrar viatura!';
            }
        }

        public function deletarViatura($idViatura){
            try{
                $stat = $this->conexao->prepare("delete from viatura where idViatura = ?");

                $stat->bindValue(1, $idViatura);

                $stat->execute();

                $this->conexao=null;

            }catch(PDOException $e){
        
                echo 'Erro ao deletar viatura!';
            }
        }

        public function alterarViatura($viatura){
            try{
                $stat = $this->conexao->prepare("update viatura set placa = ?, placaDiscreta = ?, marca = ?, modelo = ?, cor = ?, ano = ?, renavam = ?, tipo = ?, setor = ?, subSetor = ? where idViatura = ?");
                
                $stat->bindValue(1, $viatura->placa);
                $stat->bindValue(2, $viatura->placaDiscreta);
                $stat->bindValue(3, $viatura->marca);
                $stat->bindValue(4, $viatura->modelo);
                $stat->bindValue(5, $viatura->cor);
                $stat->bindValue(6, $viatura->ano);
                $stat->bindValue(7, $viatura->$renavam);
                $stat->bindValue(8, $viatura->tipo);
                $stat->bindValue(9, $viatura->setor);
                $stat->bindValue(10, $viatura->subSetor);
                $stat->bindValue(11, $viatura->idViatura);

                $stat->execute();
                
                $this->conexao=null;

            }catch(PDOException $e){

                echo 'Erro ao alterar viatura!';
            }
        }
    }
?>