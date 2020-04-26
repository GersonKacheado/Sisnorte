@extends('layouts.inicio')
@section('inicio')

<div class="col-xl-6 col-lg-5 offset-xl-2 offset-lg-1">
<div class="booking-form">


<h2>Editando Cadastro de empresa {{ $empresa->namefantasia }}</h2>
<form action="{{ route('empresa.update', $empresa->id) }}" method="post" class="request-form ftco-animate" >
    @method('PATCH')
    @csrf
    
       <div class="check-date">
         <label for="NOME" class="label">NOME FANTASIA:</label>
       <input type="text" name="nomefantasia"  class="form-control {{ $errors->has('nomefantasia') ? 'is-invalid' : ''}}" value="{{ $empresa->nomefantasia }}" autocomplete="off" minlength="3"  placeholder="" /> 
       @if($errors->has('nomefantasia'))
       <div class="invalid-feedback">
           {{$errors->has('first')}}
       </div>
   @endif

   @error('nomefantasia')
       <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
       </span>
   @enderror
      </div>

     <div class="check-date">
      <label for="RAZÃO SOCIAL" class="label">RAZÃO SOCIAL:</label>
    <input type="text" name="razaosocial"  class="form-control {{ $errors->has('razaosocial') ? 'is-invalid' : ''}}" value="{{ $empresa->razaosocial }}" autocomplete="off" minlength="3"  placeholder="" /> 
    @if($errors->has('razaosocial'))
    <div class="invalid-feedback">
        {{$errors->has('first')}}
    </div>
@endif

@error('razaosocial')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
  </div>


     <div class="check-date">
        <label for="CNPJ" class="label">CNPJ:</label>
        <input type="text" name="cnpj"  class="form-control {{ $errors->has('cnpj') ? 'is-invalid' : ''}}" value="{{ $empresa->cnpj }}" autocomplete="off"   placeholder="">
        @if($errors->has('cnpj'))
        <div class="invalid-feedback">
            {{$errors->has('first')}}
        </div>
    @endif

    @error('cnpj')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
      </div>          
     <div class="d-flex">
       <div class="form-group ml-2">
         <input type="submit" name="btnEnviar" class="btn btn-success py-3 px-4">
         <a href="{{ route('empresa.index') }}" class="btn btn-danger py-3 px-4">Cancelar</a>
       </div>
      
     </div>
    </form>
  </div>
</div>
    @endsection
