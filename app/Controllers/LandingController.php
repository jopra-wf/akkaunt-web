<?php
namespace Controllers;

class LandingController extends BaseController
{
    /*
    * After calling this function, the current endpoint will finish immideately and return a JSON response
    */
    public function Landing() {
        $data = [
            'title' => 'AKKAUNT',
        ];
        require_once __DIR__.'/../view/header-landing.php';
        require_once __DIR__.'/../view/footer-landing.php';
    }
}