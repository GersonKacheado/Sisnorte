<h2>Empresa {{ $empresa->nomefantasia }}</h2>

<ul>
<li><strong>Nome Fantasia: </strong>{{ $empresa->nomefantasia }}</li>
<li><strong>Cnpj: </strong>{{ $empresa->cnpj }}</li>
<li><strong>Razao Social:</strong>{{ $empresa->razaosocial }}</li>
</ul>

<form action="{{ route('empresa.destroy', $empresa->id) }}" method="POST">
    @csrf
    @method('DELETE')
<button type="submit">Apagar Registro de empresa: {{ $empresa->nomefantasia }}</button>
</form>
<a href="{{ route('empresa.index') }}"><< Voltar <<</a>
