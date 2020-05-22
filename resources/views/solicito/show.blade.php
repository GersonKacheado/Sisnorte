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
                    <th scope="col">CLIENTE</th>
                    <th scope="col">PEDIDO</th>
                    <th scope="col">DATA</th>
                  <!--  <th scope="col">ESTADO</th> -->
                    <th scope="col">MUNICIPIO</th>
                    <th scope="col">LOGRADOURO</th>
                    <!-- <th scope="col">RUA</th>
                   <th scope="col">NÚMERO</th> -->
                    <th scope="col">COMPLEMENTO</th>
                    <th scope="col">COLABORADOR</th>
                    <th scope="col">EMPRESA</th>
                    <th colspan="2">GERENCIADOR</th>                    
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $solicito->users->name }}</td>
                        <td>{{ $solicito->tipo }}</td>
                        <td>{{ $solicito->data }}</td>
                        {{-- <td>{{ $solicito->estado }}</td> --}}
                        <td>{{ $solicito->municipio }}</td>
                        <td>Bairro: {{ $solicito->bairro }},</br>Rua: {{ $solicito->rua }}, Nº {{ $solicito->numero }}</td>
                        
                       {{--     <td>{{ $solicito->numero }}</td> --}}
                        <td>{{ $solicito->complemento }}</td>
                    <td>{{$solicito->funcionario_id}}</td>
                    <td>{{$solicito->empresa_id}}</td>
                        <td>
                            <a href="{{ route('solicito.edit', $solicito->id) }}" class="btn btn-outline-warning">Atualizar Dados</a>
                        </td>
                            <td>
                                <form action="{{ route('solicito.destroy', $solicito->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">Apagar</button>                        
                        </form>
                        <a href="{{ route('pedidosAceitos') }}" class="btn btn-outline-info">Voltar</a>

                            </td>   
                    </tr>
                </tbody>
            </table>
    </div>
</div>
@endsection
