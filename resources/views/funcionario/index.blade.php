@extends('layouts.inicio')
@section('inicio')
<div class="container">
    <div class="card text-center">
        <div class="card-header">
            Listagem de {{ $funcionarios->count() }} colaboradores no total de {{ $funcionarios->total() }} 
            exibindo agora registros de ({{ $funcionarios->firstItem() }}) a ({{ $funcionarios->lastItem() }})
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th scope="col">CODIGO</th>
                    <th scope="col">NOME</th>
                    <th scope="col">PROFISSÃO</th>
                    <th scope="col">TELEFONE</th>
                    <th colspan="2">GERENCIAR REGISTRO</th>
                    <th><a href="{{ route('funcionario.create') }}" class="btn btn-outline-success">+ Criar Novo</a></th>
                </thead>
                <tbody>
                    @foreach ($funcionarios as $funcionario)
                    <tr>
                    <td>{{ $funcionario->id }}</td>
                    <td>{{ $funcionario->nome }}</td>
                    <td>{{ $funcionario->profissao }}</td>
                    <td>{{ $funcionario->telefone }}</td>
                    <td>
                        <a href="{{ route('funcionario.show', $funcionario->id) }}" class="btn btn-outline-info">Detalhes</a>
                        <a href="{{ route('funcionario.edit', $funcionario->id) }}" class="btn btn-outline-warning">Editar</a>
                    </td>
                    <td colspan="2">
                        <form action="{{ route('funcionario.destroy', $funcionario->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">Apagar</button>                        
                    </form>                        
                    </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $funcionarios->links() }}
        </div>
    </div>
</div>
@endsection