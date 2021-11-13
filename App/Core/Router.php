<?php
namespace App\Core;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Route {
    private $Routes = [];
    public function get($route, $class)
    {
        $this->Routes['get'][$route] = $class;
    }
    public function post($route, $class)
    {
        $this->Routes['post'][$route] = $class;
    }
    public function __destruct()
    {
    $c = $this->Routes[
        strtolower($_SERVER['REQUEST_METHOD'])
        ]
        [
            ltrim($_SERVER['REQUEST_URI'],'/')
        ];
    $clas =  new $c[0];
    return $clas->{$c[1]}();
    }
}
$route = new Route;
$route->get('user', [user::class, 'index']);
$route->get('user/show', [user::class, 'index']);
$route->post('user', [user::class, 'show']);