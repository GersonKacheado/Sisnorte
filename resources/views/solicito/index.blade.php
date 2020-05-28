@extends('layouts.inicio')
@section('inicio')
<div class="container">
    <div class="card text-center">
        <div class="card-header">
            Listagem de {{ $solicitos->count() }} Pedidos no total de {{ $solicitos->total() }} 
            exibindo agora registros de ({{ $solicitos->firstItem() }}) a ({{ $solicitos->lastItem() }})
        </div>
        
       <div class="card text-right">
       {{-- <form method="GET" action="{{url('/solicito/search')}}">
            <input name="busca" value="{{ $busca }}" type="text" placeholder="busca por Tipo...">
            <button type="submit"><i class="icon_search"></i></button>

            @if ($busca)
                <a href="{{ url('/solicito/search') }}" class="btn btn-primary">Limpar</a>
            @endif
        </form> --}}
      
       {{-- <form method="POST" action="{{url('/solicito/search')}}">
            @csrf
            <input name="busca" type="text" placeholder="busca por Tipo...">
            <button type="submit"><i class="icon_search"></i></button>
            </form> --}}
    </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                   <!-- <th scope="col">CÓDIGO</th> -->
                    <th scope="col">CLIENTE</th>
                    <th scope="col">PEDIDO</th>
                    <th scope="col">DATA</th>
                    <th scope="col">MUNICIPIO</th>
                    <th scope="col">LOGRADOURO</th>
                    <th scope="col">COMPLEMENTO</th>
                    <th colspan="2">AÇÕES</th>
                   
                </thead>
                <tbody>
                 @if ($solicitos->isEmpty())
                        <?php flash('Ops! Você ainda não possui nenhum registro de Pedidos no momento! <i class="fa fa-user" aria-hidden="true"></i>')->error()->important() ?>    
                    @else                    
                    @foreach ($solicitos as $solicito)

                    <tr>
                    {{--  <td>{{ $solicito->id }}</td> --}}
                        <td>{{$solicito->users->name}}</td>
                    {{-- <td>{{ $solicito->users_id }}</td>   --}}                   
                        <td>{{ $solicito->tipo }}</td>
                        <td>{{ $solicito->data }}</td>
                        <td>{{ $solicito->municipio }}</td>
                    <td>Bairro: {{ $solicito->bairro}},</br> Rua: {{$solicito->rua}}, Nº {{$solicito->numero}}</td>
                    <td>{{$solicito->complemento}}</td>
                        <td >
                            <form action="{{ route('aceito', $solicito->id) }}" method="POST" >
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-outline-success py-3 px-4">ACEITAR</button>
                            </form> 
                        </td>
                        {{--<td>
                            <a href="{{ route('solicito.show', $solicito->id) }}" class="btn btn-outline-info">Detalhes</a>
                            <a href="{{ route('solicito.edit', $solicito->id) }}" class="btn btn-outline-warning">Editar</a>
                        </td>--}}
                        <td colspan="2"> 
                            <form action="{{ route('solicito.destroy', $solicito->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger py-3 px-4">Descartar</button>                        
                        </form>
{{--                        <a href="{{ route('solicito.show', $solicito->id) }}" class="btn btn-outline-info">Detalhes</a>
--}}
                        </td>
                        {{-- <td>1</td>
                        <td>1</td> --}}
                    </tr>
                    @endforeach
                    @endif

                </tbody>
            </table>
        </div>





        <div class="card-footer">
          {{ $solicitos->links() }}
        </div> 
    </div>
</div>
{{--
<h2>Lista de Pedidos</h2>

<form method="POST" action="solicito/buscar" >
    @csrf
    <input name="text" type="text" placeholder="ajeitar bug aqui">
    <button type="submit">buscar</button>
</form>

<hr>
<table border="1">
    <thead>
        <tr>
            <th>Tipo de serviço</th>
            <th>Bairro</th>
            <th>Mais Informações</th>
{{--        <th>Email</th>
            <th>Senha</th> --
        </tr>
    </thead>
    <tbody>
    @foreach ($solicitos as $solicito)
    <tr>
    <td>{{ $solicito->tipo }}</td>
    <td>{{ $solicito->bairro }}</td>

    <td>
        <a href="{{ route('solicito.edit', $solicito->id) }}">Editar</a>
        <a href="{{ route('solicito.show', $solicito->id) }}">Detalhes</a>
    </td>
    </tr>
    @endforeach

    </tbody>
</table>

<a href="{{ route('solicito.create', $solicito->id) }}">Criar Novo</a>
--}}   
@endsection


  <?php//    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    //date_default_timezone_set('America/Sao_Paulo');
   // echo strftime('%A, %d de %B de %Y', strtotime(date('Y-m-d')));
     ?> 


