@extends('layouts.app')
@section('content')
<div class="container">

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
                            <li >
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
                                <a href="#">
                                    <i class=""></i>
                                    G-Contas </a>
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
                <form method="post" style="margin-left: 35px;
                        margin-right: 35px;
                        /* justify-content: center; */
                        text-align: justify;"
                >
                    <fieldset>
                        <legend>Encerrar conta</legend>
                    </fieldset>

                    <p><b>Aviso:</b> você tem certeza que deseja encerrar sua conta,
                        esta opção não poderá ser revertida e você perderá todos seus dados.
                    <p>
                    <div class="profile-userbuttons">
                        <!-- <button type="button" class="btn btn-success btn-sm">Salvar</button> -->
                        <button type="button" class="btn btn-danger btn-sm">Encerrar conta</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection