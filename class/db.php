<?php

class Db {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $dbName = "gestioncontacts";
    private $port = "3306";
    public function connect()
    {
        try {
            $dsn = 'mysql:host='. $this->host . ';dbname=' .$this->dbName . ';port='. $this->port;
            $db = new PDO($dsn,$this->user,$this->password);
            return $db;
        } catch (Exception $ex) {
            echo null;
        }
    }

}
// $conn = new Db();
// $conn->connect();