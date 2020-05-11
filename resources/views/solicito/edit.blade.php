@extends('layouts.inicio')
@section('inicio')

<div class="col-xl-6 col-lg-5 offset-xl-2 offset-lg-1"> 
  <div class="booking-form">
<h2>Edição de Pedidos {{-- $solicito->name --}}</h2>
<form action="{{ route('solicito.update', $solicito->id) }}" method="post"  class="request-form ftco-animate" >
    @method('PATCH')
    @csrf
    
    <div class="check-date">
      <label for="nome" class="label">TIPO:</label>
       <input type="text" name="tipo" value="{{ $solicito->tipo }}" class="form-control {{ $errors->has('tipo') ? 'is-invalid' : ''}}" autocomplete="on"   placeholder="" /> 
       @if($errors->has('tipo'))
       <div class="invalid-feedback">
           {{$errors->has('first')}}
       </div>
      @endif
      
      @error('tipo')
       <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
       </span>
      @enderror
      </div>

     <div class="check-date">
      <label for="" class="label">ESTADO:</label>
        <input type="text" name="estado" value="{{ $solicito->estado }}" class="form-control {{ $errors->has('estado') ? 'is-invalid' : ''}}" autocomplete="on"   placeholder="">
        @if($errors->has('estado'))
        <div class="invalid-feedback">
            {{$errors->has('first')}}
        </div>
       @endif
       
       @error('estado')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
       @enderror
      </div>      
     
   
      <div class="check-date">
        <label for="nome" class="label">MUNICIPIO:</label>
    <input type="text" name="municipio" value="{{ $solicito->municipio }}" class="form-control {{ $errors->has('municipio') ? 'is-invalid' : ''}}" autocomplete="on"  placeholder="" /> 
    @if($errors->has('municipio'))
  <div class="invalid-feedback">
      {{$errors->has('first')}}
  </div>
 @endif
 
 @error('municipio')
  <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
  </span>
 @enderror
  </div>
  
  <div class="check-date">
    <label for="" class="label">BAIRRO:</label>
     <input type="text" name="bairro" value="{{ $solicito->bairro }}" class="form-control {{ $errors->has('bairro') ? 'is-invalid' : ''}}" autocomplete="off"   placeholder="">
     @if($errors->has('bairro'))
     <div class="invalid-feedback">
         {{$errors->has('first')}}
     </div>
    @endif
    
    @error('bairro')
     <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
     </span>
    @enderror
    </div>      

   <div class="check-date">
    <label for="nome" class="label">RUA:</label>
    <input type="text" name="rua" value="{{ $solicito->rua }}" autocomplete="on" class="form-control {{ $errors->has('rua') ? 'is-invalid' : ''}}" placeholder="" /> 
    @if($errors->has('rua'))
    <div class="invalid-feedback">
        {{$errors->has('first')}}
    </div>
  @endif
  
  @error('rua')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
  @enderror
  </div>

  <div class="check-date">
    <label for="" class="label">NUMERO:</label>
     <input type="text" name="numero" value="{{ $solicito->numero }}" class="form-control {{ $errors->has('numero') ? 'is-invalid' : ''}}" autocomplete="on"   placeholder="">
     @if($errors->has('numero'))
     <div class="invalid-feedback">
         {{$errors->has('first')}}
     </div>
    @endif
    
    @error('numero')
     <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
     </span>
    @enderror
    </div>      
   

   <div class="check-date">
    <label for="nome" class="label">COMPLEMENTO:</label>
    <input type="text" name="complemento" value="{{ $solicito->complemento }}" autocomplete="on" class="form-control {{ $errors->has('complemento') ? 'is-invalid' : ''}}"  placeholder="" /> 
    @if($errors->has('complemento'))
  <div class="invalid-feedback">
      {{$errors->has('first')}}
  </div>
 @endif
 
 @error('complemento')
  <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
  </span>
 @enderror
  </div> 

  <div class="d-flex">
    <div class="form-group ml-2">
      <input type="submit" name="btnEnviar" class="btn btn-success py-3 px-4">
      <a href="{{ route('solicito.index') }}" class="btn btn-danger py-3 px-4">Cancelar</a>

    </div>
    
  </div>
    </form>
  </div>
</div>
    @endsection
