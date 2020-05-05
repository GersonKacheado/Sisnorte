@extends('layouts.inicio')
@section('inicio')
<div class="container">
    <div class="card text-center">
        <div class="card-header">
            Listagem de {{ $solicitos->count() }} Pedidos no total de {{ $solicitos->total() }} 
            exibindo agora registros de ({{ $solicitos->firstItem() }}) a ({{ $solicitos->lastItem() }})
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th scope="col">FEITO POR</th>
                    <th scope="col">TIPO</th>
                    <th scope="col">CIDADE</th>
                    <th scope="col">BAIRRO</th>
                    <th colspan="2">GERENCIAR INFORMAÇÕES</th>
                    <th></th>
                    <th><a href="{{ route('solicito.create') }}" class="btn btn-outline-success">+ Criar Novo</a>
                    </th>
                </thead>
                <tbody>
                    
                    @foreach ($solicitos as $solicito)

                    <tr>
                        <td>{{ $solicito->users_id }}</td>
                        
                        <td>{{ $solicito->tipo }}</td>
                        <td>{{ $solicito->municipio }}</td>
                        <td>{{ $solicito->bairro}}</td>
                        <td > 
                            <a href="{{ route('solicito.show', $solicito->id) }}" class="btn btn-outline-info">Detalhes</a>
                            <a href="{{ route('solicito.edit', $solicito->id) }}" class="btn btn-outline-warning">Editar</a>
                        </td>
                        <td colspan="2">
                            <form action="{{ route('solicito.destroy', $solicito->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">Apagar</button>                        
                        </form>                        </td>
                        {{-- <td>1</td>
                        <td>1</td> --}}
                    </tr>
                    @endforeach

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


