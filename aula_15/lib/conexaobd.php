<?php
class conexaoBd {
        private $host;
        private $porta;
        private $userName;
        private $password;
        private $database;
        private $dbconn;
        
        public function setHost($host){
            $this->host = ($host);

        }
        public function setPorta($porta){
            $this->porta = ($porta);

        }
        public function setUserName($username){
            $this->userName = ($username);

        }
        public function setPassword($password){
            $this->password = ($password);

        }

        public function setDatabase($database){
            $this->database = ($database);

        }

        public function conectar(){
           try {
            $this->dbconn = pg_connect($this->getConnection);
            if($this->dbconn){
                return true;
            }
           }  catch (Exception $e){
            //this->setStatus('Erro: ' . $e->getMessage)
           }
        }

        private function getConectionString() {
            return "host". $this->host .
            " porta=". $this->porta .
            " dbname=". $this->dbname .
            " user=". $this->userName .
            " password=". $this->password .
        }
}















?>