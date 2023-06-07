<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Primi Passi</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body{
                background-color: #1e1f24;
                color: white;
                font-family:'Nunito';
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            
            #container0{
                padding: 0 3rem 3rem 3rem;
                width: 60%;
            }

            .fakeButtons {
                height: 10px;
                width: 10px;
                border-radius: 50%;
                border: 1px solid #000;
                position: relative;
                top: 6px;
                left: 6px;
                background-color: #ff3b47;
                border-color: #9d252b;
                display: inline-block;
            }

            .fakeMinimize {
              left: 11px;
              background-color: #ffc100;
              border-color: #9d802c;
            }

            .fakeZoom {
              left: 16px;
              background-color: #00d742;
              border-color: #049931;
            }

            .fakeMenu {
              width: 550px;
              box-sizing: border-box;
              height: 25px;
              background-color: #bbb;
              margin: 0 auto;
              border-top-right-radius: 5px;
              border-top-left-radius: 5px;
            }

            .fakeScreen {
              background-color: #151515;
              box-sizing: border-box;
              width: 550px;
              margin: 0 auto;
              padding: 20px;
              border-bottom-left-radius: 5px;
              border-bottom-right-radius: 5px;
            }

            .line1 {
                color: #9CD9F0;
            }
        </style>
    </head>
    <body>
        <div align="center">
            <a href="https://laravel.com" target="_blank">
                <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
            </a>
        </div>
        <h1 align="center">Welcome to Laravel</h1>
        <div id="container0">
            <p align="center">Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling.</p>
            <!-- First command -->
            <h2>Creazione progetto Laravel 9:</h2>
            <div class=fakeMenu>
                <div class="fakeButtons fakeClose"></div>
                <div class="fakeButtons fakeMinimize"></div>
                <div class="fakeButtons fakeZoom"></div>
            </div>
            <div class="fakeScreen">
              <p class="line1">~ composer create-project laravel/laravel:^9.2 project-folder-name</p>
            </div>
            <!-- Second command -->
            <h2>Avvio artisan serve:</h2>
            <div class=fakeMenu>
                <div class="fakeButtons fakeClose"></div>
                <div class="fakeButtons fakeMinimize"></div>
                <div class="fakeButtons fakeZoom"></div>
            </div>
            <div class="fakeScreen">
              <p class="line1">~ php artisan serve</p>
            </div>
        </div>
    </body>
</html>
