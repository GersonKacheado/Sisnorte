@extends('layouts.inicio')
@section('inicio')
<div class="container">
    <div class="card text-center">
        <div class="card-header">
           Registro Nº {{ $service->id }} de Serviço         
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th scope="col">CODIGO</th>
                    <th scope="col">PEDIDO Nº</th>
                    <th scope="col">EMPRESA</th>
                    <th scope="col">COD COLABORADOR</th>
                    <th scope="col">CRIADO EM</th>
                    <th scope="col">EXECUÇÃO EM</th>
                    <th scope="col">DESCRIÇÃO</th>
                    <th colspan="3">GERENCIAR REGISTRO</th>
                </thead>
                <tbody>
                    <tr>
                    <td>{{ $service->id }}</td>
                    <td>{{ $service->solicito_id }}</td>
                    <td>{{ $service->empresa_id }}</td>
                    <td>{{ $service->funcionario_id }}</td>
                    <td>{{ $service->data_criacao }}</td>
                    <td>{{ $service->data_execucao }}</td>
                    <td>{{ $service->descricao }}</td>
                    <td>
                        <a href="{{ route('service.edit', $service->id) }}" class="btn btn-outline-warning">Editar</a>
                        <a href="{{ route('service.index') }}" class="btn btn-outline-info">Voltar</a>
                    </td>
                    

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection