<h2>Solicitado por {{ $solicito->users_id }}</h2>

<ul>
<li><strong>Tipo: </strong>{{ $solicito->tipo }}</li>
<li><strong>Estado: </strong>{{ $solicito->estado }}</li>
<li><strong>Municipio: </strong>{{ $solicito->municipio }}</li>
<li><strong>Bairro: </strong>{{ $solicito->bairro }}</li>
<li><strong>Rua: </strong>{{ $solicito->rua }}</li>
<li><strong>Numero: </strong>{{ $solicito->numero }}</li>
<li><strong>Complemento: </strong>{{ $solicito->complemento }}</li>

</ul>

<form action="{{ route('solicito.destroy', $solicito->id) }}" method="POST">
    @csrf
    @method('DELETE')
<button type="submit">Apagar Registro da solicitação: {{ $solicito->tipo }}</button>
</form>
<a href="{{ route('solicito.index') }}"><< Voltar <<</a>
