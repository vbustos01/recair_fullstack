@extends('layouts.app')

@section('content')

    <hr class="my-5">

      <section class="card aqua-gradient wow fadeIn" id="intro">
        <div class="card-body text-white text-center py-5 px-5 my-5">
          <h1 class="mb-4"><strong>Nuestra Misión</strong></h1>
          <p class="mb-4"><strong>
            ...
          </strong></p>
        </div>
      </section>

      <hr>

      <section class="card deep-blue-gradient wow fadeIn" id="intro">
        <div class="card-body text-white text-center py-5 px-5 my-5">
          <h1 class="mb-4"><strong>Nuestra Visión</strong></h1>
          <p class="mb-4"><strong>
            ...
          </strong></p>
        </div>
      </section>

      <hr>

      <section>
          <div class="row">

            <!--Grid column-->
            <div class="col-md-6 mb-4">

              <img src="{{asset('img/familia.jpg')}}" class="img-fluid z-depth-1-half"
                alt="Recair">

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6 mb-4">
              <h3 class="h3 mb-3">Nuestro compromiso es con nuestros clientes</h3>
              <hr>
              <p>En Recair nuestro equipo cuenta con experiencia y conocimiento en el area suficientes para innovar y ofrecer soluciones
               ecoamigables con el fin de cuidar nuestro medio ambiente, tenemos una politica de trabajo orientada al cliente.</p>

            </div>
            <!--Grid column-->

          </div>      
      </section>



      <hr>

      <section class="card blue-gradient wow fadeIn" id="intro">
        <div class="card-body text-white text-center py-5 px-5 my-5">
          <h1 class="mb-4"><strong>Llevamos años en la industria</strong></h1>
          <p><strong>contamos con una amplia experiencia, no dudes en contactarnos</strong></p>
          <p class="mb-4"><strong>
            Nuestra casa matriz se encuentra en la ciudad de angol, ademas realizamos trabajos en regiones, nuestro equipo siempre estara feliz de 
            ayudar a los clientes con sus requirimientos.
          </strong></p>
        </div>
      </section>




@endsection