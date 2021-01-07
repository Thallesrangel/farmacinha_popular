@extends('template-home')

@section('content')

    <div class="container div-banner w-75">
        <div class="row align-items-center">
            <div class="col-md-5">
                <h1>A principal ferramenta de doações de medicamentos</h1>
                <a class="btn btn-sm btn-secondary" href="/usuario/registrar">Registre-se Grátis</a>
            </div>

            <div class="col-md-7 d-flex justify-content-center">
                <img class="img-fluid" src="{{ asset('bg-med.png') }}">
            </div>
        </div>
    </div>

@endsection