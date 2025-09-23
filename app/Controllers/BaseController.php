<?php
namespace Controllers;

abstract class BaseController
{
    /*
    * After calling this function, the current endpoint will finish immideately and return a JSON response
    */
    protected function apiJsonResponse($data, $status = 200) {
        if (!headers_sent()) {
            header('Content-Type: application/json');
            http_response_code($status);
        }
        echo json_encode($data);
        die;
    }
}