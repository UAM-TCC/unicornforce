@extends('layouts.app')

@section('content')

<style>
    .card-img-top {
        height: 8rem;
    }

    .form-control {
        color: #3FBD57 !important;
    }
</style>

<main class="main" id="top">
    <!-- Texto Inicial -->
    <div class="container">
        <h1 class="d-flex justify-content-center align-items-center display-5 fw-semi-bold">Pontos de Coleta</h1>
        <p class="d-flex justify-content-center align-items-end text-center fs-2">Você pode nos ajudar doando seu celular antigo que não usa mais.<br><br>Verifique abaixo as unidades disponíveis e localize a mais perto de você!</p>
    </div>

    <!-- Cards dos Pontos de Coleta -->
    <section class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="card bg-dark">
                    <div class="card-body text-center p-5 p-5">
                        <h5 class="card-title">Campus Mooca</h5>
                        <p class="card-text">Rua Dr. Almeida Lima, 1.134 – Mooca<br>CEP: 03164-000</p>
                        <button type="button" class="btn btn-success bg-btncollapse mt-4" data-toggle="modal" data-target="#modalMap1">Visualize no mapa</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card bg-dark">
                    <div class="card-body text-center p-5">
                        <h5 class="card-title">Campus Paulista 1</h5>
                        <p class="card-text">Avenida Paulista , 2000 – Bela Vista<br>CEP: 01310-200</p>
                        <button type="button" class="btn btn-success bg-btncollapse mt-4" data-toggle="modal" data-target="#modalMap2">Visualize no mapa</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card bg-dark">
                    <div class="card-body text-center p-5">
                        <h5 class="card-title">Campus Paulista 2</h5>
                        <p class="card-text">Rua Treze de Maio, 1.266 – Bela Vista<br>CEP: 01327-002</p>
                        <button type="button" class="btn btn-success bg-btncollapse mt-4" data-toggle="modal" data-target="#modalMap3">Visualize no mapa</button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <div class="card bg-dark">
                    <div class="card-body text-center p-5">
                        <h5 class="card-title">Campus Vila Olímpia</h5>
                        <p class="card-text">Rua Casa do Ator, 275 – Vila Olímpia<br>CEP: 04546-001</p>
                        <button type="button" class="btn btn-success bg-btncollapse mt-4" data-toggle="modal" data-target="#modalMap4">Visualize no mapa</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card bg-dark">
                    <div class="card-body text-center p-5">
                        <h5 class="card-title">Campus Morumbi</h5>
                        <p class="card-text">Rua Jaceru, 247 – São Paulo – SP<br>CEP: 04705-000</p>
                        <button type="button" class="btn btn-success bg-btncollapse mt-4" data-toggle="modal" data-target="#modalMap5">Visualize no mapa</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card bg-dark">
                    <div class="card-body text-center p-5">
                        <h5 class="card-title">Unidade Anhangabaú</h5>
                        <p class="card-text">Rua Líbero Badaró, 487/501 – Centro<br>CEP: 01009-000</p>
                        <button type="button" class="btn btn-success bg-btncollapse mt-4" data-toggle="modal" data-target="#modalMap6">Visualize no mapa</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MODAIS -->

    <!-- Modal1 - Mooca-->
    <div class="modal fade" id="modalMap1" tabindex="-1" role="dialog" aria-labelledby="titleModal1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bg-footer">
                <div class="modal-header">
                    <h5 class="modal-title" id="titleModal1">Universidade Anhembi Morumbi - Mooca</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29257.709632504953!2d-46.610143205551395!3d-23.560832214268057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2b89c095c5e60e24!2sUniversidade%20Anhembi%20Morumbi!5e0!3m2!1spt-BR!2sbr!4v1621803085004!5m2!1spt-BR!2sbr" width="465" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal2 - Paulista 1 -->
    <div class="modal fade" id="modalMap2" tabindex="-1" role="dialog" aria-labelledby="titleModal2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bg-footer">
                <div class="modal-header">
                    <h5 class="modal-title" id="titleModal2">Universidade Anhembi Morumbi - Paulista 1</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17396.45400541331!2d-46.660608691070344!3d-23.562913620821544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x34166339e4cc57c6!2sUAM%20Campus%20Paulista%201!5e0!3m2!1spt-BR!2sbr!4v1621799866843!5m2!1spt-BR!2sbr" width="465" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal3 - Paulista 2 -->
    <div class="modal fade" id="modalMap3" tabindex="-1" role="dialog" aria-labelledby="titleModal3" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bg-footer">
                <div class="modal-header">
                    <h5 class="modal-title" id="titleModal3">Universidade Anhembi Morumbi - Paulista 2</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.111790829941!2d-46.64790634890386!3d-23.56442816751661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59bbc6068847%3A0xe49a5df54c02535a!2sEAD%20Laureate%20-%20S%C3%A3o%20Paulo%20-%20Paulista%20II!5e0!3m2!1spt-BR!2sbr!4v1621803234763!5m2!1spt-BR!2sbr" width="465" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal4 - Vila Olímpia -->
    <div class="modal fade" id="modalMap4" tabindex="-1" role="dialog" aria-labelledby="titleModal4" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bg-footer">
                <div class="modal-header">
                    <h5 class="modal-title" id="titleModal4">Universidade Anhembi Morumbi - Vila Olímpia</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117029.5230851802!2d-46.65490906978252!3d-23.5622438747879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce57536602d7f7%3A0xe8034f1be9c3a8b8!2sUniversidade%20Anhembi%20Morumbi%20-%20C%C3%A2mpus%20Vila%20Ol%C3%ADmpia!5e0!3m2!1spt-BR!2sbr!4v1621803003456!5m2!1spt-BR!2sbr" width="465" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal5 - Morumbi -->
    <div class="modal fade" id="modalMap5" tabindex="-1" role="dialog" aria-labelledby="titleModal5" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bg-footer">
                <div class="modal-header">
                    <h5 class="modal-title" id="titleModal5">Universidade Anhembi Morumbi - Morumbi</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.469518637521!2d-46.69554504890265!3d-23.62335076969543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce50c1c4956175%3A0x4e25a494ec525334!2sUniversidade%20Anhembi%20Morumbi!5e0!3m2!1spt-BR!2sbr!4v1621803170390!5m2!1spt-BR!2sbr" width="465" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal6 - Anhangabaú -->
    <div class="modal fade" id="modalMap6" tabindex="-1" role="dialog" aria-labelledby="titleModal6" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bg-footer">
                <div class="modal-header">
                    <h5 class="modal-title" id="titleModal6">Universidade Anhembi Morumbi - Anhangabaú</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.6431765137804!2d-46.63797264890418!3d-23.545332966811834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce58540d32c4b9%3A0x494b76191f8fcd36!2sUniversidade%20Anhembi%20Morumbi%20-%20UAM%20Campus%20S%C3%A3o%20Paulo%20Centro!5e0!3m2!1spt-BR!2sbr!4v1621803205044!5m2!1spt-BR!2sbr" width="465" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" value="{{ isset(Auth::user()->id) ?? null }}">
</main>
@endsection('content')