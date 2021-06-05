@extends('layouts.app')

@section('content')

<style>
.bg-collapse {
    background-color: #222222 !important;
    border-radius: 0.5rem;
    border: #222222;
}
</style>

<div class="container">
    <br>
    <h1 class="d-flex justify-content-center align-items-center display-5 fw-semi-bold">SOBRE NÓS</h1><br>
    <p class="d-flex justify-content-center align-items-end text-center fs-2">
        A Unicorn Force nasceu em 2021, por seis graduandos:
        Thiago Pessia, Yasmin Albanese, Manoel Merlin, Carolina Cinque, Luiz Felipe Felix e Nancy Nery;
        todos com a mesma proposta: facilitar o acesso a dispostivos de baixo custo para programadores iniciantes.
        Desde então, o projeto se tornou motivo de orgulho para nós por estar em constante evolução
        com novas indicações de conteúdos, facilidades para adquirir um dispositivo e feedback da comunidade.<br><br>
        Nossos beneficiários são responsáveis pelo crescimento do nosso projeto e é por eles que
        continuamos evoluindo e melhorando a experiência do projeto Unicorn Force cada vez mais.
    </p>
</div>

<!-- Missão, Valores e Visão -->
<section class="container">
    <div class="row">
        <div class="col-lg-4 d-flex justify-content-center">
            <div class="card bg-collapse" style="width: 25rem;">
                <img class="card-img-top cellphones" src="{{ asset('img/icon-html5.png') }}" alt="Missão">
                <div class="card-body text-center">
                    <h5 class="card-title">MISSÃO</h5>
                    <p class="card-text">Nossa missão é propagar a acessibilidade de dispositivos para programadores iniciantes,
                        combinando o baixo custo com a efetividade de um sistema completo.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 d-flex justify-content-center">
            <div class="card bg-collapse" style="width: 25rem;">
                <img class="card-img-top cellphones" src="{{ asset('img/valores.png') }}" alt="Valores">
                <div class="card-body text-center">
                    <h5 class="card-title">VALORES</h5>
                    <p class="card-text">Com os preços altos para equipamentos de tecnologia,
                        pessoas de baixa renda não possuem acesso a dispositivos utilizados para performance na programação.
                        Portanto, temos como principal valor a vontade de facilitar a distribuição destas ferramentas para quem mais necessita,
                        gerando novas oportunidades para pessoas que precisam.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 d-flex justify-content-center">
            <div class="card bg-collapse" style="width: 25rem;">
                <img class="card-img-top cellphones" src="{{ asset('img/visao.png') }}" alt="Visão">
                <div class="card-body text-center">
                    <h5 class="card-title">VISÃO</h5>
                    <p class="card-text">Temos como visão mudar a forma como o mercado de trabalho olha para nosso público-alvo,
                        sejam eles programdores de baixa renda ou iniciantes. Visualizamos gerar oportunidades únicas para pessoas que carecem
                        de chances para serem inseridas no mercado.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<br>
<br>

<br><!-- Footer -->
<section class="bg-footer mt-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 text-center text-xl-start"></a>
            </div>
            <div class="col-xl-4 pt-2 pt-xl-0">
                <p class="mb-0 text-center text-xl-end"><a class="text-300 text-decoration-none footer-link" href="#!"> </a><a class="text-300 text-decoration-none footer-link ps-4" href="#!"> </a>
                </p>
            </div>
            <div class="col-xl-5 pt-2 pt-xl-0 text-center text-xl-end">
                <p class="mb-0">&copy; Unicorn Force</a></p>
            </div>
        </div>
    </div>
</section>
@endsection('content')