<?php

namespace Core\Routes;

class Router {

    private array $routes;

    public function __construct(array $routes) {
       $this->routes = $routes; 
    }

    public function run(string $path) {
        if(!isset($this->routes[$path])) {
            echo "Aucune page avec ce nom la<br />";
            return;
        }
        var_dump($this->routes[$path]);
    }
}