<?php
namespace HecknerFa\Cloud;

class Router
{
    public $routes = [];

    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }

    public function register($routes)
    {
        $this->routes = $routes;
    }

    public function direct($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }
    }
}
