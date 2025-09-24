<?php 
use Helpers\UrlHelper;
?><!DOCTYPE html>
<html class="light">
    <head>
        <title><?=$data['title'] ?? 'AKKAUNT' ?></title>
        <link rel="stylesheet" href="<?=UrlHelper::GetCurrentHostAddress()?>/public/css/app.css">
        <link rel="stylesheet" href="<?=UrlHelper::GetCurrentHostAddress()?>/public/css/m3-theme-colors/light.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>

        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
        <script type="importmap">
            {
            "imports": {
                "@material/web/": "https://esm.run/@material/web/"
            }
            }
        </script>
        <script type="module">
            import '@material/web/all.js';
            import {styles as typescaleStyles} from '@material/web/typography/md-typescale-styles.js';

            document.adoptedStyleSheets.push(typescaleStyles.styleSheet);
        </script>
    </head>
    <body>
        <div>
            <div class="header">
                <div>
                    <a href="<?=UrlHelper::GetCurrentHostAddress()?>"><b>AKKAUNT</b></a>
                </div>
                <div>
                    <md-filled-button label="Edit" icon="edit"></md-outlined-button>
                </div>
            </div>
            aaa
        </div>