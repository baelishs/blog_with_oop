<?php

namespace App;

use App\models\Posts;
use App\models\Router;
use Exception;
use PDO;

$pathToAutoload = __DIR__ . '/../vendor/autoload.php';
require_once $pathToAutoload;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Blog</title>
</head>
<body>

<!---->
<!--$urls = [-->
<!--['url' => '/', 'filename' => 'card.php'],-->
<!--['url' => '/addNewPost', 'filename' => 'addPost.php'],-->
<!--['url' => '/deletePost', 'filename' => 'delete.php'],-->
<!--['url' => '/editPost', 'filename' => 'editPost.php'],-->
<!--['url' => '/fullPost', 'filename' => 'fullPost.php'],-->
<!--['url' => '/addNewCategory', 'filename' => 'addCategory.php'],-->
<!--['url' => '/selectCategory', 'filename' => 'selectCategory.php']-->
<!--]-->
<!---->
<!--foreach($urls as $url) {-->
<!--    matchUrl($url['url'], $url['filename']);-->
<!--}-->
<!---->
<!--function matchUrl(string $url, string $filename) {-->
<!---->
<!--}-->


    <?php
        require_once 'view/header.php';
        $a = new Router();
        require_once $a->matchUrl();

    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
