@extends('layouts.admin')

@section('content')

<h3>Nossos Smartphones</h3>

<table class="table table-dark mt-3 table-responsive">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">email</th>
            <th scope="col">Categoria</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
        <tr class="p-0">
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->category_id == 1 ? 'Administrador' : 'Membro'}}</td>
            <td class="p-0">
                <div class="dropdown">
                    <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ações
                    </button>
                    <div class="dropdown-menu bg-dark text-white" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item text-white" href="{{ route('toggleuser', $user->id) }}">Mudar categoria</a>
                    </div>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

{{ $users->links() }}

@endsection