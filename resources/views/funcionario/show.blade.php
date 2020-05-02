@extends('layouts.inicio')
@section('inicio')
  
<div class="container">
    <div class="card text-center">
        <div class="card-header">
        Registro do Colaborador: {{ $funcionario->nome }}
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <th scope="col">CODIGO</th>
                <th scope="col">NOME</th>
                <th scope="col">PROFISSÃO</th>
                <th scope="col">TELEFONE</th>
                <th scope="col">RG</th>
                <th scope="col">CPF</th>
                <th scope="col">OBSERVAÇÃO</th>
                <th colspan="3">GERENCIAR REGISTRO</th>
                </thead>
                <tbody>
                    <tr>
                    <td>{{ $funcionario->id }}</td>
                    <td>{{ $funcionario->nome }}</td>
                    <td>{{ $funcionario->profissao }}</td>
                    <td>{{ $funcionario->telefone }}</td>
                    <td>{{ $funcionario->rg }}</td>
                    <td>{{ $funcionario->cpf }}</td>
                    <td>{{ $funcionario->observacao }}</td>
                    <td>
                        <a href="{{ route('funcionario.edit', $funcionario->id) }}" class="btn btn-outline-warning">Editar</a>
                    </td>
                    <td>
                        <a href="{{ route('funcionario.index') }}" class="btn btn-outline-info">Voltar</a>
                    </td>
                    <td>
                        <form action="{{ route('funcionario.destroy', $funcionario->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                         <button type="submit" class="btn btn-outline-danger">Apagar</button>                        
                        </form>
                    </td> 
                    </tr>
                </tbody>
            </table>        
</div>
    </div>
</div>
@endsection
