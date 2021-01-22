@extends('layouts.app')
@section('content')

<div class="container">
    <style>
        .rightcontainer {
            width: 580px;
            float: right;
            /* margin-top: 10px; */
            margin-right: 10px;
        }

        .posttweetcontainer {
            /* background: #ffe5e5; */
            position: relative;
            width: 704px;
            padding: 7px;
            left: -132px;
            /* right: -52px; */
            margin-top: -4px;
        }

        .posttweetprofimg {
            width: 32px;
            height: 32px;
            position: absolute;
            left: 25px;
            top: 4px;
            border-radius: 50%;
        }

        .ml56px {
            margin-left: 56px;
        }

        .ml58px {
            margin-left: 58px;
        }

        .mt10px {
            margin-top: 10px;
        }

        .posttweettacontainer {
            border-radius: 8px;
            /* border: 1px solid rgb(255, 153, 153); */
            border-image: none;
            line-height: 20px;
            /* box-shadow: 0px 0px 0px 1px #ff9999; */
            background-color: rgb(255, 255, 255);
            border: 1px solid rgb(0, 0, 128);
        }

        .posttweetta {
            border-width: 1px 1px 0px;
            border-style: solid solid none;
            border-color: rgb(230, 236, 240) rgb(230, 236, 240) currentColor;
            margin: 0px;
            padding: 8px;
            outline: 0px;
            border-radius: 8px;
            border-image: none;
            width: 100%;
            height: 50px;
            font-family: "Segoe UI", Arial, sans-serif;
            font-size: 14px;
            box-sizing: border-box;
            opacity: 0.8;
            background-color: rgb(255, 255, 255);
        }

        .posttweetcountcont {
            overflow: hidden;
            margin-top: 10px;
        }

        .posttweetcount {
            margin-right: 10px;
            display: block;
            float: right;
        }

        .posttweetbutcont {
            overflow: hidden;
            margin-top: 10px;
            margin-left: 507px;
        }

        .posttweetbut {
            padding: 6px 16px;
            border-radius: 100px;
            border: 1px solid #000080;
            border-image: none;
            text-align: center;
            color: rgb(255, 255, 255);
            line-height: 20px;
            font-size: 14px;
            font-weight: bold;
            white-space: nowrap;
            position: relative;
            cursor: pointer;
            float: right;
            box-shadow: none;
            background-color: #000080;
        }

        .tweetscontainer {
            background: rgb(255, 255, 255);
            list-style: none;
            margin: 0px;
            padding: 0px;
            margin-left: 125px;
        }

        .tweetcontainer {
            /* margin: 0px; */
            /* padding: 10px; */
            /* overflow: hidden; */
            border-bottom-color: rgb(230, 236, 240);
            /* border-bottom-width: 1px; */
            border-bottom-style: solid;
            /* background: #ffe5e5; */
            position: relative;
            width: 706px;
            padding: 7px;
            left: -100px;
            /* right: -52px; */
            margin-top: -35px;
        }

        .tweetprofimg {
            border-radius: 50%;
            width: 48px;
            height: 48px;
            margin-right: 10px;
            float: left;
        }

        .tweetprofname {
            color: #14171a;
            font-size: 14px;
            font-weight: bold;
        }

        .tweetprofuid {
            color: #657786;
            font-size: 14px;
            margin-left: 5px;
        }

        .tweetstats {
            margin-right: 30px;
            cursor: pointer;
        }

        .tweetstats i {
            color: rgb(101, 119, 134);
            font-size: 16px;
        }

        .tweetstatscount {
            color: rgb(101, 119, 134);
            line-height: 1;
            font-size: 12px;
            font-weight: bold;
            margin-left: 6px;
        }



        a:link {
            text-decoration: none;
            color: white;
        }

        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 2px 21px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: -3px;
            cursor: pointer;
            margin-left: 350px;
        }

        .addImage {
            margin-left: 480px;
            margin-top: -32px;
        }

        .navbarK .notif-integrantes {
            display: block;
            position: absolute;
            top: -12px;
            right: 560px;
            line-height: 16px;
            height: 16px;
            padding: 0 5px;
            font-family: Arial, sans-serif;
            color: white;
            text-shadow: 0 1px rgba(0, 0, 0, 0.25);
            border: 1px solid;
            border-radius: 10px;
            box-shadow: inset 0 1px rgba(255, 255, 255, 0.3), 0 1px 1px rgba(0, 0, 0, 0.09);

            background: #1E90FF;
            border-color: #3A5FCD;
        }

        .navbarK .notif-Vagasintegrantes {
            display: block;
            position: absolute;
            top: -12px;
            right: 385px;
            line-height: 16px;
            height: 16px;
            padding: 0 5px;
            font-family: Arial, sans-serif;
            color: white;
            text-shadow: 0 1px rgba(0, 0, 0, 0.25);
            border: 1px solid;
            border-radius: 10px;
            box-shadow: inset 0 1px rgba(255, 255, 255, 0.3), 0 1px 1px rgba(0, 0, 0, 0.09);
            background: #1E90FF;
            border-color: #3A5FCD;
        }

        .navbarK .notif-banho {
            display: block;
            position: absolute;
            top: -12px;
            right: 215px;
            line-height: 16px;
            height: 16px;
            padding: 0 5px;
            font-family: Arial, sans-serif;
            color: white;
            text-shadow: 0 1px rgba(0, 0, 0, 0.25);
            border: 1px solid;
            border-radius: 10px;
            box-shadow: inset 0 1px rgba(255, 255, 255, 0.3), 0 1px 1px rgba(0, 0, 0, 0.09);

            background: #1E90FF;
            border-color: #3A5FCD;
        }

        .navbarK .notif-garagem {
            display: block;
            position: absolute;
            top: -12px;
            right: 40px;
            line-height: 16px;
            height: 16px;
            padding: 0 5px;
            font-family: Arial, sans-serif;
            color: white;
            text-shadow: 0 1px rgba(0, 0, 0, 0.25);
            border: 1px solid;
            border-radius: 10px;
            box-shadow: inset 0 1px rgba(255, 255, 255, 0.3), 0 1px 1px rgba(0, 0, 0, 0.09);

            background: #1E90FF;
            border-color: #3A5FCD;
        }

        .navbarK {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            /* padding: 0.5rem 1rem; */
            margin-top: 27px
        }

        .navOP .notif {
            display: block;
            position: absolute;
            top: -12px;
            right: 3px;
            line-height: 16px;
            height: 16px;
            padding: 0 5px;
            font-family: Arial, sans-serif;
            color: white;
            text-shadow: 0 1px rgba(0, 0, 0, 0.25);
            border: 1px solid;
            border-radius: 10px;
            box-shadow: inset 0 1px rgba(255, 255, 255, 0.3), 0 1px 1px rgba(0, 0, 0, 0.09);
        }

        .navOP .notif {
            background: red;
            border-color: red;
        }
    </style>
    <div class="navOP" style="margin-top: -62px;position: absolute; margin-left: 975px;">
        <nav>
            <ul>
                <a> <i class="fa fa-commenting-o" aria-hidden="true"></i><span class="notif">5</span></a>
            </ul>
        </nav>

    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-group input-group">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="background-color: #000080; color: white;border-color: #000080;">Search</button>
            </div>


            <div class="card">
                <div class="card-header">{{ __('Atividade Recente') }}</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>

                    @endif


                </div>
                <div class="viewPost">
                    <ul id="tweetscontainer" class="tweetscontainer">
                        <li class="tweetcontainer"><img class="tweetprofimg" src="https://pbs.twimg.com/media/CgbqPWLWQAA54lQ.jpg"><span class="tweetprofname">Maria Julia</span><span class="tweetprofuid">@mariajulia</span><a href="#" class="button">Mensagem</a>
                            <div class="ml58px">
                                <form method="get" action="#">

                                    <div class="sobreVaga" style="margin-right: 38px;">
                                        <p style="margin: 0px;margin-left: 10px;margin-top: 13px;">Detalhes/Diferencial:
                                            Procurando-se pessoas sem nenhum tipo de vicios, organizada e que estude ou trabalhe.
                                            O quarto é completamento imobiliado, tendo que dividir o apê com três pessoas.

                                        </p>
                                    </div>
                                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                    <div class="navbarK">
                                        <p> <i class="fa fa-users" aria-hidden="true"></i> Integrantes<span class="notif-integrantes">4</span></p>
                                        <p><i class="fa fa-handshake-o" aria-hidden="true"></i> Vagas<span class="notif-Vagasintegrantes">1</span></p>
                                        <p><i class="fa fa-bath" aria-hidden="true"></i> Banheiro<span class="notif-banho">2</span></p>
                                        <p><i class="fa fa-car" aria-hidden="true"></i> Garagem<span class="notif-garagem">1</span></p>
                                        <!-- <li><a href="#">Conteúdo<span class="notif">5</span></a></li> -->
                                    </div>

                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="overflow: hidden;max-width: 580px;height: calc(100vh - 0px);">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="https://santamaria.com.br/arquivos/Imob21/15810/15810_1.jpg" alt="Primeiro Slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="https://santamaria.com.br/arquivos/Imob21/15810/15810_2.jpg" alt="Segundo Slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="https://santamaria.com.br/arquivos/Imob21/15810/15810_3.jpg" alt="Terceiro Slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="https://santamaria.com.br/arquivos/Imob21/15810/15810_7.jpg" alt="Quarto Slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="https://santamaria.com.br/arquivos/Imob21/15810/15810_8.jpg" alt="Quinto Slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Anterior</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Próximo</span>
                                        </a>

                                    </div>
                                    <div class="geolocaliza" style="margin-top: -125px;">

                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193747.65735583057!2d-74.08508442662732!3d40.645159360017615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24416947c2109%3A0x82765c7404007886!2sBrooklyn%2C%20NY%2C%20EUA!5e0!3m2!1spt-BR!2sbr!4v1611162390971!5m2!1spt-BR!2sbr" width="600" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                                    </div>

                                </form>

                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

</div>
@endsection