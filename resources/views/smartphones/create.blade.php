@extends('layouts.admin')

@section('content')

<style>
    body {
        overflow-x: hidden;
    }


    textarea {
	    resize: none;
    }

    .form-label {
        font-size: 12px;
        color: white;
        margin: 0;
        display: block;
        opacity: 1;
    }

    .form-control {
        border-radius: 0;
        border: 1px solid #3FBD57;
        border-width: 0 0 2px 0;
        border-style: none none solid none;
        box-shadow: none;
        background-color: #222222;
        color: #ffffff;
    }

    .form-control:focus {
        box-shadow: none;
        border-color: #5e9bfc;
    }

    .js-hide-label {
        opacity: 0;
    }

    .js-unhighlight-label {
        color: #999
    }

    .btn-start-order {
        background: 0 0 #3FBD57;
        border: 1px solid #2f323a;
        border-radius: 3px;
        color: white;
        font-family: "Raleway", sans-serif;
        font-size: 16px;
        line-height: inherit;
        margin: 30px 0;
        padding: 10px 50px;
        text-transform: uppercase;
        transition: all 0.25s ease 0s;
    }

    .btn-start-order:hover,.btn-start-order:active, .btn-start-order:focus {
        border-color: #222222;
        color: #222222;
    }

    .center {
        margin: auto;
        width: 50%;
        padding: 10px;
    }

    input[type=text]:focus {
        background-color: #222222 !important;
        color: #ffffff;

    }

    input[type=password]:focus {
        background-color: #222222 !important;
        color: #ffffff;

    }

    input[type=email]:focus {
        background-color: #222222 !important;
        color: #ffffff;

    }

    input[type=date]:focus {
        background-color: #222222 !important;
        color: #ffffff;

    }

    textarea.form-control:focus {
        background-color: #222222 !important;
        color: #ffffff;

    }
  </style>
    <h3>Adicionar Smartphone</h3>
    <main class="main col-12" id="top">
        <div class="container-form">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3">
                    <form id="contact-form" class="form" method="POST" action="{{ route('storesmartphone') }}" enctype="multipart/form-data" role="form">
                    @csrf
                        <div class="form-group mt-5">
                            <label class="form-label" for="email">Modelo</label>
                            <input type="text" class="form-control" id="model" name="model" placeholder="" required>
                            <!-- @error('email')
                                    <strong>{{ $message }}</strong>
                            @enderror -->
                        </div>

                        <div class="form-group mt-5">
                            <label class="form-label" for="email">Fabricante</label>
                            <input type="text" class="form-control" id="producer" name="producer" placeholder="" required>
                            <!-- @error('email')
                                    <strong>{{ $message }}</strong>
                            @enderror -->
                        </div>

                        <div class="form-group mt-5">
                            <label class="form-label" for="email">Cor</label>
                            <input type="text" class="form-control" id="color" name="color" placeholder="" required>
                            <!-- @error('email')
                                    <strong>{{ $message }}</strong>
                            @enderror -->
                        </div>

                        <div class="form-group mt-5">
                            <label class="form-label" for="subject">Imagem</label>
                            <input type="file" class="form-control" id="subject" name="picture" tabindex="3">
                        </div>

                        <div class="form-group mt-5">
                            <label class="form-label" for="subject">Data de fabricação</label>
                            <input type="date" class="form-control" id="subject" name="year_of_manufacture" tabindex="3">
                        </div>

                        <div class="text-center mt-5">
                            <button type="submit" class="btn btn-start-order">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection