
@extends('layouts.inicio')
@section('inicio')
<div class="container">
    <div class="card text-center">
        <div class="card-header">
           {{-- Listagem de {{ $empresas->count() }} empresas no total de {{ $empresas->total() }} 
            exibindo agora registros de ({{ $empresas->firstItem() }}) a ({{ $empresas->lastItem() }})
     --}}   </div>

        <div class="card text-right">

            <form method="POST" action="{{url('/empresa/search')}}">
                @csrf
                <input name="busca" type="text" placeholder="busca por Nome...">
                <button type="submit"><i class="icon_search"></i></button>
                </form>
        </div>

<div class="card-body">

    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">CODIGO</th>
            <th scope="col">NOME FANTASIA</th>
            <th scope="col">CNPJ</th>
            <th scope="col">GERENCIAR INFORMAÇÕES</th>
            <th><a href="{{ route('empresa.create') }}" class="btn btn-outline-success">+ Criar Novo</a>
       </tr>
    </thead>
    <tbody>
        @if ($empresas->isEmpty())
                    <?php flash('Ops! Você ainda não possui nenhum registro de Empresa no momento! <i class="fa fa-user" aria-hidden="true"></i>')->error()->important() ?>    
                @else 
    @foreach ($empresas as $empresa)
    <tr>
        <td>{{ $empresa->id }}</td>
        <td>{{ $empresa->nomefantasia }}</td>
        <td>{{ $empresa->cnpj }}</td>

    <td>
        <a href="{{ route('empresa.show', $empresa->id) }}" class="btn btn-outline-info">Detalhes</a>
        <a href="{{ route('empresa.edit', $empresa->id) }}" class="btn btn-outline-warning">Editar</a>
    </td>
    <td colspan="2">
        <form action="{{ route('empresa.destroy', $empresa->id) }}" method="POST">
            @csrf
            @method('DELETE')
        <button type="submit" class="btn btn-outline-danger">Apagar</button>                        
    </form>                        
    </td>
    </tr>
    @endforeach
    @endif

    </tbody>
</table>
</div>
    {{-- <div class="card-footer">
        {{ $empresas->links() }}
    </div> --}}
    </div>
</div>

@endsection