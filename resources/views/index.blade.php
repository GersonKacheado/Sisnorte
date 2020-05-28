<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('img/fialig.jpg')}}" type="image/x-icon" />

        <title>Sistema Integrado de Serviços - SisNorte</title>

        <link href="{{asset('https://fonts.googleapis.com/css?family=Lora:400,700&display=swap')}}" rel="stylesheet">
        <link href="{{asset('https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap')}}" rel="stylesheet">
    
        <!-- Css Styles -->

        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/elegant-icons.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/flaticon.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/nice-select.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        <div class="search-icon  search-switch">
         {{--   <i class="icon_search"></i> --}}
        </div>
        <div class="header-configure-area">
            <div class="language-option">
                <img src="{{asset('img/config.png')}}" alt="">
                <span><i class="fa fa-arrow-circle-down" aria-hidden="true"></i></i><!--<i class="fa fa-angle-down"></i>--></span>
                <div  class="flag-dropdown">

                    <a class="dropdown-item" href="{{ route('index') }}">{{ __('Início') }}</a>
                    <a class="dropdown-item" href="{{ route('login') }}">{{ __('Entrar') }}</a>

                    <a class="dropdown-item" href="{{ route('home') }}">{{ __('Pedido') }}</a>


                    <a class="dropdown-item" href="{{ route('register') }}">{{ __('Cadastro') }}</a>
              
                </div>
            </div>
        <a href="{{route('home')}}" class="bk-btn">Fazer um pedido</a>
        </div>
        <nav class="mainmenu mobile-menu">
            <ul>
                <li class=""><a href="{{route('index')}}">Início</a></li>
                <li class="active"><a href="{{route('home')}}">Fazer Pedido</a></li>
                                    <li><a href="#empresa">Empresa</a></li>
                                    <li><a href="#servicos">Serviços</a></li>
                                    
                                    <li><a href="#contato">Contato</a>
                                      <!--  <ul class="dropdown">
                                            <li><a href="./room-details.html">Room Details</a></li>
                                            <li><a href="./blog-details.html">Blog Details</a></li>
                                            <li><a href="#">Family Room</a></li>
                                            <li><a href="#">Premium Room</a></li>
                                        </ul>-->
                                    </li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="top-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-tripadvisor"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        <ul class="top-widget">
            <li><i class="fa fa-phone"></i>(96) 99171 3026<i class="fa fa-whatsapp" aria-hidden="true"></i></li>
            <li><i class="fa fa-envelope"></i>sisnorte.ap@gmail.com</li>
        </ul>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tn-left">
                            <li><i class="fa fa-phone"></i>(96) 99171 3026<i class="fa fa-whatsapp" aria-hidden="true"></i></li>
                            <li><i class="fa fa-envelope"></i>sisnorte.ap@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="tn-right">
                            <div class="top-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            <a href="{{ route('login') }}" class="bk-btn">Login</a>
                            <div class="language-option">
                               {{-- <a href="{{ route('register') }}" class="bk-btn">Cadastre-se</a> --}}
                               <img src="{{asset('img/config.png')}}" alt="">
                                <span><i class="fa fa-arrow-circle-down" aria-hidden="true"></i></i><!--<i class="fa fa-angle-down"></i>--></span>
                                <div  class="flag-dropdown">

                                    <a class="dropdown-item" href="{{ route('index') }}">{{ __('Início') }}</a>
                                    <a class="dropdown-item" href="{{ route('login') }}">{{ __('Entrar') }}</a>

                                    <a class="dropdown-item" href="{{ route('home') }}">{{ __('Pedido') }}</a>


                                    <a class="dropdown-item" href="{{ route('register') }}">{{ __('Cadastro') }}</a>
                                   {{-- <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Sair') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form> --}}

                               <!-- <img src="img/flag.jpg" alt="">
                                <span>EN <i class="fa fa-angle-down"></i></span>
                                <div class="flag-dropdown">
                                    <ul>
                                        <li><a href="#">Zi</a></li>
                                        <li><a href="#">Fr</a></li>
                                    </ul>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="{{route('index')}}">
                                <img width="110px"  src="{{asset('img/logo.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li class="active"><a href="{{route('index')}}">Início</a></li>
                                    <li ><a href="{{route('home')}}">Fazer Pedido</a></li>
                                    <li><a href="#empresa">Empresa</a></li>
                                    <li><a href="#servicos">Serviços</a></li>
                                    
                                    <li><a href="#contato">Contato</a>
                                      <!--  <ul class="dropdown">
                                            <li><a href="./room-details.html">Room Details</a></li>
                                            <li><a href="./blog-details.html">Blog Details</a></li>
                                            <li><a href="#">Family Room</a></li>
                                            <li><a href="#">Premium Room</a></li>
                                        </ul>-->
                                    </li>
                                </ul>
                            </nav>
                            <div class="nav-right search-switch">
                               {{-- <i class="icon_search"></i> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-text">
                        <h1>SisNorte</h1>
                        <p>Sistema web para gerenciamento de clientes e serviços, além de fazer a divulgação da empresa Norte Dedetização Ltda.</p>
                        <a href="#contato" class="primary-btn">Para mais detalhes</a>

                      {{--  @if ((Auth::user())) 

                        <a href="" class="primary-btn"> teste</a>

                           @foreach ($users as $user)
                           <a href="#" class="bk-btn">{{ Auth::user()->name }}</a>
                           @endforeach
                           @endif--}}

                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
                    <div class="booking-form">
                        <h3>Primeiro Cadastro</h3>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="check-date">
                                <label for="NOME">NOME:</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>
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
                                <input id="telefone" type="text" class="form-control @error('telefone') is-invalid @enderror" name="telefone" value="{{ old('telefone') }}"  autocomplete="telefone">
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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">
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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">
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
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
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
                                    <a href="{{ route('login') }}" class="btn btn-primary py-3 px-4">Ir para login</a>
                                </div>
                            </div> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="{{asset('img/hero/hero-2.jpg')}}"></div>

            <div class="hs-item set-bg" data-setbg="{{asset('img/hero/hero-2.jpg')}}"></div>
            <div class="hs-item set-bg" data-setbg="{{asset('img/hero/hero-2.jpg')}}"></div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Us Section Begin -->
    <section class="aboutus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="section-title" id="empresa">
                            <span>A Empresa</span>
                            <h2>NORTE DEDETIZAÇÃO Ltda</h2>
                        </div>
                        <p class="f-para">Empresa especializada em dedetização de ambientes sejam eles internos ou externos. No mercado a mais de 10 anos livrando famílias amapaenses de quaisquer pragas ou roedores.
                            Além da dedetização, oferecemos tambéms outros serviços como de instalação eletríca, reparos hidraúlicos, pintura em geral, entre outros.</p>
                        <br>
                        <a href="#contato" class="primary-btn about-btn">Mais Informações</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-pic">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="{{asset('img/about/about-1.jpg')}}" alt="">
                            </div>
                            <div class="col-sm-6">
                                <img src="{{asset('img/about/about-2.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Section End -->

    <!-- Services Section End -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title" id="servicos">
                        <span>Mais Vantagens</span>
                        <h2>Sobre Nossos Serviços</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-036-parking"></i>
                        <h4>Atendimento & Orçamento</h4>
                        <p>Prestação de diversos serviços com otimos preços, cobrimos qualquer orçamaento, faça já o seu!</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-033-dinner"></i>
                        <h4>Visita Técnica</h4>
                        <p>Está com pressa e quer resolver logo. Solucionamos seu problema ainda hoje. Se precisar, também agende visita técnica.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-026-bed"></i>
                        <h4>Empresa Qualificada</h4>
                        <p>Somos uma empresa com vasta experiência em Dedetização, Instalações e Reformas. Prontos para melhor atendê-los.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-024-towel"></i>
                        <h4>Profissionais Capacitados</h4>
                        <p>Contamos com uma equipe altamente qualificada e em constante atualização. Comprometida, e que faz acontecer.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-044-clock-1"></i>
                        <h4>Atendimento 24 Hrs</h4>

                        <p>Trabalhamos 24 horas por dia, com nossos serviços a seu dispor para que seu empreendimento não fique parado.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-012-cocktail"></i>
                        <h4>Serviço Garantido</h4>
                        <p>Melhor prestação de serviço com eficiência. Quando solicitada, oferemos 90 dias de garantia após a execução do serviço.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Home Room Section Begin -->
    <section class="hp-room-section">
        <div class="container-fluid">
            <div class="hp-room-items">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="{{asset('img/service/eletrica.jpg')}}">
                            <div class="hr-text">
                                <h3>Instalações Elétricas</h3>
                               <!-- <h2>159$<span>/Pernight</span></h2>-->
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Tipo:</td>
                                            <td>Elétrica</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Capacitação:</td>
                                            <td>Profissional</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Grau de risco:</td>
                                            <td>3 (três)</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Serviços:</td>
                                            <td>Instalação, Manutenção, remoção,...</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="#" class="primary-btn">More Details</a>
                            </div>
                        </div>
                    </div>
                   <!-- <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="img/service/eletrica.jpg">
                            <div class="hr-text">
                                <h3>Instalações Elétricas</h3>
                                <h2>199$<span>/Pernight</span></h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Tipo:</td>
                                            <td>Elétrica</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Capacitação:</td>
                                            <td>Profissonal</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Grau de risco:</td>
                                            <td>3 (três)</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Serviços:</td>
                                            <td>instalação, Reparo, Remoção,...</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="#" class="primary-btn">More Details</a>
                            </div>
                        </div>
                    </div>-->
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="{{asset('img/service/hidraulica.jpg')}}">
                            <div class="hr-text">
                                <h3>Reparos Hidráulicos</h3>
                               <!-- <h2>159$<span>/Pernight</span></h2>-->
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Tipo:</td>
                                            <td>Hidraulica</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Capacitação:</td>
                                            <td>Profissional</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Grau de risco:</td>
                                            <td>3 (três)</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Serviços:</td>
                                            <td>Manutenção, instalação, remoção,...</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="#" class="primary-btn">More Details</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="{{asset('img/service/pintura.jpg')}}">
                            <div class="hr-text">
                                <h3>Pinturas em Geral</h3>
                               <!-- <h2>159$<span>/Pernight</span></h2>-->
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Tipo:</td>
                                            <td>Pintura</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Capacitação:</td>
                                            <td>Profissional</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Grau de risco:</td>
                                            <td>3 (três)</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Serviços:</td>
                                            <td>Manutenção, execução, remoção,...</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="#" class="primary-btn">More Details</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="{{asset('img/service/dedez.jpg')}}">
                            <div class="hr-text">
                                <h3>Dedetização</h3>
                              <!--  <h2>299$<span>/Pernight</span></h2> -->
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Tipo:</td>
                                            <td>Dedetização</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Capacitação:</td>
                                            <td>Profissional</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Grau de risco:</td>
                                            <td>3 (três)</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Serviços:</td>
                                            <td>Remoção e Controle de Pragas, prevenção,...</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="#" class="primary-btn">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Room Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Recomendações</span>
                        <h2>O que dizem os clientes?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="testimonial-slider owl-carousel">
                        <div class="ts-item">
                            <p>Empresa que busca pela melhor forma de atender seus clientes, 
                            fornecendo todo o suporte pré e pós serviços. Sem contar com o profissionalismo e segurança que seus funcionários passam para os clientes.</p>
                            <div class="ti-author">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <h5> - Sandra Regina Serra</h5>
                            </div>
                            <img src="{{asset('img/logo.png')}}" alt="">
                        </div>
                        <div class="ts-item">
                            <p>Após a execução de dedetização em minha residência, obtive por meio da empresa as recomendações dos cuidados a serem tomados com crianças, animais e idosos para que não haja nenhuma prejudicação na saúde dos mesmo, isso fez perceber o zelo que a empresa tem com seus clientes.</p>
                            <div class="ti-author">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <h5> - Vanilda Inajosa</h5>
                            </div>
                            <img src="{{asset('img/logo.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Blog Section Begin -->
   
    <!-- Blog Section End -->
@extends('layouts.footer')
@section('rodape')
@endsection

   
</body>

</html>