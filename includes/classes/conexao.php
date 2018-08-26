<?php
    class conexao{
        private $usuario="";
        private $senha="";
        private $caminho="";
        private $banco="";
        private $con="";

        public function _construct(){
            $this->con = mysqli_connect($this->caminho, $this->usuario,$this->senha) or die("conexao com o banco de dados falhou".mysqli_error($this->con));
        
            mysqli_select_db($this->con, $this->banco) or die("Conexao com o banco de dados falhou!".mysqli_error($this->con));
            
        }
        
        public function getCon(){
            return $this->con;
        }
    }
?>