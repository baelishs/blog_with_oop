<?php

namespace App;

use PDO;
use PDOException;

class Database
{
    public PDO $connection;

    public function __construct()
    {
        try {
            $this->connection = new PDO($this->getDsn(), $this->getConfig()['user'], $this->getConfig()['password']);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            die();
        }
    }

    private function getConfig(): array
    {
        return [
            'host' => 'db',
            'dbname' => 'blog',
            'user' => 'root',
            'password' => 'root',
        ];
    }

    private function getDsn(): string
    {
        $config = $this->getConfig();
        $host = $config['host'];
        $dbname = $config['dbname'];

        return "mysql:host=$host;dbname=$dbname";
    }
}