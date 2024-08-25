<?php

namespace App\models;

class Add
{
    public function __construct($db, $title, $content, $categoryId)
    {
        $db->connection->prepare("INSERT INTO `post` (`title`, `content`, `category_id`) VALUES ('$title', '$content', NULLIF('$categoryId', ''))");

    }
}