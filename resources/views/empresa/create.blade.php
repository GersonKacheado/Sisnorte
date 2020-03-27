


    @if(count($errors) > 0)
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
<form action="{{ route('empresa.store') }}" method="post"  class="request-form ftco-animate" >
    @csrf
    <h2>Cadastro de Empresa</h2>

   <div class="d-flex">
       <div class="form-group mr-2">
         <label for="nome" class="label">NOME FANTASIA:</label>
         <input type="text" name="nomefantasia" autocomplete="off"  class="form-control"   placeholder="" /> 
     </div>


     <div class="form-group mr-2">
      <label for="nome" class="label">RAZAO SOCIAL:</label>
      <input type="text" name="razaosocial" autocomplete="off"  class="form-control"   placeholder="" /> 
  </div>

     <div class="form-group ml-2">
        <label for="" class="label">CNPJ:</label>
        <input type="text" name="cnpj" class="form-control" autocomplete="off" required  placeholder="">
      </div> 

     
   </div>                   


       

     <div class="d-flex">
       <div class="form-group ml-2">
         <input type="submit" name="btnEnviar"   class="btn btn-success py-3 px-4">
       </div>
       
     </div>
    </form>
    <a href="{{ route('empresa.index') }}"><< Voltar <<</a>
