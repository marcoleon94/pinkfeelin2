<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- Styles -->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">-->
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link rel=stylesheet href="/css/materialize.css">
  	<link rel=stylesheet href="/css/main.css">
    <link rel="stylesheet" href="/css/objfon.css">
    <style>
    body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

  main {
    flex: 1 0 auto;
  }
    </style>

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
           <a href="/index" class="left brand-logo strong"><img class="responsive-img" src="/images/Lips.png" width="70" height="70"> Pink Feelin'</a>
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
    <div class="modal" id="modal2">
    <div class="modal-content">
    <div>
    	<div class="center">
               		<div class="row">
              			<div class="col s2">
                  			<i class="material-icons medium" style="color:#f48fb1;">perm_identity</i>
              			</div>
              			<div class="col s10 left-align" style="margin-top:15px; color:#f48fb1;">
                			<h4>Carrito</h4>
              			</div>
            		</div>
                    <div>
                        <h3>En construcción</h3>
                    </div>

    	</div>
    </div>
    </div>
    </div>
    <main>
    @yield('content')

  </main>
    <footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Pink Feelin'</h5>
            <p class="grey-text text-lighten-4"> Atuendos, accesorios y productos de belleza para dama en un solo lugar y a un súper precio... </p>
          </div>
          <div class="col l4 offset-l2 s12">
            <div class="row" > <br>
                                             <a href="https://www.facebook.com/PinkFeelin/"><img class="responsive-img" src="/images/facebook.png" height="15%" width="15%"></a>
                                             <a href="https://plus.google.com/"><img class="responsive-img" src="/images/googleplus.png" height="15%" width="15%"></a>
                                             <a href="https://es.pinterest.com/"><img class="responsive-img" src="/images/pinterest.png" height="15%" width="15%"></a>
                                             <a href="https://www.tumblr.com/"><img class="responsive-img" src="/images/tumblr.png" height="15%" width="15%"></a>
                                             <a href="https://twitter.com/"><img class="responsive-img" src="/images/twitter.png" height="15%" width="15%"></a>
                                        </div>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container center">
          © 2016 Pink Feelin'

        </div>
      </div>
    </footer>
    <!-- JavaScripts -->
    <!--script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script-->
    <!--script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script-->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/materialize.min.js"></script>
    <script src="/js/ui.datepicker-es.js"></script>
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
            autoplay()
            function autoplay() {
            $('#favoritos').carousel('next');
            setTimeout(autoplay, 4000);
            }
            $('.slider').slider({
                interval:10000,
                height: 700

            });
            $('select').material_select();
            $('.datepicker').pickadate({
              firstDay: true
            });

            $('#bot1').click(function(){
              $('#sec2').click();
            })

            $('#bot2').click(function(){
              $('#sec3').click();
            })

            $('#credito').click(function(){
              $('#credito').addClass('selec');
              $('#credito').removeClass('noselec');
              $('#paypal').addClass('noselec');
              $('#paypal').removeClass('selec');
              $('#oxxo').addClass('noselec');
              $('#oxxo').removeClass('selec');
              $('#dcred').show();
              $('#dpay').hide();
              $('#dox').hide();
            })

            $('#paypal').click(function(){
              $('#paypal').addClass('selec');
              $('#paypal').removeClass('noselec');
              $('#credito').addClass('noselec');
              $('#credito').removeClass('selec');
              $('#oxxo').addClass('noselec');
              $('#oxxo').removeClass('selec');
              $('#dcred').hide();
              $('#dpay').show();
              $('#dox').hide();
            })

            $('#oxxo').click(function(){
              $('#oxxo').addClass('selec');
              $('#oxxo').removeClass('noselec');
              $('#paypal').addClass('noselec');
              $('#paypal').removeClass('selec');
              $('#credito').addClass('noselec');
              $('#credito').removeClass('selec');
              $('#dcred').hide();
              $('#dpay').hide();
              $('#dox').show();
            })
        });

    </script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
