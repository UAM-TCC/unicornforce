@extends('layouts.admin')

@section('content')
<style>
    .cellphones {
        width: 386.66px !important;
        height: 240px !important;
        object-fit: contain !important;
    }

    .form-control {
        color: #3FBD57 !important;
    }

    .bg-btncollapse {
        background-color: #3FBD57 !important;
        border-radius: 0.60rem;
    }

    .bg-collapse {
        background-color: #222222 !important;
        border-radius: 0.5rem;
        border: #222222;
    }
</style>

<section class="container">
    <h1 class="d-flex justify-content-center display-5 fw-semi-bold">Celulares testados</h1>
</section>

<section class="container">
    <div class="row">
        @foreach ($smartphones as $smartphone)
        <div class="col-lg-4 d-flex justify-content-center">
            <div class="card bg-collapse">
                <img class="card-img-top cellphones" src="{{ Storage::url($smartphone->picture) }}" alt="{{ $smartphone->model }}">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $smartphone->model }}</h5>
                    <a href="{{ route('testsresults', $smartphone->id) }}" class="btn btn-success bg-btncollapse">Ver teste</a>
                </div>
            </div>
        </div>
        @endforeach
</section>

<div class="d-flex justify-content-center">
{{ $smartphones->links() }}
</div>

@endsection