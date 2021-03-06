@extends('layouts.inicio')
@section('inicio')
    
<div class="col-xl-6 col-lg-5 offset-xl-2 offset-lg-1">
    <div class="booking-form">
        <h4>Painel de Criação de Registro de Serviço</h4>   
        <form method="POST" action="{{ route('service.store') }}" class="request-form ftco-animate">
            @csrf
            <div class="select-option">
                <label for="TIPO DE SERVIÇO" class="label">TIPO DE SERVIÇO:</label>
          
                <select name="solicito_id" class="form-control {{ $errors->has('solicito_id') ? 'is-invalid' : ''}}">
                  <option selected></option>   
                    @foreach($solicitos as $solicito)
                      <option name="solicito_id" value="{{$solicito->id}}">{{$solicito->tipo}}</option>
                    @endforeach  
                </Select>
                @if($errors->has('solicito_id'))
                <div class="invalid-feedback">
                    {{$errors->has('first')}}
                </div>
            @endif

            @error('solicito_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              </div> 

              <div class="select-option">
                <label for="EMPRESA PRESTADORA" class="label">EMPRESA PRESTADORA:</label>
          
                <select name="empresa_id" class="form-control {{ $errors->has('empresa_id') ? 'is-invalid' : ''}}">
                  <option selected></option>   
                    @foreach($empresas as $empresa)
                      <option name="empresa_id" value="{{$empresa->id}}">{{$empresa->nomefantasia}}</option>
                    @endforeach  
                </Select>
                @if($errors->has('empresa_id'))
                <div class="invalid-feedback">
                    {{$errors->has('first')}}
                </div>
            @endif

            @error('empresa_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              </div>

              <div class="select-option">
                <label for="COLABORADOR" class="label">COLABORADOR:</label>
          
                <select name="funcionario_id" class="form-control {{ $errors->has('funcionario_id') ? 'is-invalid' : ''}}">
                  <option selected></option>   
                    @foreach($funcionarios as $funcionario)
                      <option name="funcionario_id" value="{{$funcionario->id}}">{{$funcionario->nome}}</option>
                    @endforeach  
                </Select>
                @if($errors->has('funcionario_id'))
                <div class="invalid-feedback">
                    {{$errors->has('first')}}
                </div>
            @endif

            @error('funcionario_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              </div>

              <div class="check-date">
                <label for="DATA DE EXECUÇÃO">DATA DE CRIAÇÃO:</label>
                <input id="data_criacao" type="date" name="data_criacao" class="form-control {{ $errors->has('data_criacao') ? 'is-invalid' : ''}}"  value="{{ old('data_execucao') }}">
            @if($errors->has('data_criacao'))
                <div class="invalid-feedback">
                    {{$errors->has('first')}}
                </div>
            @endif

            @error('data_criacao')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>

              <div class="check-date">
                <label for="DATA DE EXECUÇÃO">DATA DE EXECUÇÃO:</label>
                <input id="data_execucao" type="date" class="form-control {{ $errors->has('data_execucao') ? 'is-invalid' : ''}}" name="data_execucao" value="{{ old('data_execucao') }}">
            @if($errors->has('data_execucao'))
                <div class="invalid-feedback">
                    {{$errors->has('first')}}
                </div>
            @endif

            @error('data_execucao')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>

            <div class="check-date">
              <label for="DESCRIÇÃO" class="label">DESCRIÇÃO:</label>
              <textarea type="text" name="descricao" class="form-control {{ $errors->has('descricao') ? 'is-invalid' : ''}}" placeholder="preenchimento opcional"  autocomplete="on" rows="3"> </textarea>
              @if($errors->has('descricao'))
                  <div class="invalid-feedback">
                      {{$errors->has('first')}}
                  </div>
              @endif
         
              @error('descricao')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
                 </div>

            <div class="d-flex">
                <div class="form-group ml-2">
                    <input type="submit" name="btnEnviar" class="btn btn-success">
                    <a href="{{ route('service.index') }}" class="btn btn-primary">Voltar</a>
                </div>
            </div>  
        
        
        </form>
    </div>
</div>
@endsection