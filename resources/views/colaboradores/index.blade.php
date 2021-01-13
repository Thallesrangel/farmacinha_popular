@extends('template')

@section('content')

    <div class="container crud-div">
        
        
        <form class="crud-form" method="post">
            @csrf
            @method('DELETE')

            <div class="container crud-option">
        
                <a class="btn btn-sm btn-crud-option" href="{{ route('dashboard.colaborador.registrar') }} ">
                    <i  data-feather="plus"></i>
                </a>
                <button formaction="{{ route('dashboard.colaborador.deleteall') }}" class="btn btn-sm btn-crud-option" type="submit">
                    <i  data-feather="trash-2"></i>
                </button>

            </div>

            
            <table class="table table-sm-responsive table-sm bg-white crud-table table-hover border">
                <thead class="thead-light">
                    <tr>
                        <th title="Selecionar todos"><input type="checkbox" class="selectall"/></th>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>E-mail</th>
                        <th>Permissão</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dados as $item)
                    <tr>
                        <td><input type="checkbox" name="ids[]" value="{{ $item['id_colaborador'] }}" class="selectbox"></td>
                        
                        <td>{{ $item['nome'] }} {{ $item['sobrenome']  }} </td>
                        <td>{{ $item['cpf'] }}</td>
                        <td>{{ $item['email'] }}</td>
                        <td></td>
                        <td>
                            <a href="{{ $item['id_colaborador'] }}"><i  data-feather="external-link"></i></a>
                            <a href="{{ route('dashboard.colaborador.delete', $item['id_colaborador'])}}"><i  data-feather="trash-2"></i></a>
                            <a href="{{ $item['id_colaborador'] }}"><i  data-feather="edit"></i></a>
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>

                <tfoot  class="thead-light">
                    <tr>
                        <th title="Selecionar todos"><input type="checkbox" class="selectall2"/></th>
                        
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>E-mail</th>
                        <th>Permissão</th>
                        <th></th>
                    </tr>
                </tfoot>

            </table>

            {{ $dados->links() }}
            
        </form>
        
    
        <script type="text/javascript">
            $('.selectall').click(function(){
                $('.selectbox').prop('checked', $(this).prop('checked'));
                $('.selectall2').prop('checked', $(this).prop('checked'));
            });

            $('.selectall2').click(function(){
                $('.selectbox').prop('checked', $(this).prop('checked'));
                $('.selectall').prop('checked', $(this).prop('checked'));
            });

            $('.selectbox').change(function()
            {
                var total = $('.selectbox').length;
                var number = $('.selectbox:checked').length;
                if (total == number) {
                    $('.selectall').prop('checked', true);
                    $('.selectall2').prop('checked', true)
                } else {
                    $('.selectall').prop('checked', false);
                    $('.selectall2').prop('checked', false)
                }
            });
        </script>

    </div>
@endsection