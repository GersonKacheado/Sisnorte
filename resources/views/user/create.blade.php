@extends('layouts.inicio')
@section('inicio')
    
<div class="col-xl-6 col-lg-5 offset-xl-2 offset-lg-1">
    <div class="booking-form">
        <h4>Painel de Criação de Registro</h4>   
            <form method="POST" action="{{ route('user.store') }}" class="request-form ftco-animate">
                @csrf
                <div class="check-date">
                    <label for="NOME">NOME:</label>
                    <input id="name" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" name="name" value="{{ old('name') }}" autocomplete="name" >
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
                    <label for="TELEFONE">TELEFONE:</label>
                    <input id="telefone" type="text" class="form-control @error('telefone') is-invalid @enderror" name="telefone" value="{{ old('telefone') }}" autocomplete="telefone" >
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
                    <label for="TELEFONE">EMAIL:</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">
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
                    <label for="TELEFONE">SENHA:</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
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
                    <label for="CONFIRMAR SENHA" class="label">CONFIRMAR SENHA:</label>
                    <input id="password-confirm" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" autocomplete="new-password"> 
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
                    <input type="submit" name="btnEnviar" class="btn btn-success">
                    <a href="{{ route('user.index') }}" class="btn btn-primary">Voltar</a>
                </div>
            </div>                                                                     
        </form>
    </div>
</div>





{{-- <div class="card-body">
    <form method="POST" action="{{ route('user.store') }}">
        @csrf

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" 
                value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="telefone" class="col-md-4 col-form-label text-md-right">{{ __('Telefone') }}</label>

            <div class="col-md-6">
                <input id="telefone" type="text" class="form-control @error('telefone') is-invalid @enderror"
                 name="telefone" value="{{ old('telefone') }}" required autocomplete="telefone" autofocus>

                @error('telefone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                 value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" 
                required autocomplete="new-password">
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>
</div>
--}}
@endsection