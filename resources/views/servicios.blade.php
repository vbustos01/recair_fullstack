@extends('layouts.app')

@section('content')
      <hr class="my-5">

      <section>

        <h2 class="my-5 h3 text-center">Siempre al servicio del cliente</h2>

        <!--First row-->
        <div class="row features-small mb-5 mt-3 wow fadeIn">

          <!--First column-->
          <div class="col-md-4">
            <!--First row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">Instalacion de aire acondicionado</h6>
                <p class="grey-text">Equipos con capacidad de enfriar o calefaccionar tu vivienda, nuestros equipos cuentan con la potencia necesaria para climatizar tu vivienda o negocio.
                </p>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/First row-->

            <!--Second row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">Camaras de Frio</h6>
                <p class="grey-text">Realizamos instalacion y mantencion de camaras de frio para tu negocio.
                </p>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/Second row-->

            <!--Third row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">A/C Automotriz</h6>
                <p class="grey-text">Tambien realizamos mantencion y recarga de equipos automotrices, no dudes en pasar a nuestra sucursal.</p>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/Third row-->

            <!--Fourth row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">Redes de Gas</h6>
                <p class="grey-text">En recair contamos con autorizacion de la SEC para redes de gas.</p>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/Fourth row-->
          </div>
          <!--/First column-->

          <!--Second column-->
          <div class="col-md-4 flex-center">
            <img src="{{ asset('img/clima.png') }}"
              class="z-depth-0 img-fluid">
          </div>
          <!--/Second column-->

          <!--Third column-->
          <div class="col-md-4 mt-2">
            <!--First row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">Calderas</h6>
                <p class="grey-text">Se realiza instalacion, mantencion y reparacion de calderas sin importar el tipo de combustible
                </p>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/First row-->

            <!--Second row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">Ingenieria y soluciones</h6>
                <p class="grey-text">Si no conoces bien que solucion se adapta a tu problema contamos con un equipo de ingenieros
                que podran asesorarte.</p>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/Second row-->

            <!--Third row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">Estufas a Pellet</h6>
                <p class="grey-text">Encuentra la solucion mas ecoamigable para calefaccionarte este verano.
                </p>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/Third row-->

            <!--Fourth row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">Proyectos personalizados</h6>
                <p class="grey-text">Puedes consultar por tu proyecto sin compromiso, nuestros tecnicos encontraran la solucion optima a tus problemas.</p>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/Fourth row-->
          </div>
          <!--/Third column-->

        </div>
        <!--/First row-->

      </section>


  <hr class="my-5">

  <section class="mt-5 wow fadeIn">

          <div class="row">
            <div class="col-md-6 mb-4">
              <img src="{{asset('img/comercial.jpg')}}" class="img-fluid z-depth-1-half"
                alt="Recair">
            </div>

            <div class="col-md-6 mb-4">
              <h3 class="h3 mb-3">Equipos de refrigeracion comercial</h3>
              <hr>
              <p>No pares de producir en ningun momento, los equipos de refrigeracion comercial estan fabricados para resistir un uso continuo, sin embargo
              requieren de una constante mantencion, contactanos si necesitas ayuda con alguno de estos equipos</p>
            </div>
          </div>

          <hr>

          <div class="row">
            <div class="col-md-6 mb-4">
              <h3 class="h3 mb-3">Mantencion y Recarga de A/C Automotriz</h3>
              <hr>
              <p>Si el Aire acondicionado de tu vehiculo no funciona de manera correcta no dudes en traer tu vehiculo a nuestro taller, contamos con 
              equipos de diagnostico y sistemas de recarga, ademas de una serie de refrigerantes para distintos modelos de vehiculo.</p>
            </div>

            <div class="col-md-6 mb-4">
              <img src="{{asset('img/autoAC.jpg')}}" class="img-fluid z-depth-1-half"
                alt="Recair">
            </div>
          </div>

          <hr>

          <div class="row">
            <div class="col-md-6 mb-4">
              <img src="{{asset('img/servers.jpg')}}" class="img-fluid z-depth-1-half"
                alt="Recair">
            </div>

            <div class="col-md-6 mb-4">
              <h3 class="h3 mb-3">Refrigeracion de sistemas informaticos</h3>
              <hr>
              <p>En Recair estamos a la vanguardia, por lo cual realizamos instalacion y mantencion de equipos de refrigeración en salas
              de servidores. Encuentra la solucion que necesitas para tu negocio. </p>
            </div>
          </div>

          <hr>

          <div class="row">
            <div class="col-md-6 mb-4">
              <h3 class="h3 mb-3">Enfriamiento para Computadoras</h3>
              <hr>
              <p>Si lo que te gusta es el alto performance, ya sea para PC's gamer o para Procesamiento avanzado, aca en recair podras alcanzar
              mayores velocidades de computo, realizamos asesorias tecnicas para tus proyectos.</p>
            </div>

            <div class="col-md-6 mb-4">
              <img src="{{asset('img/cpu_refri.jpg')}}" class="img-fluid z-depth-1-half"
                alt="Recair">
            </div>
          </div>
  </section>

@endsection