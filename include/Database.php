<?php

class Database
{
    public $connection;
    public function __construct($servername, $dbName, $username, $password)
    {
        try {
            $this->connection = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
            // set the PDO error mode to exception
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function query($query)
    {
        $stm = $this->connection->prepare($query);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
}

$connection = new Database("localhost", "laracast", "root", "");
