<?php
require_once 'Includings.php';

use Controllers\ErrorResponseController;
use Controllers\LandingController;
use Core\Router;

try {
    $router = new Router();
    $landingController = new LandingController();

    $router->get('/', [$landingController, 'Landing']);

    // Dispatch the current request
    $router->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
} catch (Exception $e) {
    $errorResponseController = new ErrorResponseController();
    $errorResponseController->InternalServerError();
    exit;
}