    {{-- @if(count($errors) > 0)
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif --}}
<form action="{{ route('solicito.store') }}" method="post"  class="request-form ftco-animate" >
    @csrf
    <h2>Cadastro de Pedido</h2>

   <div class="d-flex">
       <div class="form-group mr-2">
         <label for="nome" class="label">TIPO:</label>
         <input type="text" name="tipo" autocomplete="off"  class="form-control"   placeholder="" /> 
     </div>
     <div class="form-group ml-2">
        <label for="" class="label">ESTADO:</label>
        <input type="text" name="estado" class="form-control" autocomplete="off" required  placeholder="">
      </div>     
   </div> 

   <div class="d-flex">
    <div class="form-group mr-2">
      <label for="nome" class="label">MUNICIPIO:</label>
      <input type="text" name="municipio" autocomplete="off"  class="form-control"   placeholder="" /> 
  </div>
  <div class="form-group ml-2">
     <label for="" class="label">BAIRRO:</label>
     <input type="text" name="bairro" class="form-control" autocomplete="off"   placeholder="">
   </div>     
</div> 

<div class="d-flex">
    <div class="form-group mr-2">
      <label for="nome" class="label">RUA:</label>
      <input type="text" name="rua" autocomplete="off"  class="form-control"   placeholder="" /> 
  </div>
  <div class="form-group ml-2">
     <label for="" class="label">NUMERO:</label>
     <input type="text" name="numero" class="form-control" autocomplete="off"   placeholder="">
   </div>     
</div> 

<div class="d-flex">
    <div class="form-group mr-2">
      <label for="nome" class="label">COMPLEMENTO:</label>
      <input type="text" name="complemento" autocomplete="off"  class="form-control"   placeholder="" /> 
  </div>
   
</div> 

 

       

     <div class="d-flex">
       <div class="form-group ml-2">
         <input type="submit" name="btnEnviar"   class="btn btn-success py-3 px-4">
       </div>
       
     </div>
    </form>
    <a href="{{ route('solicito.index') }}"><< Voltar <<</a>
