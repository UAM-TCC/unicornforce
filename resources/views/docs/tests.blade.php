@extends('layouts.docslayout')
@section('content')

<style>
    .card-img-top {
        height: 16rem;
    }

    .form-control {
        color: #3FBD57 !important;
    }
</style>

<div class="row m-0 courses-cards">
    @foreach ($smartphones as $smartphone)
        <div class="col-md-4 mt-4 d-flex justify-content-center">
            <div class="card bg-dark" style="width: 18rem;">
                <img src="{{ asset('storage/'.$smartphone->picture) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $smartphone->model }}</h5>
                    <p class="card-text">Selo de qualidade : 1</p>
                    <a href="{{ route('testsresults', $smartphone->id) }}" class="btn btn-dark">Ver teste</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection('content')