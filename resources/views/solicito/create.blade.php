@extends('layouts.inicio')
@section('inicio')
    
<div class="col-xl-6 col-lg-5 offset-xl-2 offset-lg-1">
    <div class="booking-form">
<form action="{{ route('solicito.store') }}" method="post"  class="request-form ftco-animate" >
    @csrf
    <h2>Cadastro de Pedido</h2>
    <div class="select-option">
      <label for="CLIENTE" class="label">CLIENTE:</label>

      <select name="users_id">
        <option selected>selecionar cliente</option>   
          @foreach($users as $user)
            <option name="users_id" value="{{$user->id}}">{{$user->name}}</option>
          @endforeach  
      </Select>
    </div>

    <div class="check-date">
      <label for="nome" class="label">TIPO:</label>
         <input type="text" name="tipo" autocomplete="off" placeholder="" /> 
     </div>

     <div class="check-date">
      <label for="" class="label">ESTADO:</label>
        <input type="text" name="estado" autocomplete="off"   placeholder="">
      </div>     
 

      <div class="check-date">
        <label for="nome" class="label">MUNICIPIO:</label>
      <input type="text" name="municipio" autocomplete="off" placeholder="" /> 
  </div>

  <div class="check-date">
    <label for="" class="label">BAIRRO:</label>
     <input type="text" name="bairro" autocomplete="off"   placeholder="">
   </div>     


   <div class="check-date">
    <label for="nome" class="label">RUA:</label>
      <input type="text" name="rua" autocomplete="off" placeholder="" /> 
  </div>

  <div class="check-date">
    <label for="" class="label">NUMERO:</label>
     <input type="text" name="numero" autocomplete="off"   placeholder="">
   </div>     
 

   <div class="check-date">
    <label for="nome" class="label">COMPLEMENTO:</label>
      <input type="text" name="complemento" autocomplete="off" placeholder="" /> 
  </div>
   
 

     <div class="d-flex">
      <div class="form-group ml-2">
          <input type="submit" name="btnEnviar" class="btn btn-success  py-3 px-4">
          <a href="{{ route('solicito.index') }}" class="btn btn-primary py-3 px-4">Voltar</a>
      </div>
  </div>

    </form>
    </div>
</div>
@endsection
