
@extends('layouts.inicio')
@section('inicio')
<h2>Lista de empresas</h2>

<form method="POST" action="empresa/buscar" >
    @csrf
    <input name="text" type="text" placeholder="ajeitar bug aqui">
    <button type="submit">buscar</button>
</form>

<hr>
<table border="1">
    <thead>
        <tr>
            <th>Nome Fantasia</th>
            <th>Cnpj</th>
            <th>Mais Informações</th>
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

<a href="{{ route('empresa.create', $empresa->id) }}">Criar Novo</a>
@endsection