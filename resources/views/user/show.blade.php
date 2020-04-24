@extends('layouts.inicio')
@section('inicio')

    



<div class="container">
    <div class="card text-center">
        <div class="card-header">
            Registro {{ $user->id }}
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th scope="col">ID</th>
                    <th scope="col">NOME</th>
                    <th scope="col">TELEFONE</th>
                    <th scope="col">EMAIL</th>
                    {{--<th scope="col">SENHA</th>--}}
                    <th colspan="2">GERENCIAR REGISTRO</th>
                    <th></th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->telefone }}</td>
                        <td>{{ $user->email }}</td>
                      {{--  <td>{{ $user->password }}</td>--}}
                      <td>
                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-outline-warning">Editar</a>
                        <a href="{{ route('user.index') }}" class="btn btn-outline-info">Voltar</a>
                    </td>
                        <td>
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST">
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










{{--

 <h2>Cliente  {{ $user->id }}</h2>

<ul>
<li><strong>Nome: </strong>{{ $user->name }}</li>
<li><strong>Telefone: </strong>{{ $user->telefone }}</li>
<li><strong>Email: </strong>{{ $user->email }}</li>
<li><strong>Senha: </strong>{{ $user->password }}</li>

</ul>

<form action="{{ route('user.destroy', $user->id) }}" method="POST">
    @csrf
    @method('DELETE')
<button type="submit">Apagar Registro de cliente: {{ $user->name }}</button>
</form>
<a href="{{ route('user.index') }}"><< Voltar <<</a> --}}

@endsection
