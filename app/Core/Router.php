<?php
namespace Core;

use Controllers\ErrorResponseController;

class Router {

    private array $routes = [];

    /*
    * Adds a new HTTP Post route to the available routes
    */
    public function post(string $pattern, callable $callback): void
    {
        $this->routes['POST'][] = ['pattern' => $pattern, 'callback' => $callback];
    }

    /*
    * Adds a new HTTP Put route to the available routes
    */
    public function put(string $pattern, callable $callback): void
    {
        $this->routes['POST'][] = ['pattern' => $pattern, 'callback' => $callback];
    }

    /*
    * Adds a new HTTP Delete route to the available routes
    */
    public function delete(string $pattern, callable $callback): void
    {
        $this->routes['DELETE'][] = ['pattern' => $pattern, 'callback' => $callback];
    }

    /*
    * Adds a new HTTP Get route to the available routes
    */
    public function get(string $pattern, callable $callback): void
    {
        $this->routes['GET'][] = ['pattern' => $pattern, 'callback' => $callback];
    }

    /*
    * Calls the requested route, if it exists. Otherwise the 404 error message returns
    */
    public function dispatch(string $method, string $uri): void
    {
        $uri = parse_url($uri, PHP_URL_PATH);

        foreach ($this->routes[$method] ?? [] as $route) {
            $pattern = preg_replace('#\{[a-zA-Z_]+\}#', '([a-zA-Z0-9_\-]+)', $route['pattern']);
            $pattern = "#^" . $pattern . "$#";

            if (preg_match($pattern, $uri, $matches)) {
                array_shift($matches); // Remove full match
                call_user_func_array($route['callback'], $matches);
                return;
            }
        }

        $errorResponseController = new ErrorResponseController();
        $errorResponseController->NotFound();
    }
}