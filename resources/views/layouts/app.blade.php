<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{-- Fuentes --}}
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
    <style type="text/css" href="{{asset('css/style.css')}}"></style>
    <style type="text/css">
        html,
        body,
        header,
        .carousel {
          height: 60vh;
        }

        @media (max-width: 740px) {

          html,
          body,
          header,
          .carousel {
            height: 100vh;
          }
        }

        @media (min-width: 800px) and (max-width: 850px) {

          html,
          body,
          header,
          .carousel {
            height: 100vh;
          }
        }

        @media (min-width: 800px) and (max-width: 850px) {
          .navbar:not(.top-nav-collapse) {
            background: #929FBA !important;
          }
        }
    </style>
</head>


<body>

    <header>
      <!-- BARRA DE NAVEGACION -->
      <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm ">
          <div class="container">
              <a class="navbar-brand" href="{{ Route('inicio') }}">
                  {{ config('app.name', 'Laravel') }}
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <!-- Left Side Of Navbar -->
                  <ul class="navbar-nav mr-auto">
                      <li class="nav-item ">
                          <a class="nav-link" href="{{ Route('inicio') }}">Inicio <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{ Route('servicios') }}">Nuestros servicios</a>
                      </li>
                      <!-- BOTON COLAPSABLE -->
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href=" " id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Sobre nosotros
                          </a>

                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ Route('contacto') }}">Contacto</a>
                          <a class="dropdown-item" href=" {{ Route('acerca') }}">Quienes somos</a>
                          </div>
                      </li>
                  </ul>

                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ml-auto">
                      <!-- Authentication Links -->
                      @guest
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>
                          </li>
                      @else
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }} <span class="caret"></span>
                              </a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('home') }}">Dashboard</a>
                                  <a class="dropdown-item" href="{{route('inventario')}}">Inventario</a>
                                  <a class="dropdown-item" href="{{route('agregar')}}">Agregar al Inventario</a>
                                  <a class="dropdown-item" href="{{route('entrada')}}">Entradas</a>
                                  <a class="dropdown-item" href="{{route('salida')}}">Salidas</a>
                                  <a class="dropdown-item" href="{{route('proyectos')}}">Proyectos</a>
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                              </div>
                          </li>


                      @endguest
                  </ul>
              </div>
          </div>
      </nav>  
      {{-- carousel --}}
      <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

        <!--Indicators-->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-1z" data-slide-to="1"></li>
          <li data-target="#carousel-example-1z" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

          <!--Primer slide-->
          <div class="carousel-item active">
            <div class="view" style="background-image: url('/img/home.jpg'); background-repeat: no-repeat; background-size: cover;">

              <!-- Mask & flexbox options-->
              <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

                <!-- Content -->
                <div class="text-center white-text mx-5 wow fadeIn">
                  <h1 class="mb-4">
                    <strong>Refrigeracion y calefaccion Domiciliaria</strong>
                  </h1>
                  <p>
                    <strong>En Recair tenemos la mejor solucion para tu vivienda, olvidate de los inviernos frios o de los veranos calurosos.</strong>
                  </p>
                  <p class="mb-4 d-none d-md-block">
                    <strong>Te ayudamos a encontrar una solucion</strong>
                  </p>
                  <a href="{{route('contacto')}}" class="btn btn-outline-white btn-lg">Cotiza sin compromiso</a>
                </div>
                <!-- Content -->

              </div>
              <!-- Mask & flexbox options-->

            </div>
          </div>
          <!--/primer slide-->

          <!--segundo slide-->
          <div class="carousel-item">
            <div class="view" style="background-image: url('/img/industry.jpg'); background-repeat: no-repeat; background-size: cover;">

              <!-- Mask & flexbox options-->
              <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

                <!-- Content -->
                <div class="text-center white-text mx-5 wow fadeIn">
                  <h1 class="mb-4">
                    <strong>Refrigeracion Industrial</strong>
                  </h1>

                  <p>
                    <strong>Nuestros expertos conocen bien los requerimientos de la industria</strong>
                  </p>

                  <p class="mb-4 d-none d-md-block">
                    <strong></strong>
                  </p>

                  <a href="{{route('contacto')}}" class="btn btn-outline-white btn-lg">Cotiza sin compromiso</a>
                </div>
                <!-- Content -->

              </div>
              <!-- Mask & flexbox options-->

            </div>
          </div>
          <!--/segundo slide-->

          <!--tercer slide-->
          <div class="carousel-item">
            <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/47.jpg'); background-repeat: no-repeat; background-size: cover;">

              <!-- Mask & flexbox options-->
              <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

                <!-- Content -->
                <div class="text-center white-text mx-5 wow fadeIn">
                  <h1 class="mb-4">
                    <strong>Realiza tu proyecto con nosotros</strong>
                  </h1>

                  <p>
                    <strong>¡23°C todo el año!</strong>
                  </p>

                  <p class="mb-4 d-none d-md-block">
                    <strong>No importa si se trate de calefaccion o refrigeracion, nosotros tenemos la solucion que buscas</strong>
                  </p>

                  <a  href="{{route('contacto')}}" class="btn btn-outline-white btn-lg">Cotiza sin compromiso</a>
                </div>
                <!-- Content -->

              </div>
              <!-- Mask & flexbox options-->

            </div>
          </div>
          <!--/tercer slide-->

        </div>
        <!--/.Slides-->

        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
      </div>
    </header>


  <main class="pt-5 mx-lg-5">
            <div class="container">
                {{-- CUERPO DE LA PAGINA --}}
                <section>
                    <main>
                        @yield('content')
                    </main>
                </section>

            </div>              
  </main>






      <!--Footer-->
      <footer class="page-footer text-center font-small mt-4 wow fadeIn">

        <!--Call to action-->
        <div class="pt-4">
          <a class="btn btn-outline-white" href="{{ Route('contacto') }}"
            role="button">¡Contactanos ahora!
          </a>
        </div>
        <!--/.Call to action-->

        <hr class="my-4">

        <!-- Social icons -->
        <div class="pb-4">
          <a href="https://www.facebook.com/Recair-Ltda-1459653447582438/" target="_blank">
            <i class="fab fa-facebook-f mr-3">  Encuentranos en Facebook</i>
          </a>
        </div>
        <!-- Social icons -->

        <!--Copyright-->
        <div class="footer-copyright py-3">Recair 2020, Derechos reservados.</div>
        <!--/.Copyright-->
      </footer>
      <!--/.Footer-->



  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
           


</body>
</html>
