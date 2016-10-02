<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link rel=stylesheet href="css/materialize.css">
  	<link rel=stylesheet href="css/main.css">
    <link rel="stylesheet" href="css/objfon.css">

</head>
<body id="app-layout">
  <!-- Dropdown Structure -->
              <ul id="dropdown1" class="dropdown-content">
                <li><a href="/vestidos">Vestidos</a></li>
                <li><a href="/bolsas">Bolsas</a></li>
                <li><a href="/lentes">Lentes</a></li>
                <li><a href="/pdbelleza">Productos de Belleza</a></li>
              </ul>
              <ul id="UserMenu" class="dropdown-content" >
                  <li><a href="{{ url('/logout') }}"><i class="material-icons right">close</i>Logout</a></li>
              </ul>
  <!--<div class="navbar-fixed">-->
  <nav class="pink lighten-3">
      <div class="nav-wrapper">
           <a href="/index" class="left brand-logo strong"><img class="responsive-img" src="images/Lips.png" width="70" height="70"> Pink Feelin'</a>
          <a href="#" data-activates="nav-mobile" class="button-collapse right"><i class="material-icons">menu</i></a>
            <div class="row hide-on-med-and-down">
                <div class="col push-s3 ">
                  <ul class="right hide-on-med-and-down">
                          <li><a href="/index">Inicio</a></li>
                    <!-- Dropdown Trigger -->
                          <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Tienda<i class="material-icons right">arrow_drop_down</i></a></li>
                          <li><a href="/ofertas">Ofertas</a></li>
                          <li><a href="/contacto">Contactanos</a></li>
                          <li><a href="/atencion">Atención al Cliente</a></li>
                  </ul>
                </div>

              <div class="col push-s6">
                <!-- Right Side Of Navbar -->
                <ul class="right hide-on-med-and-down">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li>
                            <a href="#!" class="dropdown-button" data-activates="UserMenu">
                                {{ Auth::user()->name }} <i class="material-icons right">arrow_drop_down</i>
                            </a>
                        </li>
                        <li><a data-target="modal2" class="modal-trigger"><i class="material-icons right">shopping_cart</i></a></li>
                    @endif
                </ul>
              </div>
            </div>
            <ul class="side-nav" id="nav-mobile">
              <li><a href="/index">Inicio</a></li>
              <li class="no-padding">
                  <ul class="collapsible collapsible-accordion">
                    <li>
                      <a class="collapsible-header">Tienda<i class="material-icons">arrow_drop_down</i></a>
                      <div class="collapsible-body">
                        <ul id="dropdown2">
                        <li><a href="/vestidos">Vestidos</a></li>
                        <li><a href="/bolsas">Bolsas</a></li>
                        <li><a href="/lentes">Lentes</a></li>
                        <li><a href="/pdbelleza">Productos de Belleza</a></li>
                      </ul>
                      </div>
                    </li>
                  </ul>
              </li>
              <li><a href="/ofertas">Ofertas</a></li>
              <li><a href="/contacto">Contáctanos</a></li>
              <li><a href="/atencion">Atención al Cliente</a></li>
              <li><a href="login.php">Login</a></li>-->
            </ul>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script>
        $( document ).ready(function(){
            $(".dropdown-button").dropdown();
            $(".button-collapse").sideNav();
            $('.modal-trigger').leanModal();
            $('.carousel.carousel-slider').carousel({full_width: true});
            $('.carousel').carousel({
            dist:0,
            shift:0,
            padding:20,
            });
            $(".dropdown-button").dropdown();


        });

    </script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
