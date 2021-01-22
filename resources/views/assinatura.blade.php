@extends('layouts.app')
@section('content')
<style>
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
<div class="container">
    <div class="navOP" style="margin-top: -82px;position: absolute; margin-left: 975px;">
        <nav>
            <ul>
                <a> <i class="fa fa-commenting-o" aria-hidden="true"></i><span class="notif">5</span></a>
            </ul>
        </nav>

    </div>

    <div class="row profile">
        <div class="col-md-3">
            <div class="profile-sidebar">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                    <img src="{!! asset('img/user-removebg-preview.png') !!}" class="img-responsive" alt="">

                </div>

                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>

                    @endif
                    <div class="profile-usertitle-name">
                        {{ Auth::user()->name }}
                    </div>

                    <!-- Nav option in user -->
                    <div class="profile-usermenu">
                        <ul class="navOptionT">
                            <li>
                                <a class="dropdown-item" href="{{ route('perfil') }}">
                                    {{ __('Perfil') }}
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('assinatura') }}">
                                    {{ __('Assinatura') }}
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('Gcontas') }}">
                                    {{ __('G-Contas') }}
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('encerrarconta') }}">
                                    {{ __('Encerrar Conta') }}
                                </a>

                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="profile-content">

                <form method="get" action="#" style="margin-left: 5px;
                        margin-right: 35px;
                        /* justify-content: center; */
                        text-align: justify;">
                    <fieldset>
                        <legend>Assinatura</legend>
                    </fieldset>

                    <div class="card" style="width: 18rem;">
                        <img src="{!! asset('img/ape.jpg') !!}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">G-Republica PRO</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                        <div class="card-body">

                            <a href="#" class="card-link">Register</a>
                        </div>
                    </div>








                </form>
            </div>
        </div>
    </div>
</div>

@endsection