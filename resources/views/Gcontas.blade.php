@extends('layouts.app')
@section('content')
<div class="container">

    <div class="row profile">
        <div class="col-md-3">
            <div class="profile-sidebar">

                <div class="profile-userpic">
                    <img src="{!! asset('img/user-removebg-preview.png') !!}" class="img-responsive" alt="">

                </div>


                <div class="profile-usertitle">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>

                    @endif
                    <div class="profile-usertitle-name">
                        {{ Auth::user()->name }}
                    </div>


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
                <form method="post" action="#">
                    <form>
                        <legend>Prestações de G-Contas</legend>
                        <br>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationItem">Adicione Item</label>
                                <input type="text" class="form-control" id="validationItem01" placeholder="Item nome" required>
                                <div class="valid-feedback">
                                    Tudo certo!
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationItem">Valor</label>
                                <input type="text" class="form-control" id="validationItem02" placeholder="Valor" required>
                                <div class="valid-feedback">
                                    Tudo certo!
                                </div>
                            </div>

                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button class="btn btn-primary" type="submit">Cancel</button>
                    </form>

                    <legend style="padding-top: 24px;"> Mais Espeficicações</legend>
                    <button class="btn btn-primary" type="submit">Gerar PDF</button>
                    <button class="btn btn-primary" type="submit">Referencias de mês/ano</button>
                    <button class="btn btn-primary" type="submit">Estatistica </button>


                    <legend style="padding-top: 24px;">Relatorio do Mês</legend>
                    <div class="form-row">

                        <table border="1">
                            <tr>
                                <th style="width:80px;text-align: center;"> Mês </th>
                                <th style="width:190px;text-align: center;"> Item </th>
                                <th style="width:100px;text-align: center;"> Valor </th>
                            </tr>

                        </table>

                    </div>




                </form>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection