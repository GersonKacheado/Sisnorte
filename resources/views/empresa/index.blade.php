
@extends('layouts.inicio')
@section('inicio')
<div class="container">
    <div class="card text-center">
       {{-- <div class="card-header">
            Listagem de {{ $users->count() }} clientes no total de {{ $users->total() }} 
            exibindo agora registros de ({{ $users->firstItem() }}) a ({{ $users->lastItem() }})
        </div> --}}
{{-- <form method="POST" action="empresa/buscar" >
    @csrf
    <input name="text" type="text" placeholder="ajeitar bug aqui">
    <button type="submit">buscar</button>
</form> --}}
<div class="card-body">

    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">NOME FANTASIA</th>
            <th scope="col">CNPJ</th>
            <th scope="col">GERENCIAR INFORMAÇÕES</th>
            <th><a href="{{ route('empresa.create') }}" class="btn btn-outline-success">+ Criar Novo</a>
       </tr>
    </thead>
    <tbody>
    @foreach ($empresas as $empresa)
    <tr>
    <td>{{ $empresa->nomefantasia }}</td>
    <td>{{ $empresa->cnpj }}</td>

    <td>
        <a href="{{ route('empresa.edit', $empresa->id) }}">Editar</a>
        <a href="{{ route('empresa.show', $empresa->id) }}">Detalhes</a>
    </td>
    </tr>
    @endforeach

    </tbody>
</table>
</div>

<a href="{{ route('empresa.create', $empresa->id) }}">Criar Novo</a>
{{-- <div class="card-footer">
    {{ $users->links() }}
</div> --}}

    </div>
</div>

@endsection