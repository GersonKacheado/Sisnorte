<h2>Editando Cadastro de funcionarios {{ $funcionario->name }}</h2>
<form action="{{ route('funcionario.update', $funcionario->id) }}" method="post"  class="request-form ftco-animate" >
    @method('PATCH')
    @csrf
    
   <div class="d-flex">
       <div class="form-group mr-2">
         <label for="nome" class="label">NOME:</label>
       <input type="text" name="nome" value="{{ $funcionario->nome }}" 
       autocomplete="off"  class="form-control" required  minlength="3"  placeholder="" /> 
     </div>
     <div class="form-group ml-2">
        <label for="" class="label">RG:</label>
        <input type="text" name="rg" value="{{ $funcionario->rg }}" 
        class="form-control" autocomplete="off" required  placeholder="">
      </div>    
   </div>
   
   <div class="d-flex">
    <div class="form-group mr-2">
      <label for="nome" class="label">CPF:</label>
    <input type="text" name="cpf" value="{{ $funcionario->cpf }}" 
    autocomplete="off"  class="form-control" required  minlength="3"  placeholder="" /> 
  </div>
  <div class="form-group ml-2">
     <label for="" class="label">PROFISSÃO:</label>
     <input type="text" name="profissao" value="{{ $funcionario->profissao }}" 
     class="form-control" autocomplete="off" required  placeholder="">
   </div>    
</div>
  <div class="d-flex">
    <div class="form-group ml-2">
        <label for="" class="label">TELEFONE:</label>
        <input type="text" name="telefone" value="{{ $funcionario->telefone }}" 
        class="form-control" autocomplete="off" required  placeholder="">
      </div>  
  <div class="form-group ml-2">
     <label for="" class="label">OBSERVAÇÃO:</label>
     <input type="text" name="observacao" value="{{ $funcionario->observacao }}" 
     class="form-control" autocomplete="off" required  placeholder="">
   </div>    
</div>      
    

       

     <div class="d-flex">
       <div class="form-group ml-2">
         <input type="submit" name="btnEnviar" class="btn btn-success py-3 px-4">
       </div>
      
     </div>
    </form>
    <a href="{{ route('funcionario.index') }}"><< Voltar <<</a>
