<?php
    class ConexaoBanco extends PDO{
        private static $instancia = null;

        public function ConexaoBanco($dsn, $usuario, $senha){
            
            parent::__construct($dsn, $usuario, $senha);
        }

        public static function getInstancia(){
            if(!isset(self::$instancia)){
                try{

                    self::$instancia = new ConexaoBanco("mysql:dbname=gestaofrota;host=localhost", "root", "Baleia@69");
                }catch(Exception $e){
                    echo 'Erro ao Conectar';
                    exit();
                }
            }
            return self::$instancia;
        }
    }
?>