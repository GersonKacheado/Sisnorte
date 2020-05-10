@extends('layouts.inicio')
@section('inicio')
  
<div class="container">
    <div class="card text-center">
        <div class="card-body">
            <div class="card-header">
                Registro {{ $solicito->id }}
            </div>
            <table class="table table-hover">
                <thead>
                    <th scope="col">SOLICITADO POR</th>
                    <th scope="col">TIPO</th>
                    <th scope="col">ESTADO</th>
                    <th scope="col">MUNICIPIO</th>
                    <th scope="col">BAIRRO</th>
                    <th scope="col">RUA</th>
                    <th scope="col">NÚMERO</th>
                    <th scope="col">COMPLEMENTO</th>
                    <th colspan="2">GERENCIAR REGISTRO</th>                    
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $solicito->users_id }}</td>
                        <td>{{ $solicito->tipo }}</td>
                        <td>{{ $solicito->estado }}</td>
                        <td>{{ $solicito->municipio }}</td>
                        <td>{{ $solicito->bairro }}</td>
                        <td>{{ $solicito->rua }}</td>
                        <td>{{ $solicito->numero }}</td>
                        <td>{{ $solicito->complemento }}</td>
                        <td>
                            <a href="{{ route('solicito.edit', $solicito->id) }}" class="btn btn-outline-warning">Editar</a>
                            <a href="{{ route('solicito.index') }}" class="btn btn-outline-info">Voltar</a>
                        </td>
                            <td>
                                <form action="{{ route('solicito.destroy', $solicito->id) }}" method="POST">
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
@endsection
