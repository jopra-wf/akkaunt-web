<?php
namespace Controllers;

use Helpers\UrlHelper;

class RegistrationController extends BaseController
{
    
    public function Landing() {
        $data = [
            'title' => 'Herzlich Willkommen | AKKAUNT',
        ];

        // Create CSRF token
        session_start();
        if(empty($_SESSION['CSRF_TOKEN']))
            $_SESSION['CSRF_TOKEN'] = bin2hex(random_bytes(16));

        require_once __DIR__.'/../view/header-landing.php';
        require_once __DIR__.'/../view/registration/landing.php';
        require_once __DIR__.'/../view/footer-landing.php';
    }
    
    public function EmailPasswordInput(): void {
        $data = [
            'title' => 'Akkaunt erstellen | AKKAUNT',
        ];

        // Check, if CSRF token is valid
        session_start();
        if(empty($_SESSION['CSRF_TOKEN']) || $_SESSION['CSRF_TOKEN'] != $_POST['csrfToken'] ?? 'none') {
            header(UrlHelper::getCurrentHostAddress().'/register');
            exit;
        }

        require_once __DIR__.'/../view/header-landing.php';
        require_once __DIR__.'/../view/registration/email-and-password-input.php';
        require_once __DIR__.'/../view/footer-landing.php';
    }
    
    public function EmailVerification(): void {
        $data = [
            'title' => 'Email bestätigen | AKKAUNT',
        ];

        // Check, if CSRF token is valid
        session_start();
        if(empty($_SESSION['CSRF_TOKEN']) || $_SESSION['CSRF_TOKEN'] != $_POST['csrfToken'] ?? 'none') {
            header(UrlHelper::getCurrentHostAddress().'/register');
            exit;
        }

        require_once __DIR__.'/../view/header-landing.php';
        require_once __DIR__.'/../view/registration/email-verification.php';
        require_once __DIR__.'/../view/footer-landing.php';
    }
    
    public function Continue(): void {
        // Check, if CSRF token is valid
        session_start();
        if(empty($_SESSION['CSRF_TOKEN']) || $_SESSION['CSRF_TOKEN'] != $_POST['csrfToken'] ?? 'none') {
            header('Location: '.UrlHelper::getCurrentHostAddress().'/register');
            exit;
        }

        $data = [];
        
        $data['username'] = $_SESSION['username'] ??'';
        $data['email'] = $_SESSION['email'] ??'';
        $data['password'] = $_SESSION['password'] ??'';
        session_unset();
        $_SESSION['userData'] = $data;
        header('Location: '.UrlHelper::getCurrentHostAddress().'/register/onboarding');
        exit;
    }
    
    public function Done(): void {
        $data = [
            'title' => 'Herzlich Willkommen! | AKKAUNT',
        ];
        
        session_start();
        $data[] = $_SESSION['userData'];

        require_once __DIR__.'/../view/header-landing.php';
        require_once __DIR__.'/../view/registration/done.php';
        require_once __DIR__.'/../view/footer-landing.php';
    }
}