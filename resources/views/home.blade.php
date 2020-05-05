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
                  <h3>Solicitar Serviço</h3>
{{-- @if(count($errors) > 0)<div class="alert alert-danger"><ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach </ul></div>@endif
--}}
<form action="{{ route('solicito.store') }}" method="post"  class="request-form ftco-animate" >
@csrf
  <div class="select-option">
     <label for="tipo" class="label">TIPO:</label>
     <!--<input type="text" name="tipo" autocomplete="off"  class="form-control"   placeholder="" /> -->
     <select name="tipo" id="room" class="form-control {{ $errors->has('tipo') ? 'is-invalid' : ''}}">
      <option value=""></option>

                            <option value="dedetizacao">DEDETIZAÇÃO</option>
                            <option value="desratizacao">DESRATIZAÇÃO</option>
                            <option value="descupinizacao">DESCUPINIZAÇÃO</option>
                            <option value="limpeza de forro com aspiracao">LIMPEZA DE FORRO COM ASPIRAÇÃO</option>
                            <option value="evacuacao de morcegos, cabas e abelhas">EVACUAÇÃO DE MORCEGOS, CABAS E ABELHAS</option>
                            <option value="lavagem a seco">LAVAGEM A SECO</option>
                            <option value="capina quimica e rocagem">CAPINA QUIMICA E ROÇAGEM</option>
                            <option value="pintura">PINTURA</option>
                            <option value="eletrica e hidraulica">ELÉTRICA E HIDRÁULICA</option>
                            <option value="remocao de entulhos">REMOÇÃO DE ENTULHOS</option>
                            <option value="instalacao e limpeza de central de ar">INSTALAÇÃO E LIMPEZA DE CENTRAL DE AR</option>
                            <option value="servico em altura">SERVIÇO EM ALTURA</option>
                            <option value="limpeza e higienizacao de cisterna">LIMPEZA E HIGIENIZAÇÃO DE CISTERNA</option>
                            <option value="outros">OUTROS</option>
                            </select>
                            @if($errors->has('tipo'))
                            <div class="invalid-feedback">
                                {{$errors->has('first')}}
                            </div>
                           @endif
                           
                           @error('tipo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                           @enderror
 </div>

<div class="select-option">
    <label for="ESTADO" class="label">ESTADO:</label>
   <!-- <input type="text" name="estado" class="form-control" autocomplete="off" required  placeholder="">-->
   <select name="estado" id="room" class="form-control {{ $errors->has('estado') ? 'is-invalid' : ''}}">
    <option value=""></option>
     <option value="amapa">AMAPÁ</option>
   </select>
   @if($errors->has('estado'))
   <div class="invalid-feedback">
       {{$errors->has('first')}}
   </div>
  @endif
  
  @error('estado')
   <span class="invalid-feedback" role="alert">
       <strong>{{ $message }}</strong>
   </span>
  @enderror
  </div> 



<div class="select-option">
  <label for="MUNICIPIO" class="label">MUNICIPIO:</label>
  <select name="municipio" id="room" class="form-control {{ $errors->has('municipio') ? 'is-invalid' : ''}}">
    <option value=""></option>
    <option value="macapa">Macapá</option>
    <option value="santana">Santana</option>
  </select>
  @if($errors->has('municipio'))
  <div class="invalid-feedback">
      {{$errors->has('first')}}
  </div>
 @endif
 
 @error('municipio')
  <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
  </span>
 @enderror
<!--  <input type="text" name="municipio" autocomplete="off"  class="form-control"   placeholder="" /> -->
</div>

<div class="select-option">
 <label for="" class="label">BAIRRO:</label>
 <input type="text" name="bairro" value="{{ old('bairro') }}" class="form-control {{ $errors->has('bairro') ? 'is-invalid' : ''}}" autocomplete="on"   placeholder="">
 @if($errors->has('bairro'))
 <div class="invalid-feedback">
     {{$errors->has('first')}}
 </div>
@endif

@error('bairro')
 <span class="invalid-feedback" role="alert">
     <strong>{{ $message }}</strong>
 </span>
@enderror
</div>     


<div class="select-option">
  <label for="nome" class="label">RUA:</label>
  <input type="text" name="rua" value="{{ old('rua') }}" class="form-control {{ $errors->has('rua') ? 'is-invalid' : ''}}" autocomplete="on"       placeholder="" /> 
  @if($errors->has('rua'))
  <div class="invalid-feedback">
      {{$errors->has('first')}}
  </div>
@endif

@error('rua')
  <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
  </span>
@enderror
</div>
  
<div class="select-option">
 <label for="" class="label">NUMERO:</label>
 <input type="text" name="numero" value="{{ old('numero') }}" class="form-control {{ $errors->has('numero') ? 'is-invalid' : ''}}"  autocomplete="on"   placeholder="" />
 @if($errors->has('numero'))
 <div class="invalid-feedback">
     {{$errors->has('first')}}
 </div>
@endif

@error('numero')
 <span class="invalid-feedback" role="alert">
     <strong>{{ $message }}</strong>
 </span>
@enderror
</div>
     
 


<div class="select-option">
  <label for="nome" class="label">COMPLEMENTO:</label>
  <textarea type="text" name="complemento" class="form-control {{ $errors->has('complemento') ? 'is-invalid' : ''}}" placeholder="preenchimento opcional"  autocomplete="on" rows="3"> </textarea>
  @if($errors->has('complemento'))
  <div class="invalid-feedback">
      {{$errors->has('first')}}
  </div>
 @endif
 
 @error('complemento')
  <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
  </span>
 @enderror
</div>
 
 <div class="d-flex">
   <div class="form-group ml-2">
     <input type="submit" name="btnEnviar"   class="btn btn-success py-3 px-4">
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



