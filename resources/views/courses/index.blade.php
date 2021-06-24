@extends('layouts.app')
@section('content')
<section class="container">
    <h1 class="d-flex justify-content-center display-5 fw-semi-bold">O que você prefere?</h1>
    <p class="d-flex justify-content-center fs-2">Aqui você tem liberdade! Escolha entre uma variedade de cursos gratuitos ou, se preferir, também temos indicações de cursos pagos para você.</p><br>
    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('freecourses') }}" class="text-decoration-none text-white">
                <div class="border rounded-1 border-700 h-100 features-items" style="background: linear-gradient(45deg,rgba(29, 236, 197, 0.5),#3FBD57 100%);">
                    <div class="p-5">
                        <img src="{{ asset('img/gratuitos.png') }}" alt="Cursos gratuitos" style="width:64px;height:64px;" />
                        <h3 class="pt-3 lh-base">Cursos Gratuitos</h3>
                        <p class="mb-0">Clique aqui para descobrir nossas indicações de cursos na faixa para você estudar!</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a href="{{ route('paidcourses') }}" class="text-decoration-none text-white">
                <div class="border rounded-1 border-700 h-100 features-items" style="background: linear-gradient(45deg,rgba(29, 236, 197, 0.5),rgba(91, 14, 214, 0.5) 100%);">
                    <div class="p-5">
                        <img src="{{ asset('img/pagos.png') }}" alt="Cursos pagos" style="width:64px;height:64px;" />
                        <h3 class="pt-3 lh-base">Cursos Pagos</h3>
                        <p class="mb-0">Clique aqui para acessar um acervo de cursos pagos e indicados por nós, aproveite!</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Documentações e Tutoriais -->
<section>
    <div class="container">
        <h1 class="d-flex justify-content-center display-5 fw-semi-bold">Documentações e Tutoriais</h1><br><br>
        <div class="row">
            <div class="col d-flex justify-content-center align-items-center">
                <a class="" href="https://developer.mozilla.org/pt-BR/docs/Web/HTML" target="_blank">
                    <img src="{{ asset('img/icon-html5.png') }}" alt="Icone HTML5" style="width: 125px;">
                </a>
            </div>
            <div class="col d-flex justify-content-center align-items-center">
                <a class="" href="https://developer.mozilla.org/pt-BR/docs/Web/CSS" target="_blank">
                    <img src="{{ asset('img/icon-css3.png') }}" alt="Icone CSS3" style="width: 77px;">
                </a>
            </div>
            <div class="col d-flex justify-content-center align-items-center">
                <a class="" href="https://getbootstrap.com.br/docs/4.1/getting-started/introduction/" target="_blank">
                    <img src="{{ asset('img/icon-bootstrap.png') }}" alt="Icone Bootstrap" style="width: 125px;">
                </a>
            </div>
            <div class="col d-flex justify-content-center align-items-center">
                <a class="" href="https://developer.mozilla.org/pt-BR/docs/Web/JavaScript" target="_blank">
                    <img src="{{ asset('img/icon-javascript.png') }}" alt="Icone JavaScript" style="width: 95px;">
                </a>
            </div>
            <div class="w-100"></div>
            <div class="col d-flex justify-content-center align-items-center">
                <a class="" href="https://docs.microsoft.com/pt-br/dotnet/csharp/" target="_blank">
                    <img src="{{ asset('img/icon-csharp.png') }}" alt="Icone C#" style="width: 90px;">
                </a>
            </div>
            <div class="col d-flex justify-content-center align-items-center">
                <a class="" href="https://www.oracle.com/br/java/technologies/javase-jdk8-doc-downloads.html" target="_blank">
                    <img src="{{ asset('img/icon-java.png') }}" alt="Icone Java" style="width: 120px;">
                </a>
            </div>
            <div class="col d-flex justify-content-center align-items-center">
                <a class="" href="https://docs.python.org/pt-br/3/" target="_blank">
                    <img src="{{ asset('img/icon-python.png') }}" alt="Icone Python" style="width: 100px;">
                </a>
            </div>
            <div class="col d-flex justify-content-center align-items-center">
                <a class="" href="https://nodejs.org/pt-br/docs/" target="_blank">
                    <img src="{{ asset('img/icon-node.png') }}" alt="Icone Node.js" style="width: 120px;">
                </a>
            </div>
            <div class="w-100"></div>
            <div class="col d-flex justify-content-center align-items-center">
                <a class="" href="https://www.devmedia.com.br/comandos-importantes-linux/23893" target="_blank">
                    <img src="{{ asset('img/icon-linux.png') }}" alt="Icone Linux" style="width: 95px;">
                </a>
            </div>
            <div class="col d-flex justify-content-center align-items-center">
                <a class="" href="https://www.php.net/manual/pt_BR/index.php" target="_blank">
                    <img src="{{ asset('img/icon-php.svg') }}" alt="Icone PHP" style="width: 135px;">
                </a>
            </div>
            <div class="col d-flex justify-content-center align-items-center">
                <a class="" href="https://dev.mysql.com/doc/" target="_blank">
                    <img src="{{ asset('img/icon-mysql.png') }}" alt="Icone MySQL" style="width: 115px;">
                </a>
            </div>
            <div class="col d-flex justify-content-center align-items-center">
                <a class="" href="https://www.arduino.cc/reference/pt/" target="_blank">
                    <img src="{{ asset('img/icon-arduino.png') }}" alt="Icone Arduino" style="width: 110px;">
                </a>
            </div>
        </div>
    </div>
</section>
@endsection