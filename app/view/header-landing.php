<?php 
use Helpers\UrlHelper;
?><!DOCTYPE html>
<html class="light">
    <head>
        <title><?=$data['title'] ?? 'AKKAUNT' ?></title>
        <link rel="stylesheet" href="<?=UrlHelper::GetCurrentHostAddress()?>/public/css/app.css">
        <link rel="stylesheet" href="<?=UrlHelper::GetCurrentHostAddress()?>/public/css/m3-theme-colors/light.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    </head>
    <body>
        <div class="header">
            <div>
                <b>AKKAUNT</b>
            </div>
            <div style="display:flex;flex-direction:row;gap:.4rem;">
                <button>
                    <img src="<?=UrlHelper::GetCurrentHostAddress()?>/public/icons/light/ic_person_24dp.svg" alt="person" />
                    Registrieren
                </button>
                <button class="secondary">Login</button>
            </div>
        </div>
        <div class="page-content" style="margin-top: 4rem">
            <div
                class="hero-img"
                style="
                    background-image:linear-gradient(rgba(0,0,0,.25),rgba(0,0,0,0.25)),url('<?=UrlHelper::GetCurrentHostAddress()?>/public/images/pexels-olly-941572.jpg');
                    display: flex; flex-direction: column; justify-content: center; align-items: center;
                "
                alt="person in front of laptop"
            >
            <div style="display: flex; flex-direction: column; align-items: end; gap: .4rem;">
                <span>Ein AKKOUNT -</span>
                <span>Viele Möglichkeiten!</span>
                <button style="margin-top: .4rem">Jetzt loslegen!</button>
            </div>
            </div>

                <h1>Ein AKKAUNT - <br>viele Möglichkeiten</h1>
                <h3>Mit deinem AKKAUNT kannst du dich bei vielen Web- und App-Angeboten anmelden</h3>
        </div>

        <script>
            const btns = document.querySelectorAll('button');
            for (const btn of btns) {
            btn.addEventListener('click', function() {
                if ('vibrate' in navigator) {
                    // Trigger a 200ms vibration
                    navigator.vibrate(200);
                } else {
                    alert('aaabb')
                }
            });
            }
        </script>