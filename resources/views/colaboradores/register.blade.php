@extends('template')

@section('content')

    <div class="container crud-div">
        
        <form  class="crud-form" method="post">
            @csrf

            <div class="row">
                <div class="col-sm-12 col-md-3">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control form-control-sm" id="nome" name="nome">
                    </div>
                </div>

                <div class="col-sm-12 col-md-3">
                    <div class="form-group">
                        <label for="sobrenome">Sobrenome</label>
                        <input type="text" class="form-control form-control-sm" id="sobrenome" name="sobrenome">
                    </div>
                </div>

                <div class="col-sm-12 col-md-3">
                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control form-control-sm" id="cpf" name="cpf">
                    </div>
                </div>

                <div class="col-sm-12 col-md-3">
                    <div class="form-group">
                        <label for="sus">SUS</label>
                        <input type="text" class="form-control form-control-sm" id="sus" name="sus">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-3">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control form-control-sm" id="email" name="email">
                    </div>
                </div>
            </div>

            <input type="submit" class="btn btn-sm btn-primary" value="Registrar">
        </form>
        
    </div>

@endsection