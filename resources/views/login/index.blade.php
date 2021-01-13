
@extends('template-padrao')

@section('content')
    <style>
    .tamanho-largura {
        max-width: 340px;
        height: auto;
        background: #FFF;
        border: 2px solid #ecf0f1; 
        border-radius: 10px;
    }
 
    .login img{
        max-height: 70px;
    }
    </style>

    <div class="container login">
        <div class="row d-flex justify-content-md-center align-items-center vh-100">
            <div class="container tamanho-largura shadow-lg p-3 mb-5 bg-white rounded">
                    
                <div class="d-flex justify-content-center">
                    <img class="img-fluid" src="{{ asset('logo-black.png') }}">
                </div>
                
                <br>

                <form action="login/logar'?>" method="POST" id="form" autocomplete="off">

                    <div class="form-group">
                        <label>E-mail</label>
                        <input class="form-control" type="email" name="email" placeholder="Digite seu e-mail" id="campo" required/>
                    </div>

                    <div class="form-group">
                        <label>Senha</label>
                        <input class="form-control" type="password" name="senha" placeholder="Digite sua senha" required/>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-sm btn-block btn-primary p-2">Entrar</button>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <a href="">Esqueceu a senha?</a>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

@endsection