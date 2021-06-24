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

    input[type=select] {
        background-color: #212529 !important;
        color: #ffffff;

    }

    input[type=text]:focus {
        background-color: #212529 !important;
        color: #ffffff;

    }

    input[type=password]:focus {
        background-color: #212529 !important;
        color: #ffffff;

    }

    input[type=email]:focus {
        background-color: #212529 !important;
        color: #ffffff;

    }

    input[type=date]:focus {
        background-color: #212529 !important;
        color: #ffffff;

    }

    textarea.form-control:focus {
        background-color: #212529 !important;
        color: #ffffff;
    }
  </style>

<h3>Nossos Smartphones</h3>

<div class="d-flex justify-content-center">
    <h5 id="message-status"></h5>
</div>
<table class="table table-dark mt-3 table-responsive">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Situação</th>
            <th scope="col">Data solicitação</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($solicitations as $solicitation)
        <tr class="p-0">
            <td scope="col-3">{{ $solicitation->id }}</td>
            <td scope="col-3">{{ $solicitation->user->name }}</td>
            <td scope="col-3">
                @if($solicitation->status === 1)
                <span class="text-info">Em andamento</span>
                @elseif($solicitation->status === 2)
                <span class="text-success">Aprovado</span>
                @else
                <span class="text-danger">Recusado</span>
                @endif
            </td>
            <td scope="col-3">{{ date('d-m-Y H:i:s', strtotime($solicitation->created_at)) }}</td>
            <td class="p-0 m-0">
                <div class="dropdown">
                    <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ações
                    </button>
                    <div class="dropdown-menu bg-dark text-white" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item text-white feedback-btn" data-id="{{ $solicitation->id }}" href="#">Avalir solicitação</a>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div id="modal-validation" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title text-white"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h6>Dados preenchidos</h6>

                <div class="row m-0">
                    <p class="mt-5">Dados de endereço</p>
                    <div class="form-group mt-5 col-6">
                        <label class="form-label" for="cep">CEP</label>
                        <input type="text" class="form-control bg-dark" id="cep" readonly="true">
                    </div>

                    <div class="form-group mt-5 col-6">
                        <label class="form-label" for="state">Estado</label>
                        <input type="text" class="form-control bg-dark" id="state" readonly="true">
                    </div>

                    <div class="form-group mt-5 col-6">
                        <label class="form-label" for="city">Cidade</label>
                        <input type="text" class="form-control bg-dark" id="city" readonly="true">
                    </div>

                    <div class="form-group mt-5 col-6">
                        <label class="form-label" for="neighborhood">Bairro</label>
                        <input type="text" class="form-control bg-dark" id="neighborhood" readonly="true">
                    </div>

                    <div class="form-group mt-5 col-6">
                        <label class="form-label" for="street">Rua</label>
                        <input type="text" class="form-control bg-dark" id="street" readonly="true">
                    </div>

                    <div class="form-group mt-5 col-6">
                        <label class="form-label" for="number">Número residência</label>
                        <input type="text" class="form-control bg-dark" id="number" readonly="true">
                    </div>
                </div>


                <div class="row m-0">
                    <p class="mt-5">Dados de conectividade</p>

                    <div class="form-group mt-5 col-6">
                        <label class="form-label" for="have_computer">Possui computador ?</label>
                        <input type="text" class="form-control bg-dark" id="have_computer" name="have_computer" readonly="true">
                    </div>

                    <div class="form-group mt-5 col-6">
                        <label class="form-label" for="have_cellphone">Possui celular ?</label>
                        <input type="text" class="form-control bg-dark" id="have_cellphone" name="have_cellphone" readonly="true">
                    </div>

                    <div class="form-group mt-5 col-6">
                        <label class="form-label" for="access_internet">Possui acesso a internet frequentemente ?</label>
                        <input type="text" class="form-control bg-dark" id="access_internet" name="access_internet" readonly="true">
                    </div>
                </div>

                <div class="form-group mt-5">
                    <label class="form-label" for="subscription_reason">Motivo canditatura usuário:</label>
                    <br>
                    <textarea class="form-control comp-inputs bg-dark" id="subscription_reason" name="subscription_reason" rows="4" readonly="true"></textarea>
                </div>
            </div>

            <div class="modal-footer">
                <button id="btn-approve" type="button" class="btn btn-primary">Aprovar</button>
                <button id="btn-refuse" type="button" class="btn btn-danger" data-dismiss="modal">Recusar</button>
            </div>
        </div>
    </div>
</div>

<script>
    const feedbackBtn = $('.feedback-btn');
    const modalValidation = $('#modal-validation');
    const modalTitle = $('.modal-title');
    const inputsAddresss = [
        'cep',
        'state',
        'city',
        'neighborhood',
        'street',
        'number',
    ];
    const conectivityInputs = [
        'have_computer',
        'have_cellphone',
        'access_internet'
    ];
    let reasonSubscription = $("#subscription_reason");
    let btnApprove = $("#btn-approve");
    let btnRefuse = $("#btn-refuse");
    let solicitationId = '';
    let messageStatusDiv = $('#message-status');

    feedbackBtn.on('click', function() {
        solicitationId = $(this).attr('data-id');
        let urlGetSolicitation = `{{ route('getsolicitation') }}/${solicitationId}`;

        $.ajax({
            url: urlGetSolicitation,
            type: 'GET',
            dataType: 'json',
            success: data => {
                if (data.status === 'success') {
                    modalValidation.modal('show')
                    modalTitle.html(`Solicitação de smartphone - ${data.solicitation.user.name}`);

                    console.log(data)

                    $.each(inputsAddresss, function(key, input) {
                        $(`#${input}`).val(data.solicitation[input]);
                    });

                    $.each(conectivityInputs, function(key, input) {
                        $(`#${input}`).val(data.solicitation[input] == 1 ? 'Sim' : 'Não');
                    });

                    reasonSubscription.val(data.solicitation.subscription_reason);
                }
            }
        });
    });

    btnApprove.on('click', function() {
        saveSolicitation(solicitationId, 2);
    });

    btnRefuse.on('click', function() {
        saveSolicitation(solicitationId, 3);
    });

    function saveSolicitation(solicitationIdVal, solicitationValue) {
        let sendSolicitationUrl = `{{ route('setsolicitationvalue') }}/${solicitationIdVal}`;

        $.ajax({
            url: sendSolicitationUrl,
            type: 'POST',
            data: {
                "_token": "{{ csrf_token() }}",
                'solicitation_value' : solicitationValue,
            },
            dataType: 'json',
            success: data => {
                if (!messageStatusDiv.hasClass('text-success')) {
                    messageStatusDiv.addClass('text-success')
                }

                if (data.status === 'success' && solicitationValue === 2) {
                    messageStatusDiv.html('Usuário aprovado com sucesso')
                } else {
                    messageStatusDiv.html('Usuário recusado com sucesso')
                }

                modalValidation.modal('hide')
                setTimeout(function(){
                    location.reload();
                }, 2000);
            }
        });
    }
</script>
@endsection