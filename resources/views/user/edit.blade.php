<h2>Editando Clientes {{-- $solicito->name --}}</h2>
<form action="{{ route('user.update', $user->id) }}" method="post"  class="request-form ftco-animate" >
    @method('PATCH')
    @csrf
    
   <div class="d-flex">
       <div class="form-group mr-2">
         <label for="name" class="label">Nome:</label>
       <input type="text" name="name" value="{{ $user->name }}" autocomplete="off"  
       class="form-control" required  minlength="3"  placeholder="" /> 
     </div>
     <div class="form-group ml-2">
        <label for="" class="label">Telefone:</label>
        <input type="text" name="telefone" value="{{ $user->telefone }}" class="form-control"
         autocomplete="off" required  placeholder="">
      </div>      
   </div>    
   
   <div class="d-flex">
    <div class="form-group mr-2">
      <label for="nome" class="label">Email:</label>
    <input type="text" name="email" value="{{ $user->email }}" autocomplete="off"  
    class="form-control" required  minlength="3"  placeholder="" /> 
  </div>
  <div class="form-group ml-2">
     <label for="" class="label">Senha:</label>
     <input type="text" name="password" value="{{ $user->password }}" class="form-control"
      autocomplete="off" required  placeholder="">
   </div>      
</div>   

     <div class="d-flex">
       <div class="form-group ml-2">
         <input type="submit" name="btnEnviar" class="btn btn-success py-3 px-4">
       </div>
      
     </div>
    </form>
    <a href="{{ route('user.index') }}"><< Voltar <<</a>