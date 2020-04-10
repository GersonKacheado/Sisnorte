@extends('layouts.inicio')
@section('inicio')
<section class="hero-section">
  <div class="container">
    <div class="row">
    <div class="col-lg-2">
  </div>
  <div class="col-xl-6 col-lg-6 offset-xl-2 offset-lg-1">
            <div class="booking-form">
      <h4>Painel de Edição de Registro</h4>   
          <form action="{{ route('user.update', $user->id) }}" method="post"  class="request-form ftco-animate" >
          @method('PATCH')
          @csrf
          
            <div class="form-group">
              <label for="Nome" >Nome:</label>
            <input type="text" name="name" value="{{ $user->name }}" autocomplete="off"  
            class="form-control" required  minlength="3"  placeholder="" /> 
          </div>
          <div class="form-group">
              <label for="Telefone" class="label">Telefone:</label>
              <input type="text" name="telefone" value="{{ $user->telefone }}" class="form-control"
              autocomplete="off" required  placeholder="">
            </div>      
        
          <div class="form-group">
            <label for="Email" class="label">Email:</label>
          <input type="text" name="email" value="{{ $user->email }}" autocomplete="off"  
          class="form-control" required  minlength="3"  placeholder="" /> 
        </div>
        <div class="form-group">
          <label for="Senha" class="label">Senha:</label>
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
<div class="hero-slider owl-carousel">
  <div class="hs-item set-bg" data-setbg="{{asset('img/hero/hero-1.jpg')}}"></div>
  <div class="hs-item set-bg" data-setbg="{{asset('img/hero/hero-2.jpg')}}"></div>
  <div class="hs-item set-bg" data-setbg="{{asset('img/hero/hero-3.jpg')}}"></div>
</div>

    @endsection
