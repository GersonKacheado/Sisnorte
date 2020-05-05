@extends('layouts.inicio')
@section('inicio')

<div class="col-xl-6 col-lg-5 offset-xl-2 offset-lg-1">
  <div class="booking-form">
      <h4>Painel de Edição de Registro</h4>   
          <form action="{{ route('user.update', $users->id) }}" method="post"  class="request-form ftco-animate" >
          @method('PATCH')
          @csrf
          
          <div class="check-date">
              <label for="NOME" >NOME:</label>
              <input id="name" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" name="name" value="{{ $users->name }}"  autocomplete="name"/> 
                @if($errors->has('name'))
                  <div class="invalid-feedback">
                    {{$errors->has('first')}}
                  </div>
                 @endif

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
          </div>

          <div class="check-date">
              <label for="TELEFONE" class="label">TELEFONE:</label>
              <input type="text" name="telefone" class="form-control {{ $errors->has('telefone') ? 'is-invalid' : ''}}" value="{{ $users->telefone }}" autocomplete="off"   placeholder="">
                @if($errors->has('telefone'))
                  <div class="invalid-feedback">
                    {{$errors->has('first')}}
                  </div>
                @endif

                @error('telefone')
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
                @enderror
          </div>
                  
        
          <div class="check-date">
              <label for="EMAIL" class="label">EMAIL:</label>
              <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $users->email }}" autocomplete="off" minlength="3"  placeholder="" /> 
                @if($errors->has('email'))
                  <div class="invalid-feedback">
                    {{$errors->has('first')}}
                  </div>
                @endif

                @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror 
          </div>

          <div class="check-date">
            <label for="SENHA" class="label">SENHA:</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="" autocomplete="off"   placeholder="DIGITAR NOVA SENHA">
              @if($errors->has('password'))
                <div class="invalid-feedback">
                  {{$errors->has('first')}}
                </div>
              @endif

              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror 
        </div> 
        
        <div class="check-date">
          <label for="TELEFONE" class="label">CONFIRMAR SENHA:</label>
          <input id="password-confirm" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" autocomplete="new-password" placeholder="CONFIRMAR NOVA SENHA"> 
            @if($errors->has('password_confirmation'))
                <div class="invalid-feedback">
            {{$errors->has('first')}}
                </div>
            @endif 
            @error('password_confirmation')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror          
      </div>
      

        <div class="d-flex">
          <div class="form-group ml-2">
            <input type="submit" name="btnEnviar" class="btn btn-success py-3 px-4">
            <a href="{{ route('user.index') }}" class="btn btn-danger py-3 px-4">Cancelar</a>

          </div>
          
        </div>
        </form>
      </div>  
          </div>  
  </div>
</div>


    @endsection
