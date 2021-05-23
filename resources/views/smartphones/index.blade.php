@extends('layouts.admin')

@section('content')
<style>
</style>

<h3>Nossos Smartphones</h3>

<table class="table table-dark mt-3 table-responsive">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Modelo</th>
            <th scope="col">Fabricante</th>
            <th scope="col">Cor</th>
            <th scope="col">Ano de fabricação</th>
            <th scope="col">Estoque</th>
            <th scope="col">Status</th>
            <th scope="col">Está ativo</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($smartphones as $smarthpone)
        <tr class="p-0">
            <td scope="col-3">{{ $smarthpone->id }}</th>
            <td>{{ $smarthpone->model }}</td>
            <td>{{ $smarthpone->producer }}</td>
            <td>{{ $smarthpone->color }}</td>
            <td>{{ date('d-m-Y', strtotime($smarthpone->year_of_manufacture)) }}</td>
            <td>{{ $smarthpone->stock }}</td>
            <td>Precisa de teste</td>
            <td>{{ $smarthpone->status ? 'Ativo' : 'inativo' }}</td>
            <td class="p-0">
                <div class="dropdown">
                    <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ações
                    </button>
                    <div class="dropdown-menu bg-dark text-white" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item text-white" href="#">Editar</a>
                        <a class="dropdown-item text-white" href="{{ route('addtest', $smarthpone->id) }}">Adicionar teste</a>
                        <a class="dropdown-item text-white" href="#">Adicionar estoque</a>
                        <a class="dropdown-item text-white" href="#">Deletar</a>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach

        <tr>
    </tbody>
</table>
@endsection