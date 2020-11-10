<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html,
            body {
                background: url(../../img/chicago.jpg);
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                /* height: 100vh; */
                margin: 0;
                /* margin-left: 602px; */
                /* font-family: 'Open Sans', sans-serif; */
                line-height: 20px;
                background-position: center;
                /* background-repeat: no-repeat; */
                background-size: cover;

            }
            a:link {
                text-decoration: none;
                color: white;
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
                position: relative;
                bottom: 2px;
                right: 2px;
            }

            .title {
                font-size: 84px;
            }

            .links>a {
                /* color: #636b6f; */
                color: white;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
                margin-bottom: 30px;
                position: relative;
                /* bottom: 2px; */
                /* right: 2px; */
                background-color: white;
                color: inherit;
                /* opacity: 0.5; */
                width: 685px;
                margin-top: -84px;
            }

            footer {
                text-align: center;
                padding: 1px 0px 1px 0;
                background-color: #373333;
                color: white;
                line-height: 0.6;
            }
            .slow{
                margin-left: -925px;
                line-height: 0.6;
                
            }
            .down{
                margin-top: -74px;
                margin-left: -560px;
                line-height: 0.6;

            }
        </style>
    </head>

    <body>
        <div class="flex-center position-ref full-height">
            <div class="navBar">

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
            </div>

            <div class="content">

                <!-- <img src="{!! asset('img/chicago.jpg') !!}"> -->
                <div class="title m-b-md">
                    G REPÚBLICAS
                </div>


            </div>
        </div>
    </body>
    <footer>
        
        <div class="slow">
            <p><a href="#">Quem Somos</a></p>
            <p><a href="#">Atendimento</a></p>
            <p><a href="#">FAQ</a></p>
        </div>

        <div class="down">
            <p><a href="#">Suporte</a></p>
            <p><a href="#">G- Republica PRO</a></p>
            <p><a href="#">Central de Ajuda</a></p>
        </div>
        <br>
        <p>©Copyright Mazarafa 2020</p>
    </footer>

</html>