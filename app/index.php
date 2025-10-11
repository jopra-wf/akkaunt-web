<?php
require_once 'Includings.php';

use Controllers\PrefillController;
use Controllers\ErrorResponseController;
use Controllers\LandingController;
use Controllers\DashboardController;
use Controllers\RegistrationController;
use Core\Router;

try {
    $router = new Router();

    $prefillController = new PrefillController();
    $router->post('/ajax/sessionValue', [$prefillController, 'AddSessionValue']);
    $router->delete('/ajax/sessionValue', [$prefillController, 'RemoveSessionValue']);
    
    $landingController = new LandingController();
    $router->get('/', [$landingController, 'Landing']);

    $registrationController = new RegistrationController();
    $router->get('/register', [$registrationController, 'Landing']);
    $router->get('/register/onboarding', [$registrationController, 'Done']);
    $router->post('/register/create-account', [$registrationController, 'EmailPasswordInput']);
    $router->post('/register/verify-email', [$registrationController, 'EmailVerification']);
    $router->post('/register/continue', [$registrationController, 'Continue']);


    $dashboardController = new DashboardController();
    $router->get('/dashboard', [$dashboardController, 'Index']);
    $router->get('/inbox', [$dashboardController, 'Inbox']);

    // Dispatch the current request
    $router->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
} catch (Exception $e) {
    $errorResponseController = new ErrorResponseController();
    $errorResponseController->InternalServerError();
    exit;
}