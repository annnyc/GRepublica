@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!-- <div class="col-lg-4">
            <div class="nav nav-pills " id="faq-tabs" role="tablist">


                <div class="card-body">
                    <a href="{{ route('about') }}" class="nav-link active" role="tab" aria-controls="tab1">
                        <i class="mdi mdi-help-circle"></i> About
                    </a>

                    <a href="{{ route('home') }}" class="nav-link active" role="tab" aria-controls="tab1">
                        <i class="mdi mdi-help-circle"></i> Voltar
                    </a>
                </div>

            </div>
        </div> -->
        <div class="col-lg-8" style="margin-left: 195px;">
            <div class="tab-content" id="faq-tab-content">
                <div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
                    <div class="accordion" id="accordion-tab-1">
                        <div class="card">
                            <div class="card-header" id="accordion-tab-1-heading-1">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1">G-Republica</button>
                                </h5>
                            </div>
                            <div class="collapse show" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                                <div class="card-body">
                                    <p>G- República é uma aplicação web que permite em sua plataforma que usuários busquem por imóveis compartilhados ou não, e a oferta dos mesmos, além de oferecer serviços de gestão financeira imobiliária.</p>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="accordion-tab-1-heading-2">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2">Objetivo da G-Republica</button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                                <div class="card-body">

                                    <p>
                                        A G-Republica é um empresa que facilita a procura de apartamentos, oferecendo uma plataforma conﬁável e segura para alocar apartamentos. A ideia do negócio surgiu da insatisfação na procura de apê de qualidade e falta de tempo para procurar imóvel. Em pouco tempo de fundação, está começando a colhe os frutos e possui em suas mãos o mercado de imobiliária, movimentando e gerindo transações, provendo um serviço que acolhe cada vez mais usuários. Sua meta é oportunizar o acesso à cultura, promovendo um espaço onde os usuários se sintam livres para buscar seu apartamento dos sonhos, sem se preocupar com burocracias.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="accordion-tab-1-heading-3">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-3" aria-expanded="false" aria-controls="accordion-tab-1-content-3">Valores e Missão</button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-1-content-3" aria-labelledby="accordion-tab-1-heading-3" data-parent="#accordion-tab-1">
                                <div class="card-body">
                                    <p> Nossa missão é fazer um negocio seguro e transparente, sempre colocando as necessidades de nossos clientes e expectativa a cima do nossa. Entretanto, nossos valores e demostrar segurança por meio de cortesia,empatia e competencia, tenha sempre uma boa aparencia e cumpra com a promessa dos serviços de atendimento.</p>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="accordion-tab-1-heading-4">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-4" aria-expanded="false" aria-controls="accordion-tab-1-content-4">Nossa responsabilidade</button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-1-content-4" aria-labelledby="accordion-tab-1-heading-4" data-parent="#accordion-tab-1">
                                <div class="card-body">
                                    <p>Morbo can't understand his teleprompter because he forgot how you say that letter that's shaped like a man wearing a hat. Also Zoidberg. Can we have Bender Burgers again? Goodbye, cruel world. Goodbye, cruel lamp. Goodbye, cruel velvet drapes, lined with what would appear to be some sort of cruel muslin and the cute little pom-pom curtain pull cords.</p>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="accordion-tab-1-heading-5">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-5" aria-expanded="false" aria-controls="accordion-tab-1-content-4">Quem são os fundadores deste sistema?</button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-1-content-5" aria-labelledby="accordion-tab-1-heading-5" data-parent="#accordion-tab-1">
                                <div class="card-body">
                                    <p>Morbo can't understand his teleprompter because he forgot how you say that letter that's shaped like a man wearing a hat. Also Zoidberg. Can we have Bender Burgers again? Goodbye, cruel world. Goodbye, cruel lamp. Goodbye, cruel velvet drapes, lined with what would appear to be some sort of cruel muslin and the cute little pom-pom curtain pull cords.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection