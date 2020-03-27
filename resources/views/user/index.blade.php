@extends('layouts.inicio')
@section('inicio')
<h2>Lista de Clientes</h2>

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
        </tr>
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

<a href="{{ route('user.create', $user->id) }}">Criar Novo</a>
@endsection