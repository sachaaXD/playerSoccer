<?php

    class connection 
    {
        private $hostname = "localhost";
        private $username = "root";
        private $passwrod = "";
        private $dbname = "player";

        public function connect()
    {
        return new mysqli($this->hostname,$this->username,$this->password,$this->dbname);
    }

    
    }
    
?>