@extends('layouts.app')
@section('content')

<style>
	.card-img-top {
		height: 8rem;
	}

	.form-control {
		color: #3FBD57 !important;
	}

    .card {
        background-color: #222222 !important;
        border: none;;
    }
</style>
<section>
    <div class="container">
        <div class="accordion" id="accordionExample">

            <!-- Front End Collapse -->
            <div class="card bg-collapse">
                <div class="card-header">
                    <div class="row">
                        <h5 class="col d-flex justify-content-start align-items-center mb-0">
                            <button class="btn btn-link text-decoration-none text-dark bg-btncollapse collapsed justify-content-between text-green font-33" type="button">
                                Front End
                            </button>
                        </h5>
                        <div class="col d-flex justify-content-end align-items-center">
                            <img src="{{ asset('img/icon-html5.png') }}" alt="Icone HTML5" style="width: 50px;">
                            <img src="{{ asset('img/icon-css3.png') }}" alt="Icone CSS3" style="width: 31px;">
                            <img src="{{ asset('img/icon-bootstrap.png') }}" alt="Icone Bootstrap" style="width: 50px;">
                            <img src="{{ asset('img/icon-javascript.png') }}" alt="Icone JavaScript" style="width: 40px;">
                        </div>
                    </div>
                </div>
                <div id="collapseOne" class="collapse show">
                    <div class="card-body">
                        <div class="row">
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Udemy</h5>
                                        <p class="card-text">HTML5, CSS3 e Javascript na prática (3 Projetos) - Aprenda os três pilares do desenvolvimento web front-end na prática!</p>
                                        <a href="https://www.udemy.com/course/html5-css3-e-javascript-na-pratica-3-projetos/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">TIM Tec</h5>
                                        <p class="card-text">Curso de Desenvolvimento de front-end gratuito: trabalhar de forma integrada com as linguagens HTML, CSS e JavaScript.</p>
                                        <a href="https://cursos.timtec.com.br/course/desenvolvimento-de-front-end/intro/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">DevMedia</h5>
                                        <p class="card-text">Curso de Front-End: Aplicação Web com HTML, CSS e JavaScript</p>
                                        <a href="https://www.devmedia.com.br/curso/curso-front-end/1960" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col d-flex justify-content-around align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Cursou</h5>
                                        <p class="card-text">Curso de HTML5 – Introdução ao Front End</p>
                                        <a href="https://www.cursou.com.br/informatica/html5-introducao-front-end/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-around align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">DevMedia</h5>
                                        <p class="card-text">Curso Grátis de CSS</p>
                                        <a href="https://www.devmedia.com.br/curso/curso-css-gratuito/2215" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PHP Collapse -->
            <div class="card bg-collapse">
                <div class="card-header" id="headingTwo">
                    <div class="row">
                        <h5 class="col d-flex justify-content-start align-items-center mb-0">
                            <button class="btn btn-success bg-btncollapse collapsed justify-content-start" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                PHP
                            </button>
                        </h5>
                        <div class="col d-flex justify-content-end align-items-center">
                            <img src="{{ asset('img/icon-php.svg') }}" alt="Icone PHP" style="width: 80px;">
                        </div>
                    </div>
                </div>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="row">
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Portal IDEA</h5>
                                        <p class="card-text">Curso Online e Gratuito de PHP</p>
                                        <a href="https://portalidea.com.br/curso-gratuito-php" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Udemy</h5>
                                        <p class="card-text">PHP 7 do Básico ao Intermediário</p>
                                        <a href="https://www.udemy.com/course/php-do-basico-ao-intermediario/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Curso em Vídeo</h5>
                                        <p class="card-text">Curso de PHP para iniciantes - Playlist YouTube</p>
                                        <a href="https://www.youtube.com/watch?v=F7KzJ7e6EAc&list=PLHz_AreHm4dm4beCCCmW4xwpmLf6EHY9k" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Node Studio</h5>
                                        <p class="card-text">Curso de PHP - Playlist YouTube</p>
                                        <a href="https://www.youtube.com/watch?v=XwpsxPmQN2E&list=PLwXQLZ3FdTVEITn849NlfI9BGY-hk1wkq" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Java Collapse -->
            <div class="card bg-collapse">
                <div class="card-header" id="headingThree">
                    <div class="row">
                        <h5 class="col d-flex justify-content-start align-items-center mb-0">
                            <button class="btn btn-success bg-btncollapse collapsed justify-content-start" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Java
                            </button>
                        </h5>
                        <div class="col d-flex justify-content-end align-items-center">
                            <img src="{{ asset('img/icon-java.png') }}" alt="Icone Java" style="width: 50px;">
                        </div>
                    </div>
                </div>
                <div id="collapseThree"  class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="row">
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">RL System</h5>
                                        <p class="card-text">Curso de Java Grátis</p>
                                        <a href="https://www.rlsystem.com.br/curso-java-gratis/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">GINEAD</h5>
                                        <p class="card-text">Curso Online Grátis de Linguagem Java</p>
                                        <a href="https://www.ginead.com.br/curso/curso-gratuito-de-linguagem-java" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Curso em Vídeo</h5>
                                        <p class="card-text">Java para Iniciantes - Playlist YouTube</p>
                                        <a href="https://www.youtube.com/watch?v=sTX0UEplF54&list=PLHz_AreHm4dkI2ZdjTwZA4mPMxWTfNSpR" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">DevDojo</h5>
                                        <p class="card-text">Maratona Java - Playlist YouTube</p>
                                        <a href="https://www.youtube.com/watch?v=kkOSweUhGZM&list=PL62G310vn6nHrMr1tFLNOYP_c73m6nAzL" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">De aluno para aluno</h5>
                                        <p class="card-text">Curso Gratuito de Java - Playlist YouTube </p>
                                        <a href="https://www.youtube.com/watch?v=3qnOKAlJgtI&list=PLa75BYTPDNKZLzk3xG-gSXSU_AAq5RP4g" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">UAITEC</h5>
                                        <p class="card-text">Curso Desenvolvedor Java</p>
                                        <a href="https://www.uaitec.mg.gov.br/inicio/cursos/curso/3112/desenvolvedor-java" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Python Collapse -->
            <div class="card bg-collapse">
                <div class="card-header" id="headingFour">
                    <div class="row">
                        <h5 class="col d-flex justify-content-start align-items-center mb-0">
                            <button class="btn btn-success bg-btncollapse collapsed justify-content-start" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Python
                            </button>
                        </h5>
                        <div class="col d-flex justify-content-end align-items-center">
                            <img src="{{ asset('img/icon-python.png') }}" alt="Icone Python" style="width: 48px;">
                        </div>
                    </div>
                </div>
                <div id="collapseFour"  class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="row">
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Curso em Vídeo</h5>
                                        <p class="card-text">Curso de Python - Playlist YouTube</p>
                                        <a href="https://www.youtube.com/watch?v=S9uPNppGsGo&list=PLvE-ZAFRgX8hnECDn1v9HNTI71veL3oW0" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Hashtag Programação</h5>
                                        <p class="card-text">Como Sair do ZERO no Python em apenas uma aula - Playlist YouTube</p>
                                        <a href="https://www.youtube.com/watch?v=GQpQha2Mfpg" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">CFBCursos</h5>
                                        <p class="card-text">Curso de Python - Playlist YouTube</p>
                                        <a href="https://www.youtube.com/watch?v=Ay-MakuSg08&list=PLx4x_zx8csUhuVgWfy7keQQAy7t1J35TR" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Jefferson Lobato</h5>
                                        <p class="card-text">Curso completo de Python - Playlist YouTube</p>
                                        <a href="https://www.youtube.com/watch?v=wynFBNb2PcU&list=PLLVddSbilcul-1bAKtMKoL6wOCmDIPzFJ" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Prime Cursos</h5>
                                        <p class="card-text">Curso de Programação em Python Online Grátis</p>
                                        <a href="https://www.primecursos.com.br/programacao-em-python/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- C# Collapse -->
            <div class="card bg-collapse">
                <div class="card-header" id="headingFive">
                    <div class="row">
                        <h5 class="col d-flex justify-content-start align-items-center mb-0">
                            <button class="btn btn-success bg-btncollapse collapsed justify-content-start" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                C#
                            </button>
                        </h5>
                        <div class="col d-flex justify-content-end align-items-center">
                            <img src="{{ asset('img/icon-csharp.png') }}" alt="Icone C#" style="width: 40px;">
                        </div>
                    </div>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="row">
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">DevMedia</h5>
                                        <p class="card-text">Introdução a programação com C#</p>
                                        <a href="https://www.devmedia.com.br/curso/introducao-a-programacao-com-csharp/368" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Udemy</h5>
                                        <p class="card-text">Introdução ao C# - Uma Abordagem Prática</p>
                                        <a href="https://www.udemy.com/course/introducao-ao-c-uma-abordagem-pratica-modulo-i/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Udemy</h5>
                                        <p class="card-text">Manipulando Listas Genéricas em C# [+eBook]</p>
                                        <a href="https://www.udemy.com/course/listas-genericas-em-csharp/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">CFBCursos</h5>
                                        <p class="card-text">Curso de Programação C# - Playlist YouTube</p>
                                        <a href="https://www.youtube.com/watch?v=dVzJ3bx68FA&list=PLx4x_zx8csUglgKTmgfVFEhWWBQCasNGi&index=1" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Danilo Aparecido</h5>
                                        <p class="card-text">Linguagem C# - Playlist YouTube</p>
                                        <a href="https://www.youtube.com/watch?v=sngC8L_SK2w&list=PLEdPHGYbHhlcxWx-_LrVVYZ2RRdqltums" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Node.js Collapse -->
            <div class="card bg-collapse">
                <div class="card-header" id="headingSix">
                    <div class="row">
                        <h5 class="col d-flex justify-content-start align-items-center mb-0">
                            <button class="btn btn-success bg-btncollapse collapsed justify-content-start" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Node.js
                            </button>
                        </h5>
                        <div class="col d-flex justify-content-end align-items-center">
                            <img src="{{ asset('img/icon-node.png') }}" alt="Icone Node.js" style="width: 60px;">
                        </div>
                    </div>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="row">
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Digital Innovation One</h5>
                                        <p class="card-text">Desenvolvimento back-end com Node.js</p>
                                        <a href="https://digitalinnovation.one/cursos/desenvolvimento-back-end-com-nodejs/?ref=lp&hidden_text&source=/skills/nodejs&" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Victor Lima</h5>
                                        <p class="card-text">Curso de Node.JS - Playlist YouTube</p>
                                        <a href="https://www.youtube.com/watch?v=LLqq6FemMNQ&list=PLJ_KhUnlXUPtbtLwaxxUxHqvcNQndmI4B" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Celke</h5>
                                        <p class="card-text">Mini Curso de Node.JS - Playlist YouTube</p>
                                        <a href="https://www.youtube.com/watch?v=jqrKQEJ6DpY&list=PLmY5AEiqDWwBHJ3i_8MDSszXXRTcFdkSu" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">balta.io</h5>
                                        <p class="card-text">Criando API’s com Node.JS grátis - Playlist YouTube</p>
                                        <a href="https://www.youtube.com/watch?v=wDWdqlYxfcw&list=PLHlHvK2lnJndvvycjBqQAbgEDqXxKLoqn" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Linux Collapse -->
            <div class="card bg-collapse">
                <div class="card-header" id="headingSeven">
                    <div class="row">
                        <h5 class="col d-flex justify-content-start align-items-center mb-0">
                            <button class="btn btn-success bg-btncollapse collapsed justify-content-start" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                Linux
                            </button>
                        </h5>
                        <div class="col d-flex justify-content-end align-items-center">
                            <img src="{{ asset('img/icon-linux.png') }}" alt="Icone Linux" style="width: 45px;">
                        </div>
                    </div>
                </div>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="row">
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Curso em Vídeo</h5>
                                        <p class="card-text">Curso de Linux | Primeiros Passos - Playlist YouTube</p>
                                        <a href="https://www.youtube.com/watch?v=6nN2EglOqCM&list=PLHz_AreHm4dlIXleu20uwPWFOSswqLYbV" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Matheus Battisti</h5>
                                        <p class="card-text">Curso de Linux - Playlist YouTube</p>
                                        <a href="https://www.youtube.com/watch?v=aW4Owxgcvq4&list=PLnDvRpP8BnezDTtL8lm6C-UOJZn-xzALH" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Joseph Delgadillo</h5>
                                        <p class="card-text">O Curso Completo de Linux: Iniciante para o Power User! - Playlist YouTube</p>
                                        <a href="https://www.youtube.com/watch?v=wBp0Rb-ZJak" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Udemy</h5>
                                        <p class="card-text">Introdução ao Sistema Operacional Linux (Diego Mariano, Ph.D.)</p>
                                        <a href="https://www.udemy.com/course/linux-ubuntu/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Udemy</h5>
                                        <p class="card-text">Terminal Linux (Diego Mariano, Ph.D.)</p>
                                        <a href="https://www.udemy.com/course/terminal-de-comandos-linux/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MySQL Collapse -->
            <div class="card bg-collapse">
                <div class="card-header" id="headingEight">
                    <div class="row">
                        <h5 class="col d-flex justify-content-start align-items-center mb-0">
                            <button class="btn btn-link text-decoration-none text-dark bg-btncollapse collapsed justify-content-between text-green font-33" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                Veja cursos de Mysql gratuitos
                            </button>
                        </h5>
                        <div class="col d-flex justify-content-end align-items-center">
                            <img src="{{ asset('img/icon-mysql.png') }}" alt="Icone MySQL" style="width: 60px;">
                        </div>
                    </div>
                </div>
                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="row">
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Wagner Cardoso</h5>
                                        <p class="card-text">MySQL | Curso Completo para Iniciantes e Estudantes - Playlist YouTube</p>
                                        <a href="https://www.youtube.com/watch?v=_GqHC7zLV-c&list=PLOPt_yd2VLWGEnSzO-Sc9MYjs7GZadX1f" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Curso em Vídeo</h5>
                                        <p class="card-text">Curso de Banco de Dados MySQL - Playlist YouTube</p>
                                        <a href="https://www.youtube.com/watch?v=Ofktsne-utM&list=PLHz_AreHm4dkBs-795Dsgvau_ekxg8g1r" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Daves Tecnologia</h5>
                                        <p class="card-text">Curso de MySQL - Playlist YouTube</p>
                                        <a href="https://www.youtube.com/watch?v=eg3aj779278&list=PL5EmR7zuTn_ZGtE7A5PJjzQ0u7gicicLK" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Udemy</h5>
                                        <p class="card-text">Curso de MySQL (Fábio Venâncio)</p>
                                        <a href="https://www.udemy.com/course/curso-de-mysql/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Arduino Collapse -->
            <div class="card bg-collapse">
                <div class="card-header" id="headingNine">
                    <div class="row">
                        <h5 class="col d-flex justify-content-start align-items-center mb-0">
                            <button class="btn btn-success bg-btncollapse collapsed justify-content-start" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                Arduino
                            </button>
                        </h5>
                        <div class="col d-flex justify-content-end align-items-center">
                            <img src="{{ asset('img/icon-arduino.png') }}" alt="Icone Arduino" style="width: 60px;">
                        </div>
                    </div>
                </div>
                <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="row">
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Prime Cursos</h5>
                                        <p class="card-text">Curso de Arduino Básico Online Grátis</p>
                                        <a href="https://www.primecursos.com.br/arduino-basico/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">CFBCursos</h5>
                                        <p class="card-text">Curso de Arduino | Teoria e prática - Playlist YouTube</p>
                                        <a href="https://www.youtube.com/watch?v=Vuof27YELEI&list=PLx4x_zx8csUgWBTvA-fluHV970SzDJRBw" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Brincando com Ideias</h5>
                                        <p class="card-text">Curso de Arduino - Playlist YouTube</p>
                                        <a href="https://www.youtube.com/watch?v=rCILKZPG0Kg&list=PL7CjOZ3q8fMc3OmT7gD7N6sLLFfXsXGZi" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">WR Kits</h5>
                                        <p class="card-text">Curso de Arduino e AVR - Playlist YouTube</p>
                                        <a href="https://www.youtube.com/watch?v=S34PnG143sE&list=PLZ8dBTV2_5HSyOXhJ77d-iyt5Z_v_1DPM" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection