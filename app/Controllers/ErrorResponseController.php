<?php
namespace Controllers;

class ErrorResponseController extends BaseController {
    
    /*
    * Returns a HTTP 404 Not Found response
    */
    public function NotFound($resourceType = 'resource') {
        $errors = [
            'status' => [
                'statusCode' => 404,
                'errorMessage' => 'Not Found',
                'errorDescription' => 'The requested '.$resourceType.' couldn\'t been found'
            ]
        ];
        return $this->apiJsonResponse($errors, 404);
    }
    
    /*
    * Returns a HTTP 403 Unauthorized response
    */
    public function Unauthorized($resourceType = 'resource') {
        $errors = [
            'status' => [
                'statusCode' => 403,
                'errorMessage' => 'Unauthorized',
                'errorDescription' => 'You have no permission for accessing the requested '.$resourceType
            ]
        ];
        return $this->apiJsonResponse($errors, 404);
    }
    
    /*
    * Returns a HTTP 500 Unauthorized response
    */
    public function InternalServerError() {
        $errors = [
            'status' => [
                'statusCode' => 403,
                'errorMessage' => 'Internal server error',
                'errorDescription' => 'The server frequently experienced a broken function and had a crisis. Shame on the developers!'
            ]
        ];
        return $this->apiJsonResponse($errors, 500);
    }
}