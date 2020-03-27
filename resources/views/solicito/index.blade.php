@extends('layouts.inicio')
@section('inicio')
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
            <th>Senha</th> --}}
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
   
@endsection


