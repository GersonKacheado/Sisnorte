@extends('layouts.inicio')
@section('inicio')
<div class="col-xl-6 col-lg-5 offset-xl-2 offset-lg-1">
  <div class="booking-form">


{{--
    @if(count($errors) > 0)
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif --}}
<form action="{{ route('empresa.store') }}" method="post"  class="request-form ftco-animate" >
    @csrf
    <h2>Cadastro de Empresa</h2>

       <div class="check-date">
         <label for="NOME FANTASIA" class="label">NOME FANTASIA:</label>
         <input type="text" name="nomefantasia" class="form-control {{ $errors->has('nomefantasia') ? 'is-invalid' : ''}}" autocomplete="off" placeholder="" /> 
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
      <label for="RAZAO SOCIAL" class="label">RAZAO SOCIAL:</label>
      <input type="text" name="razaosocial" class="form-control {{ $errors->has('razaosocial') ? 'is-invalid' : ''}}" autocomplete="off" placeholder="" /> 
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
        <input type="text" name="cnpj" class="form-control {{ $errors->has('cnpj') ? 'is-invalid' : ''}}" autocomplete="off" placeholder="">
        @if($errors->has('cnpj'))
        <div class="invalid-feedback" >
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
         <input type="submit" name="btnEnviar"   class="btn btn-success py-3 px-4">   
         <a href="{{ route('empresa.index') }}" class="btn btn-primary py-3 px-4"> Voltar </a>
      </div> 
     </div> 
       
    </form>
  </div>
  </div>
    @endsection
