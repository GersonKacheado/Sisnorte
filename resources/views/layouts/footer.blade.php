<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Sona Template">
        <meta name="keywords" content="Sona, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
     <!-- Footer Section Begin -->
     <footer class="footer-section" id="contato">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ft-about">
                            <div class="logo">
                                <a href="#">
                                    <img src="{{asset('img/footer-logo.png')}}" alt="">
                                </a>
                            </div>
                            <p>Sistema Integrado de Serviços - SisNorte<br /> Entre em contato e saiba quem somos e o fazemos.</p>
                            <div class="fa-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-contact">
                            <h6>Contato</h6>
                            <ul>
                                <li>(96) 98128 9197</li>
                                <li>(96) 99171 3026</li>
                                <li>norte_dedetizacao@hotmail.com</li>
                                <li>Av: Dom José Maritano 370 c, zerão, Macapá-AP, Brasil</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-newslatter">
                            <h6>New latest</h6>
                            <p>Get the latest updates and offers.</p>
                            <form action="#" class="fn-form">
                                <input type="text" placeholder="Email">
                                <button type="submit"><i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul>
                        <li><a href="{{route('index')}}">Início</a></li>
                            <li><a href="#servicos">Serviços</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Environmental Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="co-text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script> 
    @yield('rodape')
</body>
</html>