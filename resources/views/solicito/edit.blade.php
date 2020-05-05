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
       <input type="text" name="tipo" value="{{ $solicito->tipo }}" autocomplete="off" class="form-control"   minlength="3"  placeholder="" /> 
     </div>

     <div class="check-date">
      <label for="" class="label">ESTADO:</label>
        <input type="text" name="estado" value="{{ $solicito->estado }}" class="form-control" autocomplete="off"   placeholder="">
      </div>      
     
   
      <div class="check-date">
        <label for="nome" class="label">MUNICIPIO:</label>
    <input type="text" name="municipio" value="{{ $solicito->municipio }}" autocomplete="off" class="form-control"   minlength="3"  placeholder="" /> 
  </div>
  <div class="check-date">
    <label for="" class="label">BAIRRO:</label>
     <input type="text" name="bairro" value="{{ $solicito->bairro }}" class="form-control" autocomplete="off"   placeholder="">
   </div>      

   <div class="check-date">
    <label for="nome" class="label">RUA:</label>
    <input type="text" name="rua" value="{{ $solicito->rua }}" autocomplete="off" class="form-control"   minlength="3"  placeholder="" /> 
  </div>
  <div class="check-date">
    <label for="" class="label">NUMERO:</label>
     <input type="text" name="numero" value="{{ $solicito->numero }}" class="form-control" autocomplete="off"   placeholder="">
   </div>      
   

   <div class="check-date">
    <label for="nome" class="label">COMPLEMENTO:</label>
    <input type="text" name="complemento" value="{{ $solicito->complemento }}" autocomplete="off" class="form-control"   minlength="3"  placeholder="" /> 
  </div>   
   
 

       

  <div class="d-flex">
    <div class="form-group ml-2">
      <input type="submit" name="btnEnviar" class="btn btn-success py-3 px-4">
      <a href="{{ route('user.index') }}" class="btn btn-danger py-3 px-4">Cancelar</a>

    </div>
    
  </div>
    </form>
    <a href="{{ route('solicito.index') }}">Voltar</a>
  </div>
</div>
    @endsection
