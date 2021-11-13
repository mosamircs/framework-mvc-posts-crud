<?php
namespace App\Core;
class Application
{
    public Router $router;
    public function __construct()
    {
        $this->router = new Router();
    }

    public function parseURL()
    {
        $url = $_SERVER['REQUEST_URI'];//gets url from browser
        $url =trim($url);//removes whitespaces and endlines
        $url = explode('/',$url);//make array from my string if splitted by /
        
        foreach($url as $params){
            var_dump($params);

        }
    }
}