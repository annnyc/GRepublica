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
                            <li class="active">
                                <a href="#">
                                    <i class=""></i>
                                    Perfil </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class=""></i>
                                    Assinatura </a>
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
                <form method="post">
                    <form class="needs-validation" novalidate>
                        <legend>Dados Pessoais</legend>
                        <br>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom01">Primeiro nome</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="Nome"  required>
                                <div class="valid-feedback">
                                    Tudo certo!
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom02">Sobrenome</label>
                                <input type="text" class="form-control" id="validationCustom02" placeholder="Sobrenome"  required>
                                <div class="valid-feedback">
                                    Tudo certo!
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustomUsername">Usuário</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                    </div>
                                    <input type="text" class="form-control" id="validationCustomUsername" placeholder="Usuário" aria-describedby="inputGroupPrepend" required>
                                    <div class="invalid-feedback">
                                        Por favor, escolha um nome de usuário.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- documentos user -->
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom01">CPF</label>
                                <input type="text" class="form-control" id="cpf" name="cpf" size="13" maxlength="14" placeholder="000.000.000-00"  required>
                                <!-- <input type="text" class="form-control" id="validationCustom01" placeholder="Nome"  required> -->
                                
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom02">RG</label>
                                <input type="text" class="form-control" id="rg" name="rg" size="12" maxlength="12" placeholder="00.000.000-0"  required>
                                <!-- <input type="text" class="form-control" id="validationCustom02" placeholder="Sobrenome"  required> -->
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03">Cidade</label>
                                <input type="text" class="form-control" id="validationCustom03" placeholder="Cidade" required>
                                <div class="invalid-feedback">
                                    Por favor, informe uma cidade válida.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom04">Estado</label>
                                <select class="form-control" id="validationCustom04" name="estado" required>
                                        <option value="">selecione</option>
                                        <option value="ac">Acre</option>
                                        <option value="al">Alagoas</option>
                                        <option value="am">Amazonas</option>
                                        <option value="ap">Amapá</option>
                                        <option value="ba">Bahia</option>
                                        <option value="ce">Ceará</option>
                                        <option value="df">Distrito Federal</option>
                                        <option value="es">Espírito Santo</option>
                                        <option value="go">Goiás</option>
                                        <option value="ma">Maranhão</option>
                                        <option value="mt">Mato Grosso</option>
                                        <option value="ms">Mato Grosso do Sul</option>
                                        <option value="mg">Minas Gerais</option>
                                        <option value="pa">Pará</option>
                                        <option value="pb">Paraíba</option>
                                        <option value="pr">Paraná</option>
                                        <option value="pe">Pernambuco</option>
                                        <option value="pi">Piauí</option>
                                        <option value="rj">Rio de Janeiro</option>
                                        <option value="rn">Rio Grande do Norte</option>
                                        <option value="ro">Rondônia</option>
                                        <option value="rs">Rio Grande do Sul</option>
                                        <option value="rr">Roraima</option>
                                        <option value="sc">Santa Catarina</option>
                                        <option value="se">Sergipe</option>
                                        <option value="sp">São Paulo</option>
                                        <option value="to">Tocantins</option>
                                    </select>
                                <!-- <input type="text" class="form-control" id="validationCustom04" placeholder="Estado" required> -->
                                <div class="invalid-feedback">
                                    Por favor, informe um estado válido.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom05">CEP</label>
                                <input type="text" class="form-control" id="validationCustom05" placeholder="CEP" required>
                                <div class="invalid-feedback">
                                    Por favor, informe um CEP válido.
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck">
                                    Concordo com os termos e condições
                                </label>
                                <div class="invalid-feedback">
                                    Você deve concordar, antes de continuar.
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Atualizar</button>
                        <button class="btn btn-primary" type="submit">Enviar</button>
                    </form>

                    <script>
                        // Exemplo de JavaScript inicial para desativar envios de formulário, se houver campos inválidos.
                        (function() {
                            'use strict';
                            window.addEventListener('load', function() {
                                // Pega todos os formulários que nós queremos aplicar estilos de validação Bootstrap personalizados.
                                var forms = document.getElementsByClassName('needs-validation');
                                // Faz um loop neles e evita o envio
                                var validation = Array.prototype.filter.call(forms, function(form) {
                                    form.addEventListener('submit', function(event) {
                                        if (form.checkValidity() === false) {
                                            event.preventDefault();
                                            event.stopPropagation();
                                        }
                                        form.classList.add('was-validated');
                                    }, false);
                                });
                            }, false);
                        })();
                    </script>


                </form>
            </div>
        </div>
    </div>
</div>

@endsection