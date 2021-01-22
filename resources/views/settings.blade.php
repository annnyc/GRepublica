@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.2.0/css/ionicons.min.css" integrity="sha256-F3Xeb7IIFr1QsWD113kV2JXaEbjhsfpgrKkwZFGIA4E=" crossorigin="anonymous" />
<style>
    .faq-search-wrap {
        padding: 50px 0 60px;
    }

    .faq-search-wrap .form-group .form-control,
    .faq-search-wrap .form-group .dd-handle {
        border-top-right-radius: .25rem;
        border-bottom-right-radius: .25rem;
    }

    .faq-search-wrap .form-group .input-group-append {
        position: absolute;
        right: 0;
        top: 0;
        bottom: 0;
        z-index: 10;
        pointer-events: none;
    }

    .faq-search-wrap .form-group .input-group-append .input-group-text {
        background: transparent;
        border: none;
    }

    .faq-search-wrap .form-group .input-group-append .input-group-text .feather-icon>svg {
        height: 18px;
        width: 18px;
    }

    .bg-teal-light-3 {
        background-color: #7fcdc1;
    }

    .hk-row {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -10px;
        margin-left: -10px;
    }

    @media (min-width: 576px) {
        .mt-sm-60 {
            margin-top: 60px;
        }
    }

    .mt-30 {
        margin-top: 30px;
    }

    .list-group-item.active {
        background-color: #00acf0;
        border-color: #00acf0;
    }

    .accordion .card .card-header.activestate {
        border-width: 1px;
    }

    .accordion .card .card-header {
        padding: 0;
        border-width: 0;
    }

    .card.card-lg .card-header,
    .card.card-lg .card-footer {
        padding: .9rem 1.5rem;
    }

    .accordion>.card .card-header {
        margin-bottom: -1px;
    }

    .card .card-header {
        background: transparent;
        border: none;
    }

    .accordion.accordion-type-2 .card .card-header>a.collapsed {
        color: #324148;
    }

    .accordion .card:first-of-type .card-header:first-child>a {
        border-top-left-radius: calc(.25rem - 1px);
        border-top-right-radius: calc(.25rem - 1px);
    }

    .accordion.accordion-type-2 .card .card-header>a {
        background: transparent;
        color: #00acf0;
        padding-left: 50px;
    }

    .accordion .card .card-header>a.collapsed {
        color: #324148;
        background: transparent;
    }

    .accordion .card .card-header>a {
        background: #00acf0;
        color: #fff;
        font-weight: 500;
        padding: .75rem 1.25rem;
        display: block;
        width: 100%;
        text-align: left;
        position: relative;
        -webkit-transition: all 0.2s ease-in-out;
        -moz-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
    }

    a {
        text-decoration: none;
        color: #00acf0;
        -webkit-transition: color 0.2s ease;
        -moz-transition: color 0.2s ease;
        transition: color 0.2s ease;
    }


    .badge.badge-pill {
        border-radius: 50px;
    }

    .badge.badge-light {
        background: #eaecec;
        color: #324148;
    }

    .badge {
        font-weight: 500;
        border-radius: 4px;
        padding: 5px 7px;
        font-size: 72%;
        letter-spacing: 0.3px;
        vertical-align: middle;
        display: inline-block;
        text-align: center;
        text-transform: capitalize;
    }

    .ml-15 {
        margin-left: 15px;
    }

    .accordion.accordion-type-2 .card .card-header>a.collapsed:after {
        content: "\f158";
    }

    .accordion.accordion-type-2 .card .card-header>a::after {
        display: inline-block;
        font: normal normal normal 14px/1 'Ionicons';
        /* speak: none; */
        text-transform: none;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-rendering: auto;
        position: absolute;
        content: "\f176";
        font-size: 21px;
        top: 15px;
        left: 20px;
    }

    .mr-15 {
        margin-right: 15px;
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

<div class="container-fluid">
    <div class="navOP" style="margin-top: -62.5px;position: absolute;margin-left: 1095px;">
        <nav>
            <ul>
                <a> <i class="fa fa-commenting-o" aria-hidden="true"></i><span class="notif">5</span></a>
            </ul>
        </nav>

    </div>
    <!-- Row -->
    <div class="row">
        <div class="col-xl-12 pa-0">
            <div class="container mt-sm-60 mt-30">
                <div class="hk-row">
                    <div class="col-xl-4">
                        <div class="card">
                            <h6 class="card-header">
                                Configurações
                            </h6>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex align-items-center active">
                                    <i class="ion ion-md-sunny mr-15"></i>Terms &amp; conditions<span class="badge badge-light badge-pill ml-15"></span>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="card card-lg">
                            <div class="accordion accordion-type-2 accordion-flush" id="accordion_2">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between activestate">
                                        <a role="button" data-toggle="collapse" href="#collapse_1i" aria-expanded="true">Idioma e região</a>
                                    </div>
                                    <div id="collapse_1i" class="collapse show" data-parent="#accordion_2" role="tabpanel">
                                        <div class="card-body pa-15">
                                            <div class="col-md-3 mb-3">
                                                <form method="get" action="#">
                                                    <label for="validationIdioma">Escolha o idioma:</label>
                                                    <select class="form-control" id="validationIdioma" name="Config-idioma" required>
                                                        <option value="">Selecione</option>
                                                        <option value="pt">Português</option>
                                                        <option value="englês">Inglês</option>
                                                        <option value="espanhol">Espanhol</option>
                                                    </select>

                                                    <div class="invalid-feedback">
                                                        Por favor, informe uma linguagem válida.
                                                    </div>
                                                    <br>
                                                    <button class="btn btn-primary" type="submit">Atualizar</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_2i" aria-expanded="false">Notificações</a>
                                    </div>
                                    <div id="collapse_2i" class="collapse" data-parent="#accordion_2">
                                        <div class="card-body pa-15">
                                            <div class="col-md-3 mb-3">
                                                <form method="get" action="#" style="margin-left: 36px;">
                                                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                    <label for="vehicle1"> Notificar atividade de vagas.</label><br>
                                                    <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                                                    <label for="vehicle2"> Notificar vencimento de Débito.</label><br>
                                                    <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                                                    <label for="vehicle3">Mostrar indice de visualização da vaga no email.</label><br><br>

                                                    <button class="btn btn-primary" type="submit">Atualizar</button>
                                                </form>
                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_4i" aria-expanded="false">Contato da conta</a>
                                    </div>
                                    <div id="collapse_4i" class="collapse" data-parent="#accordion_2">
                                        <div class="card-body pa-15">
                                            <div class="card-body pa-15">
                                                <div class="col-md-3 mb-3">
                                                    <form method="get" action="#">
                                                        <div class="form-group row">
                                                            <!-- <label for="inputPassword" class="col-sm-2 col-form-label">Senha</label> -->
                                                            <p>Email principal da sua conta, caso deseje mudar atualize-o.</p>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="TermocontaEmail" value=" {{ Auth::user()->email }}">
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <button class="btn btn-primary" type="submit">Atualizar</button>
                                                    </form>

                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_5i" aria-expanded="false">Segurança e Privacidade</a>
                                    </div>
                                    <div id="collapse_5i" class="collapse" data-parent="#accordion_2">
                                        <div class="card-body pa-15">
                                            <form method="get" action="#" style="margin-left: 36px;">
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                <label for="vehicle1">Desejo notificações de mensagens de terceiros no e-mail.</label><br>
                                                <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                                                <label for="vehicle2">Deseja que mecanismos de pesquisa fora do G-Republica mostrem links para o seu perfil.</label><br>
                                                <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                                                <label for="vehicle3"> Ativar histórico de localização para seus dispositivos móveis.</label><br><br>
                                                <button class="btn btn-primary" type="submit">Atualizar</button>
                                            </form>


                                        </div>
                                        <div class="card-body pa-15">
                                            <p style="margin-left: 45px;">
                                                Alterar senha, é recomendável usar uma senha forte que você não esteja usando em nenhum outro lugar
                                            </p>
                                            <form class="form-inline">
                                                <div class="form-group mb-2">
                                                    <label for="ConfigBloqueio" class="sr-only"></label>
                                                    <input type="text" readonly class="form-control-plaintext" id="ConfigBloqueio">
                                                </div>
                                                <div class="form-group mx-sm-3 mb-2">
                                                    <label for="inputBloqueio1" class="sr-only">Usuário</label>
                                                    <input type="password" class="form-control" id="inputBloqueio1" placeholder="Senha">
                                                </div>
                                                <button type="submit" class="btn btn-primary mb-2">Confirmar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_8i" aria-expanded="false">Bloqueio</a>
                                    </div>
                                    <div id="collapse_8i" class="collapse" data-parent="#accordion_2">
                                        <div class="card-body pa-15">
                                            <p>Quando você bloqueia alguém, essa pessoa não pode mais ver as coisas que você publica
                                                na sua linha do tempo, até mesmo iniciar uma conversa com você.
                                            </p>
                                            <form class="form-inline">
                                                <div class="form-group mb-2">
                                                    <label for="ConfigBloqueio" class="sr-only"></label>
                                                    <input type="text" readonly class="form-control-plaintext" id="ConfigBloqueio">
                                                </div>
                                                <div class="form-group mx-sm-3 mb-2">
                                                    <label for="inputBloqueio1" class="sr-only">Usuário</label>
                                                    <input type="text" class="form-control" id="inputBloqueio1" placeholder="Usuário">
                                                </div>
                                                <button type="submit" class="btn btn-primary mb-2">Confirmar</button>
                                            </form>
                                        </div>


                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Row -->
</div>
@endsection