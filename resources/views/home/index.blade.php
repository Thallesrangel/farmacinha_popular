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

    <div class="container text-center mt-4">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-6 col-md-8">
                <h2>Registrar e acompanhar com rapidez.</h2>
                <p>O PetVac é pensando para que cada animal registrado seja devidamente acompanhando de forma ágil, eficaz e eficiente.</p>
            </div>
        </div>
    </div>

@endsection