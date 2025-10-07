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
    <body class="dashboard">
        <div class="navbar">
            <button id="btn_nav_inbox" class="dashboard-nav-btn <?=$data['current_page'] === 'inbox' ? 'selected' : '' ?>" onclick="redirect('<?=Helpers\UrlHelper::GetCurrentHostAddress()?>/inbox')">
                <div>
                    <img src="<?=UrlHelper::GetCurrentHostAddress()?>/public/icons/light/ic_inbox_24dp.svg" alt="inbox" />
                </div>
                <span>Messages</span>
            </button>
            <button id="btn_nav_home" class="dashboard-nav-btn <?=$data['current_page'] === 'index' ? 'selected' : '' ?>" onclick="redirect('<?=Helpers\UrlHelper::GetCurrentHostAddress()?>/dashboard')">
                <div>
                    <img src="<?=UrlHelper::GetCurrentHostAddress()?>/public/icons/light/ic_home_24dp.svg" alt="home" />
                </div>
                <span>Home</span>
            </button>
            <button class="dashboard-nav-btn <?=$data['current_page'] === 'account_details' ? 'selected' : '' ?>" onclick="showModal()">
                <div>
                    <img src="<?=UrlHelper::GetCurrentHostAddress()?>/public/icons/light/ic_person_24dp.svg" alt="profile" />
                </div>
                <span>My AKKAUNT</span>
            </button>
        </div>

        <h3><?=$data['frontend_title']?></h3>
        <div class="content">