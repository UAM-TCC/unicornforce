@extends('layouts.app')

@section('content')
@guest
<section class="mt-6">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-9 col-lg-8 col-xl-5 font-19">
                <h1 class="display-3 lh-sm">Potencialize seu aprendizado</h1>
            </div>
            <div class="col-md-9 col-xl-5">
                <p class="fs-2">Inscreva-se para obter um smartphone e aprenda a programar</p>
                <a class="text-decoration-none text-white" href="{{ route('register') }}">
                    <button class="btn btn-primary mt-3">Inscrever-se</button>
                </a>
            </div>
        </div>
    </div>
</section>
@else
    @if ($status === 1)
        <section class="mt-6">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-9 col-lg-8 col-xl-5 font-19">
                        <h1 class="display-3 lh-sm">Sua solicitação foi feita !</h1>
                    </div>
                    <div class="col-md-9 col-xl-5">
                        <p class="fs-2">Aguarde até que a equipe UC Avalie.</p>
                        <p class="fs-2">Até lá você pode estudar com nossos materiais.</p>
                        <p class="fs-2">Boa sorte e bons estudos !</p>
                    </div>
                </div>
            </div>
        </section>
    @elseif ($status === 2)
        <section class="mt-6">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-9 col-lg-8 col-xl-5 font-19">
                        <h1 class="display-3 lh-sm">Sua solicitação foi aprovada !</h1>
                    </div>
                    <div class="col-md-9 col-xl-5">
                        <p class="fs-2">Logo você terá seu smartphone em mãos !</p>
                        <p class="fs-2">Até lá você pode estudar com nossos materiais.</p>
                        <p class="fs-2">Boa sorte e bons estudos !</p>
                    </div>
                </div>
            </div>
        </section>
    @elseif ($status === 3)
        <section class="mt-6">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-9 col-lg-8 col-xl-5 font-19">
                        <h1 class="display-3 lh-sm">Poxa que pena sua foi solicitação recusada.</h1>
                    </div>
                    <div class="col-md-9 col-xl-5">
                        <p class="fs-2">Mas não desista, você poderá solicitar novamente.</p>
                        <p class="fs-2">Até lá você pode estudar com nossos materiais.</p>
                        <p class="fs-2">Boa sorte e bons estudos !</p>
                    </div>
                </div>
            </div>
        </section>
    @else
        <section class="mt-6">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-9 col-lg-8 col-xl-5 font-19">
                        <h1 class="display-3 lh-sm">Parabéns ! O primeiro passo foi dado</h1>
                    </div>
                    <div class="col-md-9 col-xl-5">
                        <p class="fs-2">Agora solicite seu smartphone !</p>
                        <a class="text-decoration-none text-white" href="{{ route('requestsmartphone') }}">
                            <button class="btn btn-primary mt-3">Preencher</button>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endguest

<section class="container">
    <h1 class="display-6 fw-semi-bold"> Aprenda mais</h1>
    <p class="fs-2">Materiais didáticos e documentação para todos estudantes de programação</p>
    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('courselist') }}" class="text-decoration-none text-white">
                <div class="border rounded-1 border-700 h-100 features-items">
                    <div class="p-5"><img src="{{ asset('img/cursos.png') }}" alt="Cursos" style="width:48px;height:48px;" />
                        <h3 class="pt-3 lh-base">Cursos</h3>
                        <p class="mb-0">Nós temos uma serie de cursos e conteúdo gratuito para seu aprendizado em programação, confira !</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a href="{{ route('indexdocs') }}" class="text-decoration-none text-white">
                <div class="border rounded-1 border-700 h-100 features-items">
                    <div class="p-5"><img src="{{ asset('img/folder.png') }}" alt="Documentação e testes" style="width:48px;height:48px;" />
                        <h3 class="pt-3 lh-base">Documentação e testes</h3>
                        <p class="mb-0">Configura como funciona nosso projeto e como iniciar no mundo da programação.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="text-center text-xl-start">
            <div class="p-5 d-flex flex-column justify-content-xl-between flex-xl-row">
                <div class="py-3">
                    <h4 class="opacity-40 ls-2 lh-base fw-medium">GOSTOU?</h4>
                    <h2 class="mt-3 fs-4 fs-sm-7 latter-sp-3 lh-base fw-semi-bold">Aproveite nossos cursos agora mesmo! </h2>
                </div>
                <div class="flex-center mt-5">
                    <button class="btn btn-primary rounded-3 mt-4"><a class="text-decoration-none text-white" href="{{ route('courselist') }}">Ver cursos</a><span class="fas fa-arrow-right"></span></button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-footer">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 text-center text-xl-start"></a>
            </div>
            <div class="col-xl-4 pt-2 pt-xl-0">
                <p class="mb-0 text-center text-xl-end"><a class="text-300 text-decoration-none footer-link" href="#!"> </a><a class="text-300 text-decoration-none footer-link ps-4" href="#!"> </a>
                </p>
            </div>
            <div class="col-xl-5 pt-2 pt-xl-0 text-center text-xl-end">
                <p class="mb-0">&copy; Unicorn force</a></p>
            </div>
        </div>
    </div>
</section>
@endsection