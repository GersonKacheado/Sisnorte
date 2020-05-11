@extends('layouts.inicio')
@section('inicio')

<div class="col-xl-6 col-lg-5 offset-xl-2 offset-lg-1">
  <div class="booking-form">
<h2>Edição de dados do colaborador</h2>
<form action="{{ route('funcionario.update', $funcionario->id) }}" method="post"  class="request-form ftco-animate" >
    @method('PATCH')
    @csrf
    
    <div class="check-date">
      <label for="nome" class="label">NOME:</label>
       <input type="text" name="nome" value="{{ $funcionario->nome }}" class="form-control {{ $errors->has('nome') ? 'is-invalid' : ''}}" autocomplete="off"  minlength="3"  placeholder="" /> 
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
      <label for="" class="label">RG:</label>
        <input type="text" name="rg" value="{{ $funcionario->rg }}" class="form-control {{ $errors->has('rg') ? 'is-invalid' : ''}}" autocomplete="off" placeholder="">
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
        <label for="nome" class="label">CPF:</label>
    <input type="text" name="cpf" value="{{ $funcionario->cpf }}" class="form-control {{ $errors->has('cpf') ? 'is-invalid' : ''}}"  autocomplete="off"  minlength="3"  placeholder="" /> 
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
    <label for="" class="label">PROFISSÃO:</label>
     <input type="text" name="profissao" value="{{ $funcionario->profissao }}" class="form-control {{ $errors->has('profissao') ? 'is-invalid' : ''}}" autocomplete="off" placeholder="">
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
    <label for="" class="label">TELEFONE:</label>
        <input type="text" name="telefone" value="{{ $funcionario->telefone }}" class="form-control {{ $errors->has('telefone') ? 'is-invalid' : ''}}" autocomplete="off" placeholder="">
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
        <label for="" class="label">OBSERVAÇÃO:</label>
     <input type="text" name="observacao" value="{{ $funcionario->observacao }}" class="form-control {{ $errors->has('observacao') ? 'is-invalid' : ''}}" autocomplete="off"  placeholder="Preenchimento opcional">
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
        <input type="submit" name="btnEnviar" class="btn btn-success">
        <a href="{{ route('funcionario.index') }}" class="btn btn-danger">Cancelar</a>
      </div>      
    </div>

    </form>
  </div>
</div>
@endsection
