@extends('layouts.inicio')
@section('inicio')

<div class="container">
    <div class="card text-center">
        <div class="card-header">
            Listagem de {{ $users->count() }} clientes no total de {{ $users->total() }} 
            exibindo agora registros de ({{ $users->firstItem() }}) a ({{ $users->lastItem() }})
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th scope="col">ID</th>
                    <th scope="col">NOME</th>
                    <th scope="col">TELEFONE</th>
                    <th colspan="2">GERENCIAR REGISTRO</th>
                    <th><a href="{{ route('user.create') }}" class="btn btn-outline-success">+ Criar Novo</a>
                    </th>
                    {{-- <th scope="col">EMAIL</th>
                    <th scope="col">SENHA</th> --}}
                </thead>
                <tbody>
                    @foreach ($users as $user)

                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->telefone }}</td>
                        <td > 
                            <a href="{{ route('user.show', $user->id) }}" class="btn btn-outline-info">Detalhes</a>
                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-outline-warning">Editar</a>
                        </td>
                        <td colspan="2">
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">Apagar</button>                        
                        </form>                        
                        </td>

                        {{-- <td>1</td>
                        <td>1</td> --}}
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $users->links() }}
        </div>
    </div>
</div>


{{-- <h2>Lista de Clientes</h2>

<form method="POST" action="user/buscar" >
    @csrf
    <input name="text" type="text" placeholder="ajeitar bug aqui">
    <button type="submit">buscar</button>
</form>

<hr>
<table border="1">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Mais Informações</th>
       {{-- <th>Email</th>
            <th>Senha</th> --}}
        {{-- </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
    <tr>
    <td>{{ $user->name }}</td>
    <td>{{ $user->telefone }}</td>

    <td>
        <a href="{{ route('user.edit', $user->id) }}">Editar</a>
        <a href="{{ route('user.show', $user->id) }}">Detalhes</a>
    </td>
    </tr>
    @endforeach

    </tbody>
</table>

<a href="{{ route('user.create', $user->id) }}">Criar Novo</a> --}}
@endsection