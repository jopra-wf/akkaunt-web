<?php
namespace Controllers;

class PrefillController extends BaseController
{
    public function AddSessionValue()
    {
        session_start();
        $errorResponseController = new ErrorResponseController();
        // Check if request body parameters are set
        $errors = [];
        if(!isset($_POST['key']))
            $errors[] = 'key is required';
        if (!isset($_POST['value']))
            $errors[] = 'value is required';
        if((empty($_SESSION['CSRF_TOKEN']) || empty($_POST['CSRF_TOKEN'])) && (strval($_POST['CSRF_TOKEN']) != strval($_SESSION['CSRF_TOKEN'])))
            $errors[] = 'CSRF token is invalid';
        if (!empty($errors))
            return $errorResponseController->BadRequestError($errors);

        $key = $_POST['key'];
        $value = $_POST['value'];

        if(trim($value) == '' && !empty($_POST['autoDeletion'])) {
            $this->RemoveSessionValue();
        }
        
        $_SESSION[$key] = $value;
        return self::apiJsonResponse(json_encode('OK'));
    }

    public function RemoveSessionValue()
    {
        session_start();
        $errorResponseController = new ErrorResponseController();
        // Check if request body parameters are set
        $errors = [];
        if(!isset($_POST['key']) || empty(strval($_SESSION['key'])))
            $errors[] = 'key is required';
        if((empty($_SESSION['CSRF_Token']) || empty($_POST['CSRF_Token'])) && (strval($_POST['CSRF_Token']) != strval($_SESSION['CSRF_Token'])))
            $errors[] = 'CSRF token is invalid';
        if (!empty($errors))
            return $errorResponseController->BadRequestError($errors);
        
        unset($_SESSION[$_POST['key']]);
        return self::apiJsonResponse(json_encode('OK'));
    }
}