<?php

namespace App\models;

use App\Database;
use PDO;

class Posts
{
    private Database $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getAll(): array
    {
        $sth = $this->db->connection->prepare("SELECT * FROM posts");
        $sth->execute();

        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById(int $id): array
    {
        $sth = $this->db->connection->prepare("SELECT * FROM posts where id = ?");
        $sth->execute([$id]);

        try {
            return $sth->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo "ebat tvoy rot gandon nah00y";
            die();
        }
    }
}