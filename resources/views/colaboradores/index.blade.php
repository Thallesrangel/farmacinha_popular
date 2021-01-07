@extends('template')

@section('content')

    <div class="container">
        
        <div class="crud">
            <form method="post">
                @csrf
                @method('DELETE')

                <div class="container crud-option">
                    <a class="btn btn-sm btn-light" href="{{ route('dashboard.colaborador.registrar') }} ">
                        <i  data-feather="plus"></i>
                    </a>
                    <button formaction="{{ route('dashboard.colaborador.deleteall') }}" class="btn btn-sm btn-light" type="submit">
                        <i  data-feather="edit"></i>
                    </button>
                    <button formaction="{{ route('dashboard.colaborador.deleteall') }}" class="btn btn-sm btn-light" type="submit">
                        <i  data-feather="trash-2"></i>
                    </button>
                </div>

                
                <table class="table table-sm bg-white crud-table">
                    <thead>
                        <tr>
                            <th title="Selecionar todos"><input type="checkbox" class="selectall"/></th>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dados as $item)
                        <tr>
                            <td><input type="checkbox" name="ids[]" value="{{ $item['id_colaborador'] }}" class="selectbox"></td>
                            <td>{{ $item['id_colaborador'] }}</td>
                            <td>{{ $item['nome'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>

                    <tfoot>
                        <tr>
                            <th title="Selecionar todos"><input type="checkbox" class="selectall2"/></th>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                        </tr>
                    </tfoot>

                </table>
            
            </form>
        </div>
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