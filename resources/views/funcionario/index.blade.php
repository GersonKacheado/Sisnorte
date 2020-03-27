@extends('layouts.inicio')
@section('inicio')

<h2>Lista de Funcionarios</h2>

<form method="POST" action="funcionario/buscar" >
    @csrf
    <input name="text" type="text" placeholder="ajeitar bug aqui">
    <button type="submit">buscar</button>
</form>

<hr>
<table border="1">
    <thead>
        <tr>
            <th>Nome</th>            
            <th>PROFISSÃO</th>       
            <th>Mais Informações</th>
         {{--   <th>RG</th>
            <th>CPF</th> 
            <th>TELEFONE</th>
            <th>OBSERVAÇÃO</th> --}}
        </tr>
    </thead>
    <tbody>
    @foreach ($funcionarios as $funcionario)
    <tr>
    <td>{{ $funcionario->nome }}</td>
    <td>{{ $funcionario->profissao }}</td>
  {{--  <td>{{ $funcionario->rg }}</td>
    <td>{{ $funcionario->cpf }}</td>
    <td>{{ $funcionario->telefone }}</td>
    <td>{{ $funcionario->observacao }}</td> --}}


    <td>
        <a href="{{ route('funcionario.edit', $funcionario->id) }}">Editar</a>
        <a href="{{ route('funcionario.show', $funcionario->id) }}">Detalhes</a>
    </td>
    </tr>
    @endforeach

    </tbody>
</table>

<a href="{{ route('funcionario.create', $funcionario->id) }}">Criar Novo</a>
@endsection