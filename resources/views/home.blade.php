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
            margin-top: 15px;
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

            <div class="menu" style="background-color: white; width: 290px; margin-left: -300px;position: absolute;">
                <h2 style="color: black; font-size: 23px; font-weight: 300; margin-bottom: 18px; margin-left: 55px;margin-top: 12px;">Filtro de Busca
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filter" viewBox="0 0 16 16">
                        <path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </h2>

                <div class="form-group input-group">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="filtroAlugar" id="filtroAlugar" style="background-color: #000080;color: white; border-color: #000080;margin-left: 12px;width: 122px;">Alugar</button>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="FiltroRepublica" id="FiltroRepublica" style="background-color: #000080;color: white;border-color: #000080;margin-left: 6px;">Vagas Republica</button>
                </div>
                <div class="form-group">
                    <!-- <label for="exampleFormControlSelect1" style="margin-left: 53px;margin-top: 30px;">Select de exemplo</label> -->
                    <select class="form-control" id="exampleFormControlSelect1" style="width: 180px;margin-left: 55px;;margin-top: 20px;">
                        <option value="tipoImovel">Tipo do Imovel</option>
                        <option value="ApartG">Apartamento</option>
                        <option value="CasaG">Casa</option>
                        <option value="ComercialG">Casa Comercial</option>
                        <option value="QuitineteG">Quitinete</option>
                    </select>
                </div>
                <div class="form-group">

                    <select class="form-control" id="exampleFormControlSelect1" style="width: 180px; margin-left: 55px;margin-top: 20px;">

                        <option value="selectEstado">Selecione Bairro</option>

                        <option value="Autódromo">Autódromo</option>
                        <option value="Bela Vista">Bela Vista</option>
                        <option value="Belvedere">Belvedere</option>
                        <option value="Boa Vista">Boa Vista</option>
                        <option value="Bom Pastor">Bom Pastor</option>
                        <option value="Bom Retiro">Bom Retiro</option>
                        <option value="Bouganville">Bouganville</option>
                        <option value="Centro">Centro</option>
                        <option value="Condominio Coqueiros">Condominio Coqueiros</option>
                        <option value="Condominio Don Guilherme">Condominio Don Guilherme</option>
                        <option value="Cristo Rei">Cristo Rei</option>
                        <option value="Desbravador">Desbravador</option>
                        <option value="Di Fiori">Di Fiori</option>
                        <option value="DISTRITO FERNANDO MACHADO">DISTRITO FERNANDO MACHADO</option>
                        <option value="Eco Village">Eco Village</option>
                        <option value="Efapi">Efapi</option>
                        <option value="Eldorado">Eldorado</option>
                        <option value="Engenho Braun">Engenho Braun</option>
                        <option value="Espelho das Águas">Espelho das Águas</option>
                        <option value="Esplanada">Esplanada</option>
                        <option value="Interior">Interior</option>
                        <option value="Jardim América">Jardim América</option>
                        <option value="JARDIM EUROPA">JARDIM EUROPA</option>
                        <option value="Jardim Itália">Jardim Itália</option>
                        <option value="Jardim Paraiso">Jardim Paraiso</option>
                        <option value="Jardins Mezomo">Jardins Mezomo</option>
                        <option value="LAGEADO">LAGEADO</option>
                        <option value="Lajeado">Lajeado</option>
                        <option value="Líder">Líder</option>
                        <option value="Loteamento Di Fiori">Loteamento Di Fiori</option>
                        <option value="Ludovico Silvestre">Ludovico Silvestre</option>
                        <option value="Maria Goretti">Maria Goretti</option>
                        <option value="Mirante do Trevo">Mirante do Trevo</option>
                        <option value="Monte Belo">Monte Belo</option>
                        <option value="Palmital">Palmital</option>
                        <option value="Paraíso">Paraíso</option>
                        <option value="Parque das Palmeiras">Parque das Palmeiras</option>
                        <option value="Passo dos Fortes">Passo dos Fortes</option>
                        <option value="Pinheirinho">Pinheirinho</option>
                        <option value="Presidente Médici">Presidente Médici</option>
                        <option value="Saic">Saic</option>
                        <option value="Santa Maria">Santa Maria</option>
                        <option value="Santa Paulina">Santa Paulina</option>
                        <option value="Santo Antônio">Santo Antônio</option>
                        <option value="Santos Dumond">Santos Dumond</option>
                        <option value="Santos Dumont">Santos Dumont</option>
                        <option value="São Cirstóvão">São Cirstóvão</option>
                        <option value="São Cristovão">São Cristovão</option>
                        <option value="São Lucas">São Lucas</option>
                        <option value="São Pedro">São Pedro</option>
                        <option value="Seminário">Seminário</option>
                        <option value="Trevo">Trevo</option>
                        <option value="Universitário">Universitário</option>
                        <option value="Vederti">Vederti</option>
                        <option value="Vila Real">Vila Real</option>
                        <option value="Vila Zonta">Vila Zonta</option>

                    </select>
                </div>


            </div>

            <div class="card">
                <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->
                <div class="card-header" style="padding: 0;"></div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>

                    @endif

                    <div class="rightcontainer">
                        <div class="posttweetcontainer">
                            <img class="posttweetprofimg" src="https://i0.wp.com/www.techcult.com.br/wp-content/uploads/2017/03/perfil-twitter.png?resize=1024%2C1024&amp;ssl=1">
                            <div class="ml56px">
                                <div class="posttweettacontainer">
                                    <textarea id="posttweetta" class="posttweetta" name="{{ Auth::user()->name }}" placeholder="Olá {{ Auth::user()->name }}"></textarea>
                                    <div class="posttweetcountcont">
                                        <span class="posttweetcount"><span id="totalchars">0</span>/250</span>
                                    </div>
                                </div>



                                <div class="posttweetbutcont">

                                    <button id="posttweetbut" class="posttweetbut">Tweet</button>
                                </div>

                                <div class="addImage">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="90" height="30" fill="currentColor" class="bi bi-camera-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                        <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z" />
                                    </svg>


                                </div>
                            </div>
                        </div>
                        <div class="space" style="margin-top: 30px;"></div>
                        <div>
                            <ul id="tweetscontainer" class="tweetscontainer" style="margin-top: 40px;">
                                <li class="tweetcontainer"><img class="tweetprofimg" src="https://pbs.twimg.com/media/CgbqPWLWQAA54lQ.jpg"><span class="tweetprofname">Maria Julia</span><span class="tweetprofuid">@mariajulia</span><a href="{{ route('VagasMoradia') }}" class="button">{{ __('Detalhes') }}</a>
                                    <div class="ml58px">
                                        <p style="margin: 0px;">Vaga para Republica <br>Detalhes/Diferencial:
                                            Procurando-se pessoas sem nenhum tipo de vicios, organizada e que estude ou trabalhe.
                                            O quarto é completamento imobiliado, tendo que dividir o apê com três pessoas.

                                        </p>
                                        <div class="mt10px"><span class="like tweetstats"><i class="fa fa-heart-o"></i><span class="tweetstatscount">0</span></span></div>
                                    </div>
                                    <div class="mensage-chat" style="margin-left: 110px; margin-top: -25px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"></path>
                                        </svg>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

    <script>
        $(function() {

            $('#profilecardname').text(Cookies.get('name'));
            $('#profilecarduid').text('@' + Cookies.get('uid'));

            $statslistitemcount = $('#statslistitemcount');

            $totalchars = $('#totalchars');

            $posttweetta = $('#posttweetta');

            $tweetscontainer = $('#tweetscontainer');

            $posttweetta.keypress(function(e) {
                if (e.keyCode == 13 && !e.shiftKey) {
                    e.preventDefault();
                    return false;
                }

            });

            $posttweetta.keyup(function(e) {
                $totchars = $(this).val().length;
                if ($totchars <= 250)
                    $totalchars.text($totchars);
                else {
                    $totalchars.text('250');
                    $(this).val($(this).val().substring(0, 250));
                }
            });

            $('#posttweetbut').click(function() {
                if (($taval = $.trim($posttweetta.val())).length > 0) {
                    $tweetscontainer.prepend(tweetitem($taval));
                    $posttweetta.val('');
                    $statslistitemcount.text(parseInt($statslistitemcount.text()) + 1);
                }
            });

            // $tweetscontainer.on('click', 'span.retweet', function() {
            //     $tweetstatscount = $(this).children('.tweetstatscount');
            //     $tweetstatscount.text(parseInt($tweetstatscount.text()) + 1);

            //     $tweetscontainer.prepend(tweetitem($tweetstatscount.closest('.tweetcontainer').find('p').text()));
            //     $statslistitemcount.text(parseInt($statslistitemcount.text()) + 1);
            // });

            $tweetscontainer.on('click', 'span.like', function() {
                $tweetstatscount = $(this).children('.tweetstatscount');
                if ($(this).hasClass('red')) {
                    $(this).removeClass('red');
                    $tweetstatscount.text(parseInt($tweetstatscount.text()) - 1);
                } else {
                    $(this).addClass('red');
                    $tweetstatscount.text(parseInt($tweetstatscount.text()) + 1);
                }
            });

            function tweetitem($taval) {
                return '<li class="tweetcontainer">' +
                    '<img class="tweetprofimg" src="https://i0.wp.com/www.techcult.com.br/wp-content/uploads/2017/03/perfil-twitter.png?resize=1024%2C1024&amp;ssl=1">' +
                    '<span class="tweetprofname">' + Cookies.get('name') + '</span>' +
                    '<span class="tweetprofuid">@' + Cookies.get('uid') + '</span>' + '<a href="#" <button class="button">Detalhes</button></a>' +
                    '<div class="ml58px">' +
                    '<p style="margin: 0px;">' + $taval + '</p>' +
                    '<div class="mt10px">' +

                    // '<span class="retweet tweetstats">' +
                    // '<i class="fa fa-retweet"></i>' +
                    // '<span class="tweetstatscount">0</span>' +
                    // '</span>' +


                    '<span class="like tweetstats">' +
                    '<i class="fa fa-heart-o"></i>' +
                    '<span class="tweetstatscount">0</span>' +
                    '</span>' +
                    '</div>' +
                    '</div>' +
                    '<div class="mensage-chat" style="margin-left: 110px; margin-top: -25px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16"><path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/></svg></div>'
                '</li>';
            }
        });
    </script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">



</div>
@endsection