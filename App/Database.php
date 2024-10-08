<?php

namespace App;

use PDO;
use PDOException;

require "database.config.php";
class Database
{

    
    public $connection;
    public $statement;
    public function __construct($servername, $dbName, $username, $password)
    {
        // http_build_query();
        try {
            $this->connection = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password, [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);
            // set the PDO error mode to exception
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function query($query, $params = [])
    {
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);
        return $this;
    }
    public function all($query)
    {
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute();
        return $this->statement;
    }
    public function find()
    {
        return $this->statement->fetch();
    }
    public function findOrFail()
    {
        $result = $this->find();
        if (! $result) {
          //  abort();
        } else {
            return $result;
        }
    }
}
