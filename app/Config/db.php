<?php

    class DB{
        private $host = "127.0.0.1";
        private $user = "thartsch";
        private $pass = "password";
        private $databasename = "slimphp";
        private $port = "3325";

        public function connect(){
            $conn_str = "mysql:host=$this->host;port=$this->port;dbname=$this->databasename";
            //$conn_str = "mysql:host=" . $this->host . ";dbname=" . $this->databasename;
            $conn = new PDO($conn_str, $this->user, $this->pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;
        }
    }