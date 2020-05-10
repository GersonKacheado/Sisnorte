<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Sona Template">
        <meta name="keywords" content="Sona, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sistema Integrado de Serviços - SisNorte</title>
    
        <!-- Google Font -->
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
            <i class="icon_search"></i>
        </div>
        <div class="header-configure-area">
            <div class="language-option">
                                <img src="{{asset('img/config.png')}}" alt="">
                                <span><i class="fa fa-arrow-circle-down" aria-hidden="true"></i><!--<i class="fa fa-angle-down"></i>--></span>
                                <div  class="flag-dropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('sair') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                </div>
            </div>
            <a href="#" class="bk-btn">Painel Administrativo</a>
        </div>
        <nav class="mainmenu mobile-menu">
            <ul>
                <li class="active"><a href="{{route('index')}}">Início</a></li>

                <li><a href="{{route('solicito.index')}}">Pedidos</a>
                <ul class="dropdown">
                        <li><a href="{{route('solicito.create')}}">Novo</a></li>
                    </ul>
                </li>
            <li><a href="{{route('user.index')}}">Clientes</a>
            <ul class="dropdown">
                       <li><a href="{{route('user.create')}}">Novo</a></li>
                    </ul>
            </li>
                <li><a href="{{route('funcionario.index')}}">Funcionarios</a>
                <ul class="dropdown">
                       <li><a href="{{route('funcionario.create')}}">Novo</a></li>
                    </ul>
                </li>
                <li><a href="{{route('empresa.index')}}">Empresa</a>                                       
                </li>
                <li><a href="./contact.html">Contact</a></li>
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
            <li><i class="fa fa-phone"></i>(96) 99171 3026</li>
            <li><i class="fa fa-envelope"></i>sisnorte.ap@gmail.com</li>
        </ul>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="top-nav">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4">
                        <div class="tn-right">

                        <a href="{{ route('admin.dashboard') }}" 
                        class="bk-btn">Administração SisNorte</a>

                      <!--  <ul class="tn-left">
                            <li><i class="fa fa-envelope"></i> exemplo@gmail.com</li>
                        </ul> -->
                    </div>
                    </div>


                    <div class="col-lg-8">
                        <div class="tn-right">
                            <div class="top-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        <a href="{{ route('admin.dashboard') }}" class="bk-btn">Painel Administrativo</a>
                            <div class="language-option">
                                <img src="{{asset('img/config.png')}}" alt="">
                                <span><i class="fa fa-arrow-circle-down" aria-hidden="true"></i><!--<i class="fa fa-angle-down"></i>--></span>
                                <div  class="flag-dropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('sair') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    <!--<ul>
                                        <li><a href="#">Zi</a></li>
                                        <li><a href="#">Fr</a></li>
                                    </ul>-->
                                </div>
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
                                <img src="{{asset('img/logo.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li class="active"><a href="{{route('index')}}">Início</a></li>

                                    <li><a href="{{route('solicito.index')}}">Pedidos</a>
                                    <ul class="dropdown">
                                            <li><a href="{{route('solicito.create')}}">Novo</a></li>
                                        </ul>
                                    </li>
                                <li><a href="{{route('user.index')}}">Clientes</a>
                                <ul class="dropdown">
                                           <li><a href="{{route('user.create')}}">Novo</a></li>
                                        </ul>
                                </li>
                                    <li><a href="{{route('funcionario.index')}}">Funcionarios</a>
                                    <ul class="dropdown">
                                           <li><a href="{{route('funcionario.create')}}">Novo</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('empresa.index')}}">Empresa</a>                                       
                                    </li>
                                    <li><a href="./contact.html">Contact</a></li>
                                </ul>
                            </nav>
                            <div class="nav-right search-switch">
                                <i class="icon_search"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                  
                    <div class="booking-form">
                        <h3>Bem Vindo</h3>
                        <form method="POST" action="{{ route('admin.login.submit') }}">
                            @csrf
                            <div class="check-date">
                                <label for="email" class="label">Email:</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                             
                            </div>
                            <div class="check-date">
                                <label for="Senha" class="label">Senha:</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>

                     

    
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-2">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Entrar') }}
                                    </button>
    
                                   
                                </div>
                            </div>
                         
                        </form>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-7 offset-xl-2 offset-lg-1">
                    <div class="hero-text">
                       <!-- <h1>Sona Service</h1>
                        <p>Her are the best hotel booking sites, including recommendations for international
                            travel and for finding low-priced hotel rooms.</p>
                        <a href="#" class="primary-btn">Discover Now</a>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="{{asset('img/hero/hero-2.jpg')}}"></div>
            {{-- <div class="hs-item set-bg" data-setbg="{{asset('img/hero/hero-1.jpg')}}"></div>
            <div class="hs-item set-bg" data-setbg="{{asset('img/hero/hero-1.jpg')}}"></div> --}}
        </div>
    </section>






 @extends('layouts.footer')      
    </body>
</html>




{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Logi Administrador</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.login.submit') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
--}}