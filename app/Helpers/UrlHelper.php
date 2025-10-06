<?php
namespace Helpers;

class UrlHelper
{
    public static function GetCurrentHostAddress() : string
    {
        // Get base host address from request
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        $host = $_SERVER['HTTP_HOST'];
        return $protocol . $host;
    }
}