<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title href="{{ url('/') }}" >G-REPUBLICA</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">

</head>

<body>
    <div class="flex-center position-ref full-height">
        <div class="navBar">

            @if (Route::has('login'))
            <div class="top-right links">

                @auth
                <a href="{{ url('/') }}">Home</a>
                @else

                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
                @endif
                @endauth
            </div>
            @endif
        </div>

        <div class="content">

            <!-- <img src="{!! asset('img/chicago.jpg') !!}"> -->
            <div class="title m-b-md">
                G REPÚBLICAS
            </div>


        </div>
    </div>

    <footer>

        <div class="slow">

            <p>
                <a href="{{ route('about') }}">
                    {{ __('Quem Somos') }}
                </a>
            </p>

            <p><a>Central de Ajuda</a></p>

            <p>
                <a href="{{ route('faqs') }}">
                    {{ __('FAQ') }}
                </a>
            </p>
        </div>

        <div class="down">
            <p><a>Parceirias</a></p>
            <!-- <p><a>G- Republica PRO</a></p> -->
            <p>
                <a href="{{ route('GPro') }}">
                    {{ __('G-Republica PRO') }}
                </a>
            </p>
            <p><a>Termos</a></p>
        </div>
        <br>
        <p>©Copyright G-Republica 2021</p>
    </footer>
</body>

</html>