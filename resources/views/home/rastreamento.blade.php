@extends('template-home')

@section('content')

    <div class="container d-flex justify-content-center align-itens-center">
        
        <div class="row ">
            <div class="col-md-12">
                <form class="text-center">
                    <div class="form-group">
                        <h3>Código de Rastreio</h3>
                        <p>Insira aqui o código de rastreamento fornecido </p>
                    <input type="email" class="form-control" id="rastreio">
                    </div>
                    <button type="submit" class="btn btn-sm btn-secondary">Consultar</button>
                </form>
            </div>
        </div>

    </div>

@endsection