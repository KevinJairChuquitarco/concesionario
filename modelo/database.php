<?php
    class Database {
        private $host = 'localhost';
        private $db_name = 'concesionario';
        private $port = 3306;
        private $username = 'root';
        private $password = '';
        protected $conn;

        public function getConnection(){
            try {
                $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->db_name,
                $this->username,$this->password);
                return $this->conn;
            } catch (PDOException $error) {
                echo $error;
                return $this->conn;
            }

        }

    }
?>