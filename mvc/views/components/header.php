<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="30">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/app.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/grid.css">
    <title>Login</title>
    <style>
        /* @media (min-width: 1024px) and (max-width: 1239px) {
            .login__header {
                display: flex;
            }
        } */

        @media (max-width:739px) {
            .login__header__nav {
                display: none;
            }
            .login__header__brand {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <div class="background">
    </div>
    <div class="grid wide container">
        <div class="row">
            <div class="col l-3 m-3 c-12 login__header">
                <h1 class="login__header__brand">SmartKitchen</h1>
            </div>
            <div class="col l-3 m-3 c-0">
                <ul class="login__header__nav">
                    <li class="login__header__nav__list">Home</li>
                    <li class="login__header__nav__list">Register</li>
                </ul>
            </div>
        </div>
    </div>