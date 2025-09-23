<?php
use Core\Router;
use Controllers\ErrorResponseController;

require_once 'Includings.php';

try {
    $router = new Router();
    //$router->post('/v1/accounts/authenticate', [$accountController, 'authenticate']);
    //$router->post('/v1/accounts', [$accountController, 'register']);
    //$router->get('/v1/accounts', [$accountController, 'me']);

    // Dispatch the current request
    $router->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
} catch (Exception $e) {
    $errorResponseController = new ErrorResponseController();
    $errorResponseController->InternalServerError();
    exit;
}