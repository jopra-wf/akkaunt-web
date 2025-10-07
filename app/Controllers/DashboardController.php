<?php
namespace Controllers;

use Helpers\UrlHelper;

class DashboardController extends BaseController
{
    
    public function Index() {
        $data = [
            'title' => 'Mein Dashboard | AKKAUNT',
            'frontend_title' => 'Herzlich Willkommen, Jonas',
            'current_page' => 'index',
        ];

        session_start();
        require_once __DIR__.'/../view/dashboard/header-dashboard.php';
        require_once __DIR__.'/../view/dashboard/index.php';
        require_once __DIR__.'/../view/dashboard/footer-dashboard.php';
    }
    
    public function Inbox() {
        $data = [
            'title' => 'Mein Postfach | AKKAUNT',
            'frontend_title' => 'Dein Postfach',
            'current_page' => 'inbox',
        ];

        session_start();
        require_once __DIR__.'/../view/dashboard/header-dashboard.php';
        require_once __DIR__.'/../view/dashboard/inbox/index.php';
        require_once __DIR__.'/../view/dashboard/footer-dashboard.php';
    }
    
}