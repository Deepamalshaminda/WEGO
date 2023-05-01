<?php

class Router {
    private $routes = [];

    public function addRoute($url, $params) {
        $this->routes[$url] = $params;
    }
 
    public function dispatch() {
        $url = $_SERVER['REQUEST_URI'];

        if (array_key_exists($url, $this->routes)) {
            $controller = $this->routes[$url]['controller'];
            $action = $this->routes[$url]['action'];
            $controllerObject = new $controller();
            $controllerObject->$action();
        } else {
            // handle 404 error
        }
    }

    
}

