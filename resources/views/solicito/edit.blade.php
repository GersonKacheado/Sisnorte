<h2>Editando Pedidos {{-- $solicito->name --}}</h2>
<form action="{{ route('solicito.update', $solicito->id) }}" method="post"  class="request-form ftco-animate" >
    @method('PATCH')
    @csrf
    
   <div class="d-flex">
       <div class="form-group mr-2">
         <label for="nome" class="label">TIPO:</label>
       <input type="text" name="tipo" value="{{ $solicito->tipo }}" autocomplete="off"  
       class="form-control" required  minlength="3"  placeholder="" /> 
     </div>
     <div class="form-group ml-2">
        <label for="" class="label">ESTADO:</label>
        <input type="text" name="estado" value="{{ $solicito->estado }}" class="form-control"
         autocomplete="off" required  placeholder="">
      </div>      
   </div>    
   
   <div class="d-flex">
    <div class="form-group mr-2">
      <label for="nome" class="label">MUNICIPIO:</label>
    <input type="text" name="municipio" value="{{ $solicito->municipio }}" autocomplete="off"  
    class="form-control" required  minlength="3"  placeholder="" /> 
  </div>
  <div class="form-group ml-2">
     <label for="" class="label">BAIRRO:</label>
     <input type="text" name="bairro" value="{{ $solicito->bairro }}" class="form-control"
      autocomplete="off" required  placeholder="">
   </div>      
</div>   

<div class="d-flex">
    <div class="form-group mr-2">
      <label for="nome" class="label">RUA:</label>
    <input type="text" name="rua" value="{{ $solicito->rua }}" autocomplete="off"  
    class="form-control" required  minlength="3"  placeholder="" /> 
  </div>
  <div class="form-group ml-2">
     <label for="" class="label">NUMERO:</label>
     <input type="text" name="numero" value="{{ $solicito->numero }}" class="form-control"
      autocomplete="off" required  placeholder="">
   </div>      
</div>   

<div class="d-flex">
    <div class="form-group mr-2">
      <label for="nome" class="label">COMPLEMENTO:</label>
    <input type="text" name="complemento" value="{{ $solicito->complemento }}" autocomplete="off"  
    class="form-control" required  minlength="3"  placeholder="" /> 
  </div>   
</div>   
 

       

     <div class="d-flex">
       <div class="form-group ml-2">
         <input type="submit" name="btnEnviar" class="btn btn-success py-3 px-4">
       </div>
      
     </div>
    </form>
    <a href="{{ route('solicito.index') }}"><< Voltar <<</a>
