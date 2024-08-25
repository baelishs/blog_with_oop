<?php

namespace App\models;

class Router
{
    private $urls = [
        ['url' => '/', 'filename' => 'view/card.php'],
        ['url' => '/addPost', 'filename' => 'view/add.php']
    ];

    public function matchUrl()
    {
        print_r($_SERVER['REQUEST_URI']);
        foreach($this->urls as $url)
        {
            if(strtok($_SERVER['REQUEST_URI'],'?')  == $url['url']) {
                return $url['filename'];
            }
        }
        return '';
    }
}