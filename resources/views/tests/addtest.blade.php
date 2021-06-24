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

    input[type=number]:focus {
        background-color: #222222 !important;
        color: #ffffff;

    }

    textarea.form-control:focus {
        background-color: #222222 !important;
        color: #ffffff;

    }
  </style>
    <h3>Adicionar teste - {{ $smartphoneModel }}</h3>
    <main class="main col-12" id="top">
        <div class="container-form">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                </div>
            </div>
            <h4 id="title-form">Teste de danos</h4>
            <h6 class="mt-3">Relatório parte <span id="part-form">1</span> - 3</h6>
            <h6 id="values-div">Valores de 0 a 1</h6>
            <div class="d-flex justify-content-center">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3">
                    <form id="test-form" class="form" method="POST" action="{{ route('storetest', $id) }}" role="form">
                    @csrf
                        <div class="form-group mt-5">
                            <label class="form-label" for="screen">Dano Display/Tela</label>
                            <input type="text" class="form-control damage-input" name="screen" maxlength="4">
                            <!-- @error('email')
                                    <strong>{{ $message }}</strong>
                            @enderror -->
                        </div>

                        <div class="form-group mt-5">
                            <label class="form-label" for="touchscreen">Dano Touchscreen</label>
                            <input type="text" class="form-control damage-input" name="touchscreen" maxlength="4">
                            <!-- @error('email')
                                    <strong>{{ $message }}</strong>
                            @enderror -->
                        </div>

                        <div class="form-group mt-5">
                            <label class="form-label" for="power_button">Dano Botão de ligar</label>
                            <input type="text" class="form-control damage-input" name="power_button" maxlength="4">
                            <!-- @error('email')
                                    <strong>{{ $message }}</strong>
                            @enderror -->
                        </div>

                        <div class="form-group mt-5">
                            <label class="form-label" for="other_buttons">Dano Outros botões</label>
                            <input type="text" class="form-control damage-input" id="other_buttons" name="other_buttons" maxlength="4">
                        </div>

                        <div class="form-group mt-5">
                            <label class="form-label" for="usb">Dano Entrada USB/Carregador</label>
                            <input type="text" class="form-control damage-input" id="usb" name="usb" maxlength="4">
                        </div>

                        <div class="form-group mt-5">
                            <label class="form-label" for="battery">Bateria (baixa capacidade)</label>
                            <input type="text" class="form-control damage-input" id="battery" name="battery" maxlength="4">
                        </div>

                        <div class="form-group mt-5">
                            <label class="form-label" for="audio_output">Dano saída de áudio</label>
                            <input type="text" class="form-control damage-input" id="audio_output" name="audio_output" maxlength="4">
                        </div>

                        <div class="form-group mt-5">
                            <label class="form-label" for="audio_input">Dano Entrada áudio</label>
                            <input type="text" class="form-control damage-input" id="audio_input" name="audio_input" maxlength="4">
                        </div>

                        <div class="form-group mt-5">
                            <label class="form-label" for="camera">Dano Câmera</label>
                            <input type="text" class="form-control damage-input" id="camera" name="camera" maxlength="4">
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

    let formTestPerformance = `
        <div class="form-group mt-5">
            <label class="form-label" for="email">Resultado Single Task</label>
            <input type="number" class="form-control performance-inputs" id="rp_single" name="rp_single" placeholder="">
        </div>

        <div class="form-group mt-5">
            <label class="form-label" for="rp_multiple">Resultado Multiple Tasks</label>
            <input type="number" class="form-control performance-inputs" id="rp_multiple" name="rp_multiple" placeholder="">
        </div>`;

    const formTestComp = `
        <div class="form-group mt-5">
            <label class="form-label" for="rc_node">Compatibilidade Node JS</label>
            <input type="text" class="form-control comp-inputs" id="rc_node" name="rc_node" placeholder="">
        </div>

        <div class="form-group mt-5">
            <label class="form-label" for="rc_python">Compatibilidade Python</label>
            <input type="text" class="form-control comp-inputs" id="rc_python" name="rc_python" placeholder="">
        </div>

        <div class="form-group mt-5">
            <label class="form-label" for="rc_c">Compatibilidade C# (.NET Core)</label>
            <input type="text" class="form-control comp-inputs" id="rc_c" name="rc_c" placeholder="">
        </div>

        <div class="form-group mt-5">
            <label class="form-label" for="rc_java">Compatibilidade Java</label>
            <input type="text" class="form-control comp-inputs" id="rc_java" name="rc_java" placeholder="">
        </div>

        <div class="form-group mt-5">
            <label class="form-label" for="rc_php">Compatibilidade PHP</label>
            <input type="text" class="form-control comp-inputs" id="rc_php" name="rc_php" placeholder="">
        </div>

        <div class="form-group mt-5">
            <label class="form-label" for="rc_mysql">Compatibilidade MySQL</label>
            <input type="text" class="form-control comp-inputs" id="rc_mysql" name="rc_mysql" placeholder="">
        </div>

        <div class="form-group mt-5">
            <label class="form-label" for="arduino">Compatibilidade Arduino</label>
            <input type="text" class="form-control comp-inputs" id="arduino" name="arduino" placeholder="">
        </div>`;

    btnNext.on('click', () => {
        updateForm(true);
    });

    btnBefore.on('click', () => {
        updateForm(false);
    });

    damageInputs.on('keyup', function() {
        if (checkCorrectValue($(this).val())) {
            $(this).val('');
        }

        // let value = $(this).val();
        // let valueToInsert = $(this).val();

        // if (value != '' && value !== 1) {
        //     if (value.length == 1 && value != '0.') {
        //         let splitedValue = value.split('0');

        //         valueToInsert = '';

        //         $.each(splitedValue, function(key, number) {
        //             if (key == 0) {
        //                 valueToInsert += '0.';
        //             } else {
        //                 valueToInsert += number;
        //             }
        //         });

        //         $(this).val(valueToInsert)
        //     }
        // }

        // if (checkCorrectValue(valueToInsert)) {
        //     $(this).val('')
        // }
    });

    // $(document).on('keyup', '.performance-inputs', function() {
    //     if (checkCorrectValue($(this).val())) {
    //         $(this).val('');
    //     }
    // });

    // $(document).on('keyup', '.comp-inputs', function() {
    //     if (checkCorrectValue($(this).val())) {
    //         $(this).val('');
    //     }
    // });

    function checkCorrectValue(value) {
        if (value > 1 || isNaN(value)) {
            return true;
        }

        return false;
    }

    function updateForm(next) {
        switch (formPart) {
            case 1:
                if (!inputsDiv.hasClass('d-none')) {
                    inputsDiv.addClass('d-none');
                }

                titleForm.html('Teste de performance')

                partFormDiv.html('2')

                valuesDiv.html('')

				if ($('#form-performance').html().length < 1) {
					formPerformance.append(formTestPerformance)
				} else {
					formPerformance.removeClass('d-none');
				}

                formPart = 2;

                btnBefore.removeClass('d-none');

                break;
            case 2:
				if (next) {
                    console.log('é pra ir pro pox')
                    if (!formPerformance.hasClass('d-none')) {
                        formPerformance.addClass('d-none');
                    }

                    titleForm.html('Teste de compatibilidade');

                    valuesDiv.html('Valores de 0 a 5')

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
</script>
@endsection


