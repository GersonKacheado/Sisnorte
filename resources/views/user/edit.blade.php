@extends('layouts.inicio')
@section('inicio')

  <div class="col-xl-6 col-lg-5 offset-xl-2 offset-lg-1">
            <div class="booking-form">
      <h4>Painel de Edição de Registro</h4>   
          <form action="{{ route('user.update', $user->id) }}" method="post"  class="request-form ftco-animate" >
          @method('PATCH')
          @csrf
          
            <div class="check-date">
              <label for="NOME" >NOME:</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" 
            value="{{ $user->name }}" required autocomplete="name" autofocus /> 
          </div>
          <div class="check-date">
              <label for="TELEFONE" class="label">TELEFONE:</label>
              <input type="text" name="telefone" value="{{ $user->telefone }}" class="form-control"
              autocomplete="off" required  placeholder="">
            </div>      
        
          <div class="check-date">
            <label for="EMAIL" class="label">EMAIL:</label>
          <input type="text" name="email" value="{{ $user->email }}" autocomplete="off"  
          class="form-control" required  minlength="3"  placeholder="" /> 
        </div>
        <div class="check-date">
          <label for="SENHA" class="label">SENHA:</label>
          <input type="text" name="password" value="{{ $user->password }}" class="form-control"
            autocomplete="off" required  placeholder="">
        </div>      
      

        <div class="d-flex">
          <div class="form-group ml-2">
            <input type="submit" name="btnEnviar" class="btn btn-success">
            <a href="{{ route('user.index') }}" class="btn btn-primary">Voltar</a>

          </div>
          
        </div>
        </form>
      </div>  
          </div>  
  </div>
</div>


    @endsection
