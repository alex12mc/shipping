<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <title>TransUP</title>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #mapita {
        height: 500px;
      }
      /*.controls {
        margin-top: 10px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      }
      #autocomplete_place {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 300px;
      }

      #autocomplete_place:focus {
        border-color: #4d90fe;
      }*/


      .controls {
        margin-top: 10px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 80px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        display: none;
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 300px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      .pac-container {
        font-family: Roboto;
      }

      #type-selector {
        color: #fff;
        background-color: #4d90fe;
        padding: 5px 11px 0px 11px;
      }

      #type-selector label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }
    </style>
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <!--<meta name="description" content="Empresa con el mejor servicio de mensajería y paquetería nacional e internacional, TransUP.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="paqueteria y mensajería, delivery package, paquetería express, envío urgente, mensajeria">-->

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->

<!--<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTTUx8RUAvrofIV7AtfK368slOCikzhdc&callback=initMap">
    </script>-->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animations.css')}}">
    <link rel="stylesheet" href="{{asset('css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}" class="color-switcher-link">
    <script src="{{asset('js/vendor/modernizr-2.6.2.min.js')}}"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link href="{{asset('css/material-kit.css')}}" rel="stylesheet"/>
    <script src="{{asset('js/material.min.js')}}"></script>
    <script src="{{asset('js/material-kit.js')}}" type="text/javascript"></script>
    <script>
        /*var reCaptchaCallback = function() {
            grecaptcha.render('g-recaptcha', {
                'sitekey' : '6Le99DYUAAAAADvzG8n9wWeCDByMVeLSVaOGmamZ'
            });
        };*/
    </script>
    <!--[if lt IE 9]>
        <script src="js/vendor/html5shiv.min.js"></script>
        <script src="js/vendor/respond.min.js"></script>
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <![endif]-->

</head>

<body class="@yield('body-class')">
    <!--[if lt IE 9]>
        <div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
    <![endif]-->

    <div class="preloader">
        <div class="preloader_image"></div>
    </div>


    
    

    <!-- Unyson messages modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
        <div class="fw-messages-wrap ls with_padding">
            <!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
            <!--
        <ul class="list-unstyled">
            <li>Message To User</li>
        </ul>
        -->

        </div>
    </div>
    <!-- eof .modal -->

    <!-- wrappers for visual page editor and boxed version of template -->
    <div id="canvas">
        <div id="box_wrapper">

            <!-- template sections -->

            <section class="page_topline with_search ls ms table_section toppadding_10 bottompadding_10 ds ms">
                <div class="container">
                    <div class="row">
                    
                <div class="col-sm-6 col-xs-12 text-center text-sm-left">
                            <p class="divided-content darklinks grey">
                     <span>
                        <strong>Tels:</strong> +52 (045) 77 31 53 72 43
                     </span>
                     
                     <span>
                        <strong>Horarios:</strong> L-V: 7 a 6, S-D: 7 a 2 
                     </span>
                      </p>
                 </div>
                        
            
                           <div class="col-sm-6 col-xs-12 display_table_cell text-sm-right text-xs-center">
                                <div>
                                    <!--<a href="https://twitter.com/" target="_blank" title="Twitter" class="social-icon color-bg-icon rounded-icon soc-twitter"></a>-->
                                    <a href="https://www.facebook.com/TransUp-562577294142047/" target="_blank" title="Facebook" class="social-icon color-bg-icon rounded-icon soc-facebook"></a>
                                </div>
                            </div>
                                
                       

                    </div>
                </div>
            </section>
            
            
            
            
            
            
            
<!--Menu-->
            <header class="page_header header_white toggler_right">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 display_table">
                            <div class="header_left_logo display_table_cell">
                                <a href="/" class="logo top_logo">
                                    <img width="99" height="86" src="images/logo.png" alt="TransUP">
                                </a>
                            </div>

                            <div class="header_mainmenu display_table_cell text-right">
                                <!-- main nav start -->
                                <nav class="mainmenu_wrapper">
                                    <ul class="mainmenu nav sf-menu">
                                        <li class="active">
                                            <a href="/#box_wrapper">Inicio</a>
                                        </li>
                                        <li>
                                            <a href="/#valores">Nosotros</a>
                                        </li>
                                        <!--<li>
                                            <a href="#services">Servicios</a>
                                        </li>-->
                                        <li>
                                            <a href="/#cotizador">Cotizador</a>
                                        </li>
                                        <li>
                                            <a href="/#contacto">Contacto</a>
                                        </li>
                                        @if (Auth::guest())
                                            <li>
                                                <a href="{{ route('login') }}">Ingresar</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('register') }}">Registrar</a>
                                            </li>
                                        @else
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                                    {{ Auth::user()->name }} <span class="caret"></span>
                                                </a>

                                                <ul class="dropdown-menu" role="menu">
                                                    @if (auth()->user()->admin)
                                                    <li>
                                                        <a href="{{ url('/admin/products') }}">Gestionar Productos</a>
                                                    </li>
                                                    @endif
                                                    <li>
                                                        <a href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                                        document.getElementById('logout-form').submit();">
                                                            Cerrar Sesión
                                                        </a>

                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            {{ csrf_field() }}
                                                        </form>
                                                    </li>
                                                </ul>
                                            </li>
                                        @endif
                                    </ul>
                                </nav>
                                <!-- eof main nav -->
                                <!-- header toggler -->
                                <span class="toggle_menu">
                                    <span></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="wrapper">
                @yield('content')
            </div>

            <section class="ls page_copyright section_padding_15">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <p>&copy; Copyright 2018 <strong>TransUP</strong>. Todos los Derechos Reservados</p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <!-- eof #box_wrapper -->
    </div>
    <!-- eof #canvas -->

    <script src="{{asset('js/compressed.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>