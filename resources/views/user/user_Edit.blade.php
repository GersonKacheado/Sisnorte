@extends('layouts.head')
@section('head')
<section class="hero-section">
  <div class="container">
      <div class="row">
          <div class="col-lg-4">
              <div class="hero-text">
                  <h1>SisNorte</h1>
                  <p></p>
                  <a href="#" class="primary-btn"></a>
              </div>
          </div>
          <div class="col-xl-5 col-lg-6 offset-xl-2 offset-lg-1">
              <div class="booking-form">
      <h3>Gerenciar suas informações pessoais</h3>   
 <form action="{{ route('atualizar') }}" method="post"  class="request-form ftco-animate" >
          @method('PATCH')
          @csrf
          
          <div class="check-date">
              <label for="NOME" >NOME:</label>
              <input id="name" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" name="name" value="{{ $user->name }}"  autocomplete="name"/> 
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
              <input type="text" name="telefone" class="form-control {{ $errors->has('telefone') ? 'is-invalid' : ''}}" value="{{ $user->telefone }}" autocomplete="off"   placeholder="">
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
              <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $user->email }}" autocomplete="off" minlength="3"  placeholder="" /> 
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
          <input id="password-confirm" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" value=""  name="password_confirmation" autocomplete="new-password" placeholder="CONFIRMAR NOVA SENHA"> 
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
            <a href="{{ route('home') }}" class="btn btn-danger py-3 px-4">Cancelar</a>

          </div>
          
        </div>
        </form>
</div>
</div>
</div>
</div>
<div class="hero-slider owl-carousel">
    
  <div class="hs-item set-bg" data-setbg="img/hero/hero-2.jpg"></div>
  <div class="hs-item set-bg" data-setbg="img/hero/hero-2.jpg"></div>
  <div class="hs-item set-bg" data-setbg="img/hero/hero-2.jpg"></div>
  </div>
</section>



        @endsection