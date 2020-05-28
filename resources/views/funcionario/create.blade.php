@extends('layouts.inicio')
@section('inicio')

<div class="col-xl-6 col-lg-5 offset-xl-2 offset-lg-1">
    <div class="booking-form">   
<form action="{{ route('funcionario.store') }}" method="post"  class="request-form ftco-animate" >
    @csrf
    <h4>Cadastro de Funcionarios</h4>

    <div class="check-date">
      <label for="NOME" class="label">NOME:</label>
         <input type="text" name="nome" value="{{ old('nome') }}" class="form-control {{ $errors->has('nome') ? 'is-invalid' : ''}}" autocomplete="on" placeholder="Digite o nome completo" /> 
         @if($errors->has('nome'))
         <div class="invalid-feedback">
             {{$errors->has('first')}}
         </div>
        @endif
        @error('nome')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
        @enderror
        </div>

     <div class="check-date">
      <label for="RG" class="label">RG:</label>
        <input type="text" name="rg" value="{{ old('rg') }}" class="form-control {{ $errors->has('rg') ? 'is-invalid' : ''}}" autocomplete="on" placeholder="Ex: 654321">
                @if($errors->has('rg'))
                    <div class="invalid-feedback">
                        {{$errors->has('first')}}
                    </div>
                @endif
                @error('rg')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
      </div> 
      <div class="check-date">
        <label for="CPF" class="label">CPF:</label>
        <input type="text" name="cpf" value="{{ old('cpf') }}" class="form-control {{ $errors->has('cpf') ? 'is-invalid' : ''}}" autocomplete="on" placeholder="Ex: 987.654.321-12">
                @if($errors->has('cpf'))
                    <div class="invalid-feedback">
                        {{$errors->has('first')}}
                    </div>
                @endif

                @error('cpf')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
      </div> 
      <div class="check-date">
        <label for="PROFISSÃO" class="label">PROFISSÃO:</label>
        <input type="text" name="profissao" value="{{ old('profissao') }}" class="form-control {{ $errors->has('profissao') ? 'is-invalid' : ''}}" autocomplete="on"   placeholder="Ex: Pintor">
                @if($errors->has('profissao'))
                    <div class="invalid-feedback">
                        {{$errors->has('first')}}
                    </div>
                @endif

                @error('profissao')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
      </div> 
      <div class="check-date">
        <label for="TELEFONE" class="label">TELEFONE:</label>
        <input type="text" name="telefone" value="{{ old('telefone') }}" class="form-control {{ $errors->has('telefone') ? 'is-invalid' : ''}}" autocomplete="on"   placeholder="Ex: 096991713026">
                @if($errors->has('telefone'))
                    <div class="invalid-feedback">
                        {{$errors->has('first')}}
                    </div>
                @endif

                @error('telefone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
      </div> 

     
      <div class="check-date">
     <label for="OBSERVAÇÃO" class="label">OBSERVAÇÃO:</label>
     <textarea type="text" name="observacao" class="form-control {{ $errors->has('observacao') ? 'is-invalid' : ''}}" placeholder="preenchimento opcional"  autocomplete="on" rows="3"> </textarea>
            @if($errors->has('observacao'))
                <div class="invalid-feedback">
                    {{$errors->has('first')}}
                </div>
            @endif

            @error('observacao')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

       

        <div class="d-flex">
          <div class="form-group ml-2">
              <input type="submit" name="btnEnviar" class="btn btn-success py-3 px-4">
              <a href="{{ route('funcionario.index') }}" class="btn btn-danger py-3 px-4">Cancelar</a>
          </div>
      </div>  
    </form>
    </div>  
  </div>
    @endsection
