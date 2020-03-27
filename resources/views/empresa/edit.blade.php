<h2>Editando Cadastro de empresa {{ $empresa->namefantasia }}</h2>
<form action="{{ route('empresa.update', $empresa->id) }}" method="post"  
    class="request-form ftco-animate" >
    @method('PATCH')
    @csrf
    
   <div class="d-flex">
       <div class="form-group mr-2">
         <label for="nome" class="label">Nome</label>
       <input type="text" name="nomefantasia" value="{{ $empresa->nomefantasia }}" 
       autocomplete="off"  class="form-control" required  minlength="3"  placeholder="" /> 
     </div>

     <div class="form-group mr-2">
      <label for="nome" class="label">Razão social</label>
    <input type="text" name="razaosocial" value="{{ $empresa->razaosocial }}" 
    autocomplete="off"  class="form-control" required  minlength="3"  placeholder="" /> 
  </div>


     <div class="form-group ml-2">
        <label for="" class="label">CNPJ:</label>
        <input type="text" name="cnpj" value="{{ $empresa->cnpj }}" class="form-control" 
        autocomplete="off" required  placeholder="">
      </div> 

     
   </div>                   


       

     <div class="d-flex">
       <div class="form-group ml-2">
         <input type="submit" name="btnEnviar" class="btn btn-success py-3 px-4">
       </div>
      
     </div>
    </form>
    <a href="{{ route('empresa.index') }}"><< Voltar <<</a>
