<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Vytautas Narkevičius</title>
    <style>
        /*!
         * animate.css -http://daneden.me/animate
         * Version - 3.7.0
         * Licensed under the MIT license - http://opensource.org/licenses/MIT
         *
         * Copyright (c) 2018 Daniel Eden
         */
        .animated {
            -webkit-animation-duration: 2.6s;
            animation-duration: 2.6s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translate3d(0, -100%, 0);
            }

            to {
                opacity: 1;
                transform: translate3d(0, 0, 0);
            }
        }

        .fadeInDown {
            animation-name: fadeInDown;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translate3d(0, 100%, 0);
            }

            to {
                opacity: 1;
                transform: translate3d(0, 0, 0);
            }
        }

        .fadeInUp {
            animation-name: fadeInUp;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .fadeIn {
            animation-name: fadeIn;
        }


        @font-face {
            font-family: 'Merriweather';
            font-display: auto;
            font-style: normal;
            font-weight: 400;
            src: local('Merriweather Regular'), local('Merriweather-Regular'), url(https://fonts.gstatic.com/s/merriweather/v20/u-440qyriQwlOrhSvowK_l5-ciZMdeX3rsHo.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Merriweather';
            font-style: normal;
            font-display: auto;
            font-weight: 400;
            src: local('Merriweather Regular'), local('Merriweather-Regular'), url(https://fonts.gstatic.com/s/merriweather/v20/u-440qyriQwlOrhSvowK_l5-fCZMdeX3rg.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        html, body {
            background-color: #fff;
            color: #232323;
            font-family: 'Merriweather', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 6em;
        }

        .links > a {
            display: inline-block;
            color: #232323;
            padding: 20px 25px;
            font-size: 16px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            transition: opacity 1s ease;
        }

        .links > a:hover {
            opacity: .6;
        }

        .footer {
            position: absolute;
            bottom: 30px;
            font-size: 14px;
            font-weight: 500;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        @media only screen and (max-width: 600px) {
            .title {
                font-size: 3em;
            }

            .links > a {
                display: block;
            }
        }
    </style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136072263-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag()
        {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-136072263-1');
    </script>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md animated fadeInDown">
            Vytautas Narkevičius
        </div>

        <div class="links animated fadeInUp">
            <a href="https://github.com/vytautasns"> <i class="fab fa-github"></i> Github</a>
            <a href="https://fb.me/vytautasns"> <i class="fab fa-github"></i> Facebook</a>
            <a href="https://www.linkedin.com/in/vytautas-narkevicius-3000/"> <i class="fab fa-linkedin"></i>
                LinkedIn</a>
            <a href="mailto:vytautasns@gmail.com"> <i class="fas fa-at"></i> Email</a>
        </div>
    </div>
    <div class="footer animated fadeIn">
        <i class="fas fa-code-branch"></i> {{ now()->year }}
    </div>
</div>
<script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js"
        integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ"
        crossorigin="anonymous"></script>
</body>
</html>
