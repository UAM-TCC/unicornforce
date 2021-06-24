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
        border: none;
    }
</style>

<div>
    <h2 class="d-flex justify-content-center">Cursos pagos</h2>
</div>

<section>
    <div class="container">
        <div class="accordion" id="accordionExample">

            <!-- Front End Collapse -->
            <div class="card bg-collapse">
                <div class="card-header" id="headingOne">
                    <div class="row">
                        <h5 class="col d-flex justify-content-start align-items-center mb-0">
                            <button class="btn btn-success bg-btncollapse collapsed justify-content-start" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
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
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="row">
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Udemy</h5>
                                        <p class="card-text">Curso de HTML 5 COMPLETO e com Projetos Práticos para WEB - (R$27,90)</p>
                                        <a href="https://www.udemy.com/course/web-html5-css3-javascript/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Udemy</h5>
                                        <p class="card-text">Curso de Javascript Completo do iniciante ao mestre (2021) - (R$27,90)</p>
                                        <a href="https://www.udemy.com/course/javascript-completo-2018-do-iniciante-ao-mestre/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Udemy</h5>
                                        <p class="card-text">Front-End profissional completo HTML5, CSS3, SASS, JS E MAIS (R$27,90)</p>
                                        <a href="https://www.udemy.com/course/front-end-profissional-completo-html5-css3-sass-js-e-mais/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-around align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Udemy</h5>
                                        <p class="card-text">Front-End Design Essencial - HTML, CSS e JS Completo do Zero - (R$34,90)</p>
                                        <a href="https://www.udemy.com/course/front-end-essencial/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-around align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Udemy</h5>
                                        <p class="card-text">Desenvolvimento Responsivo com HTML5, CSS3 e Javascript - (R$34,90)</p>
                                        <a href="https://www.udemy.com/course/desenvolvimento-responsivo-com-html5-css3-e-javascript/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-around align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">B7Web</h5>
                                        <p class="card-text">Pacote Full Stack (HTML5 e CSS3, Javascript, PHP, NodeJS, etc) - (R$464,16)</p>
                                        <a href="https://b7web.com.br/fullstack/?gclid=Cj0KCQjws-OEBhCkARIsAPhOkIa0LxcnkX3I4Ng3RPFo-WZymaNweH0ofgvo4PFXLIFykICAASKpZDAaAlqGEALw_wcB&ref=X18524822M&hsrc=Z2Fkcw%3D%3D" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
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
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="row">
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Hcode</h5>
                                        <p class="card-text">Curso Completo de PHP 7 (R$22,90)</p>
                                        <a href="https://hcode.com.br/cursos/PHP7" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Udemy</h5>
                                        <p class="card-text">PHP 7 Completo - Curso do Desenvolvedor Web 2021 + Projetos (R$27,90)</p>
                                        <a href="https://www.udemy.com/course/php-7-completo/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Udemy</h5>
                                        <p class="card-text">Aprenda PHP do Zero Com Facilidade e Faça Sites Dinâmicos (R$34,90)</p>
                                        <a href="https://www.udemy.com/course/aprenda-e-domine-a-linguagem-php-do-zero-com-facilidade/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Udemy</h5>
                                        <p class="card-text">Curso Completo de PHP 7 PROFISSIONAL - 6 cursos em 1 (R$34,90)</p>
                                        <a href="https://www.udemy.com/course/curso-completo-de-php-profissional/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
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
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="row">
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Udemy</h5>
                                        <p class="card-text">Java Completo Programação Orientada a Objetos + Projetos - (R$34,90)</p>
                                        <a href="https://www.udemy.com/course/java-curso-completo/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Udemy</h5>
                                        <p class="card-text">Java 2021 COMPLETO: Do Zero ao Profissional + Projetos! - (R$34,90)</p>
                                        <a href="https://www.udemy.com/course/fundamentos-de-programacao-com-java/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Udemy</h5>
                                        <p class="card-text">Java e Orientação a Objetos (R$39,90)</p>
                                        <a href="https://www.udemy.com/course/java-e-orientacao-a-objetos-e/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Danki Code</h5>
                                        <p class="card-text">Curso Java Web - (R$228,00)</p>
                                        <a href="https://cursos.dankicode.com/curso-java-web?gclid=Cj0KCQjws-OEBhCkARIsAPhOkIbCxs2Emz7_c5qIbnO4pOaEAbuEVKIEv_wKuzGBvPkaS_OHRFzGygQaAq67EALw_wcB&ref=O53467519W" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Coffee and IT</h5>
                                        <p class="card-text">Java efetivo, funcional e performático: Do zero a Produção (R$299,00)</p>
                                        <a href="https://lb.coffeeandit.com.br/java?gclid=Cj0KCQjws-OEBhCkARIsAPhOkIaclnGJdmAN9hRCoeQI92JVm7rUBK2veyinKLdMMxzw_Po8b_MwA9waAtkLEALw_wcB" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
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
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="row">
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Udemy</h5>
                                        <p class="card-text">Python 3 - Curso Completo do Básico ao Avançado (R$27,90)</p>
                                        <a href="https://www.udemy.com/course/curso-python-3-completo/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Udemy</h5>
                                        <p class="card-text">Programação em Python do básico ao avançado (R$34,90)</p>
                                        <a href="https://www.udemy.com/course/curso-de-programacao-em-python-do-basico-ao-avancado/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Udemy</h5>
                                        <p class="card-text">Python para Android, iOS, Win, Linux e Mac - Desde o Básico (R$34,90)</p>
                                        <a href="https://www.udemy.com/course/curso-de-python-android-ios-windows-linux-mac/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">ByLearn</h5>
                                        <p class="card-text">Pacote Python: Faixa Preta - (R$447,00)</p>
                                        <a href="https://python.bylearn.com.br/?gclid=Cj0KCQjws-OEBhCkARIsAPhOkIZjbMLD6frxh5casnRjC-anvAV0ZSm-VODDYsl5F0s1Og-o_fQ6f3EaAtRkEALw_wcB&ref=Q53410614T&hsrc=Y3Vyc29weXRob25jb21wbGV0bw%3D%3D" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
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
                                        <h5 class="card-title">Udemy</h5>
                                        <p class="card-text">C# Completo Programação Orientada a Objetos + Projetos - (R$34,90)</p>
                                        <a href="https://www.udemy.com/course/programacao-orientada-a-objetos-csharp/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Udemy</h5>
                                        <p class="card-text">C# Curso Completo: Do Básico ao Avançado! - (R$34,90)</p>
                                        <a href="https://www.udemy.com/course/curso-c-sharp/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Udemy</h5>
                                        <p class="card-text">C# Basics for Beginners: Learn C# Fundamentals by Coding (R$34,90)</p>
                                        <a href="https://www.udemy.com/course/csharp-tutorial-for-beginners/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Udemy</h5>
                                        <p class="card-text">C# Intermediate: Classes, Interfaces and OOP (R$34,90)</p>
                                        <a href="https://www.udemy.com/course/csharp-intermediate-classes-interfaces-and-oop/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Udemy</h5>
                                        <p class="card-text">C# Advanced Topics: Prepare for Technical Interviews (R$34,90)</p>
                                        <a href="https://www.udemy.com/course/csharp-advanced/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
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
                                        <h5 class="card-title">Udemy</h5>
                                        <p class="card-text">Node JS Curso Completo do Básico ao Avançado (R$27,90)</p>
                                        <a href="https://www.udemy.com/course/nodejs-curso-completo/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Udemy</h5>
                                        <p class="card-text">Curso Completo do Desenvolvedor NodeJS e MongoDB (R$27,90)</p>
                                        <a href="https://www.udemy.com/course/curso-completo-do-desenvolvedor-nodejs/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Guia do Programador</h5>
                                        <p class="card-text">Formação Node.JS (R$47,90)</p>
                                        <a href="https://guiadoprogramador.com/curso/formacao-node-js/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">LuizTools</h5>
                                        <p class="card-text">Curso Node.js e MongoDB (R$197,00)</p>
                                        <a href="https://www.luiztools.com.br/curso-nodejs#inscricao" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
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
                                        <h5 class="card-title">Udemy</h5>
                                        <p class="card-text">Aprenda tudo sobre o Linux! Completo e atualizado 2021! - (R$27,90)</p>
                                        <a href="https://www.udemy.com/course/curso-completo-linux/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Udemy</h5>
                                        <p class="card-text">Linux Completo para Usuário Comum ou Desenvolvedor - (R$34,90)</p>
                                        <a href="https://www.udemy.com/course/curso-de-linux-completo-para-usuario-comum-ou-desenvolvedor/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Udemy</h5>
                                        <p class="card-text">Aprendendo terminal Linux pondo a mão na massa! - (R$27,90)</p>
                                        <a href="https://www.udemy.com/course/aprendalinux/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Udemy</h5>
                                        <p class="card-text">Terminal Linux, Shell Scripting e Gerenciamento de Redes - (R$27,90)</p>
                                        <a href="https://www.udemy.com/course/terminal-linux-do-zero-ao-gerenciamento-de-redes/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
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
                            <button class="btn btn-success bg-btncollapse collapsed justify-content-start" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                MySQL
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
                                        <h5 class="card-title">Udemy</h5>
                                        <p class="card-text">Introdução a Banco de Dados com MySQL (R$27,90)</p>
                                        <a href="https://www.udemy.com/course/aprenda_mysql_em30minutos/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Udemy</h5>
                                        <p class="card-text">O curso completo de Banco de Dados e SQL, sem mistérios! (R$27,90)</p>
                                        <a href="https://www.udemy.com/course/bancos-de-dados-relacionais-basico-avancado/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Udemy</h5>
                                        <p class="card-text">Dominando Banco de Dados com MySQL (R$34,90)</p>
                                        <a href="https://www.udemy.com/course/curso-mysql/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">DevMedia</h5>
                                        <p class="card-text">Curso Completo de MySQL</p>
                                        <a href="https://www.devmedia.com.br/curso/curso-completo-de-mysql/281" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Escola Linux</h5>
                                        <p class="card-text">Banco de Dados MySQL: 20 HORAS (R$357,50)</p>
                                        <a href="https://cursos.escolalinux.com.br/banco-de-dados-mysql-20-horas" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
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
                                        <h5 class="card-title">Udemy</h5>
                                        <p class="card-text">Automação Profissional com Arduino (Curso Completo) - (R$27,90)</p>
                                        <a href="https://www.udemy.com/course/automacao-profissional-com-arduino-completo/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Udemy</h5>
                                        <p class="card-text">Arduino: Referência de Programação (Completo) - (R$27,90)</p>
                                        <a href="https://www.udemy.com/course/arduino-referencia-de-programacao/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Udemy</h5>
                                        <p class="card-text">Aprenda Arduino com uso de simulador - (R$34,90)</p>
                                        <a href="https://www.udemy.com/course/aprenda-arduino-com-uso-de-simulador/" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="card bg-collapse text-center" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Arduino e Automação</h5>
                                        <p class="card-text">Curso Arduino para Iniciantes - (R$197,04)</p>
                                        <a href="https://www.arduinoeautomacao.com.br/o-curso/curso-arduino-para-iniciantes?ref=M53392086W&gclid=Cj0KCQjws-OEBhCkARIsAPhOkIagL_z_A33GWLJN6x1hjysO4MXOsoe0iQic7_aa6M2ZyVie1oVlIekaAggbEALw_wcB" target="_blank" class="btn btn-success bg-btncollapse">Visite o site</a>
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

<br>
<br>
<br>
<br>
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
                <p class="mb-0">&copy; Unicorn force</a></p>
            </div>
        </div>
    </div>
</section>
@endsection