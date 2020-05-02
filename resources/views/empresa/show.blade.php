@extends('layouts.inicio')
@section('inicio')
<div class="container">
    <div class="card text-center">
        <div class="card-header">
            Registro Nº {{ $empresa->id }} da Empresa {{ $empresa->nomefantasia }}
        </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <th scope="col">CODIGO</th>
                <th scope="col">NOME FANTASIA</th>
                <th scope="col">CNPJ</th>
                <th scope="col">RAZÃO SOCIAL</th>
                {{--<th scope="col">SENHA</th>--}}
                <th colspan="2">GERENCIAR REGISTRO</th>
                <th></th>
            </thead>
            <tbody>
                <tr>
                <td>{{ $empresa->id }}</td>
                <td>{{ $empresa->nomefantasia }}</td>
                <td>{{ $empresa->cnpj }}</td>
                <td>{{ $empresa->razaosocial }}</td>
                <td>
                    <a href="{{ route('empresa.edit', $empresa->id) }}" class="btn btn-outline-warning">Editar</a>
                    <a href="{{ route('empresa.index') }}" class="btn btn-outline-info">Voltar</a>
                </td>
                <td>
                    <form action="{{ route('empresa.destroy', $empresa->id) }}" method="POST">
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
