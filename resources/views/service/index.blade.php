@extends('layouts.inicio')
@section('inicio')
<div class="container">
    <div class="card text-center">
        <div class="card-header">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">CODIGO</th>
                        <th scope="col">PEDIDO Nº</th>
                        <th scope="col">EMPRESA</th>
                        <th scope="col">EXECUÇÃO EM</th>
                        <th scope="col">GERENCIAR INFORMAÇÃOES</th>
                        <th><a href="{{ route('service.create') }}" class="btn btn-outline-success">+ Criar Novo</a>
                    </tr>
                </thead>
                <tbody>
                    @if ($services->isEmpty())
                    <?php flash('Ops! Você ainda não possui nenhum registro de Serviços no momento! <i class="fa fa-user" aria-hidden="true"></i>')->error()->important() ?>    
                @else 
                    @foreach ( $services as $service)
                    <tr>
                    <td>{{ $service->id }}</td>
                    <td>{{ $service->solicito_id }}</td>
                    <td>{{ $service->empresa_id }}</td>
                    <td>{{ $service->data_execucao }}</td>
                    <td>
                        <a href="{{ route('service.show', $service->id) }}" class="btn btn-outline-info">Detalhes</a>
                        <a href="{{ route('service.edit', $service->id) }}" class="btn btn-outline-warning">Editar</a>
                    </td>
                    <td>
                        <form action="{{ route('service.destroy', $service->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">Apagar</button>                        
                        </form>
                    </td>  
                    </tr>
                        
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        <div class="card-body">
        
        </div>
    </div>
</div>
@endsection