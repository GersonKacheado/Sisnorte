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
<a href="{{ route('solicito.index') }}"><< Voltar <<</a>