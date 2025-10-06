<?php 
use Helpers\UrlHelper;
?><!DOCTYPE html>
<html class="light">
    <head>
        <title><?=$data['title'] ?? 'AKKAUNT' ?></title>
        <link rel="stylesheet" href="<?=UrlHelper::GetCurrentHostAddress()?>/public/css/app.css">
        <link rel="stylesheet" href="<?=UrlHelper::GetCurrentHostAddress()?>/public/css/m3-theme-colors/light.css">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <script src="<?=UrlHelper::GetCurrentHostAddress()?>/public/js/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    </head>
    <body>
        <div class="header">
            <div>
                <b class="text-2xl">AKKAUNT</b>
            </div>
            <div style="display:flex;flex-direction:row;gap:.4rem;">
                <button>
                    <img src="<?=UrlHelper::GetCurrentHostAddress()?>/public/icons/light/ic_person_24dp.svg" alt="person" />
                    <span class="hidden sm:block">Registrieren</span>
                </button>
                <button class="secondary">Login</button>
            </div>
        </div>
        <div style="margin-top: 102px">