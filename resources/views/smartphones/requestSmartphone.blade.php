@extends('layouts.app')

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

    input[type=number]:focus {
        background-color: #222222 !important;
        color: #ffffff;

    }

    textarea.form-control:focus {
        background-color: #222222 !important;
        color: #ffffff;

    }

    select {
        background-color: #222222 !important;
        color: #ffffff !important;
    }
  </style>
    <h3 class="d-flex justify-content-center">Solicitar smartphone</h3>
    <main class="main col-12" id="top">
        <div class="container-form">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3">
                    <form id="test-form" class="form" method="POST" action="{{ route('createsolicitation') }}" role="form">
                    @csrf
                        <div class="form-group mt-5">
                            <label class="form-label" for="cep">CEP</label>
                            <input type="text" class="form-control damage-input" id="cep" name="cep">
                        </div>

                        <div class="form-group mt-5">
                            <label class="form-label" for="state">Estado</label>
                            <input type="text" class="form-control damage-input" id="state" name="state">
                        </div>

                        <div class="form-group mt-5">
                            <label class="form-label" for="city">Cidade</label>
                            <input type="text" class="form-control damage-input" id="city" name="city">
                        </div>

                        <div class="form-group mt-5">
                            <label class="form-label" for="neighborhood">Bairro</label>
                            <input type="text" class="form-control damage-input" id="neighborhood" name="neighborhood">
                        </div>

                        <div class="form-group mt-5">
                            <label class="form-label" for="street">Rua</label>
                            <input type="text" class="form-control damage-input" id="street" name="street">
                        </div>

                        <div class="form-group mt-5">
                            <label class="form-label" for="number">Número residência</label>
                            <input type="text" class="form-control damage-input" id="number" name="number">
                        </div>

                        <div id="form-performance"></div>

                        <div id="form-compatibilidade"></div>

                        <div class="row m-0">
                            <div class="col-6">
                                <button id="btn-before" type="button" class="btn btn-start-order d-none">Anterior</button>
                            </div>

                            <div class="col-6">
                                <button id="btn-next" type="button" class="btn btn-start-order">Próximo</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

<script>
    let formPart = 1;
    const btnNext = $('#btn-next');
    let inputsDiv = $('.form-group');
    let partFormDiv = $('#part-form');
    const testForm = $('#test-form');
    const formPerformance = $('#form-performance');
    const btnBefore = $('#btn-before');
    const titleForm = $('#title-form');
    const formComp = $("#form-compatibilidade");
    const valuesDiv = $('#values-div');
    const damageInputs = $('.damage-input');
    const cepInput = $('#cep');

    let formTestPerformance = `
        <div class="form-group mt-5">
            <label class="form-label" for="have_computer">Você possui computador ?</label>
            <select class="form-control performance-inputs" id="have_computer" name="have_computer">
                <option value="1">Sim</option>
                <option value="0">Não</option>
            </select>
        </div>

        <div class="form-group mt-5">
            <label class="form-label" for="have_cellphone">Você possui celular ?</label>
            <select class="form-control performance-inputs" id="have_cellphone" name="have_cellphone">
                <option value="1">Sim</option>
                <option value="0">Não</option>
            </select>
        </div>
        <div class="form-group mt-5">
            <label class="form-label" for="access_internet">Você acessa a internet frequentemente ?</label>
            <select class="form-control performance-inputs" id="access_internet" name="access_internet">
                <option value="1">Sim</option>
                <option value="0">Não</option>
            </select>
        </div>
        `;

    const formTestComp = `
        <div class="form-group mt-5">
            <label class="form-label" for="subscription_reason">Porque você quer participar do projeto unicorn force ?</label>
            <br>
            <textarea class="form-control comp-inputs" id="subscription_reason" name="subscription_reason" rows="4"></textarea>
        </div>`;

    btnNext.on('click', () => {
        updateForm(true);
    });

    btnBefore.on('click', () => {
        updateForm(false);
    });

    function checkCorrectValue(value) {
        if (value > 1 || isNaN(value)) {
            return true;
        }

        return false;
    }

    function updateForm(next) {
        switch (formPart) {
            case 1:
                if (next) {
                    if (!inputsDiv.hasClass('d-none')) {
                        inputsDiv.addClass('d-none');
                    }

                    titleForm.html('Dados pessoais')

                    partFormDiv.html('2')

                    valuesDiv.html('')

                    if ($('#form-performance').html().length < 1) {
                        formPerformance.append(formTestPerformance)
                    } else {
                        formPerformance.removeClass('d-none');
                    }

                    formPart = 2;

                    btnBefore.removeClass('d-none');
                }
                break;
            case 2:
				if (next) {
                    if (!formPerformance.hasClass('d-none')) {
                        formPerformance.addClass('d-none');
                    }

                    titleForm.html('Teste de compatibilidade');


                    partFormDiv.html('3');

                    if (formComp.html().length < 1) {
                        formComp.html(formTestComp)
                    } else {
                        formComp.removeClass('d-none')
                    }

                    btnNext.html('Enviar')

                    formPart = 3;
                } else {
                    if (!formPerformance.hasClass('d-none')) {
                        formPerformance.addClass('d-none');
                    }

                    titleForm.html('Teste de danos')

                    partFormDiv.html('1');

                    if (inputsDiv.hasClass('d-none')) {
                        inputsDiv.removeClass('d-none');
                    }

                    btnBefore.addClass('d-none');

                    valuesDiv.html('Valores de 0 a 1')

                    formPart = 1;
                }

                break;
            case 3:
                if (next) {
                    testForm.submit();
                } else {
                    if (!formComp.hasClass('d-none')) {
                        formComp.addClass('d-none');
                    }

                    titleForm.html('Teste de performance')

                    partFormDiv.html('2')

                    valuesDiv.html('Valores de 0 a 5')

                    if ($('#form-performance').html().length < 1) {
                        formPerformance.append(formTestPerformance)
                    } else {
                        formPerformance.removeClass('d-none');
                    }

                    btnNext.html('Próximo')

                    valuesDiv.html('')

                    formPart = 2;
                }

                break;
        }
    }

    cepInput.on('blur', function() {
        let cepValue = $(this).val();

        $.ajax({
            url: `https://viacep.com.br/ws/${cepValue}/json/unicode/`,
            type: 'GET',
            dataType: 'json',
            success: data => {
                $('#state').val(data.uf);
                $('#city').val(data.localidade)
                $('#neighborhood').val(data.bairro)
                $('#street').val(data.logradouro)
            }
        });
    });
</script>
@endsection


