<?php

class Dbconnect
{
    private $hostname = "localhost";
    private $port = "3306";
    private $dbname = "zapp_db";
    private $username = "root";
    private $password = "";
    public function connect()
    {
        $pdo = new PDO(
            "mysql:host=$this->hostname;port=$this->port;dbname=$this->dbname",
            $this->username,
            $this->password
        );
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}
