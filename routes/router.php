<?php

namespace routes\router;

class Router {
    private $routes = [];

    public function addRoute($routeName, $controllerMethod) {
        $this->routes[$routeName] = $controllerMethod;
    }

    public function route($routeName) {
        if (array_key_exists($routeName, $this->routes)) {
            $controllerMethod = $this->routes[$routeName];
            $this->callControllerMethod($controllerMethod);
        } else {
            echo "Rota inválida";
        }
    }

    private function callControllerMethod($controllerMethod) {
        list($controller, $method) = explode('/', $controllerMethod);

        $controllerClass = 'App\\Controller\\' . $controller;

        if (class_exists($controllerClass) && method_exists($controllerClass, $method)) {
            $controllerInstance = new $controllerClass();
            call_user_func([$controllerInstance, $method]);
        } else {
            echo "Rota inválida";
        }
    }
}
