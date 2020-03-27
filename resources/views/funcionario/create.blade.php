


    @if(count($errors) > 0)
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
<form action="{{ route('funcionario.store') }}" method="post"  class="request-form ftco-animate" >
    @csrf
    <h2>Cadastro de Funcionarios</h2>

   <div class="d-flex">
       <div class="form-group mr-2">
         <label for="nome" class="label">Nome:</label>
         <input type="text" name="nome" autocomplete="off"  class="form-control"   placeholder="Digite seu primeiro nome" /> 
     </div>
     <div class="form-group ml-2">
        <label for="" class="label">RG:</label>
        <input type="text" name="rg" class="form-control" autocomplete="off" required  placeholder="Ex: (96)98888 0000">
      </div> 
      <div class="form-group ml-2">
        <label for="" class="label">CPF:</label>
        <input type="text" name="cpf" class="form-control" autocomplete="off" required  placeholder="Ex: (96)98888 0000">
      </div> 
     <div class="form-group ml-2">
        <label for="" class="label">PROFISSÃO:</label>
        <input type="text" name="profissao" class="form-control" autocomplete="off" required  placeholder="Ex: (96)98888 0000">
      </div> 
      <div class="form-group ml-2">
        <label for="" class="label">TELEFONE:</label>
        <input type="text" name="telefone" class="form-control" autocomplete="off" required  placeholder="Ex: (96)98888 0000">
      </div> 

     
   </div>                   
    <div class="d-flex">
       <div class="form-group mr-2"> 
     <label class="label">OBSERVAÇÃO:</label>
         <input type="text" class="form-control" name="observacao" autocomplete="off" placeholder="Ex: exemplo@gmail.com" required  >
       </div>    
     </div>

       

     <div class="d-flex">
       <div class="form-group ml-2">
         <input type="submit" name="btnEnviar"   class="btn btn-success py-3 px-4">
       </div>
       
     </div>
    </form>
    <a href="{{ route('funcionario.index') }}"><< Voltar <<</a>
