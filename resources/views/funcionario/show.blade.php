<h2>Funcionario {{ $funcionario->nome }}</h2>

<ul>
<li><strong>NOME: </strong>{{ $funcionario->nome }}</li>
<li><strong>RG: </strong>{{ $funcionario->rg }}</li>
<li><strong>CPF: </strong>{{ $funcionario->cpf }}</li>
<li><strong>PROFISSÃO: </strong>{{ $funcionario->profissao }}</li>
<li><strong>TELEFONE: </strong>{{ $funcionario->telefone }}</li>
<li><strong>OBSERVAÇÃO: </strong>{{ $funcionario->observacao }}</li>


</ul>

<form action="{{ route('funcionario.destroy', $funcionario->id) }}" method="POST">
    @csrf
    @method('DELETE')
<button type="submit">Apagar Registro de funcionario: {{ $funcionario->nome }}</button>
</form>
<a href="{{ route('funcionario.index') }}"><< Voltar <<</a>
