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
        <div class="jumbotron">
          <h3 class="display-4">Nuestro compromiso es con nuestros clientes</h3>

          <div class="row">
            <div class="col-6">
              <hr>
              <p>En Recair nuestro equipo cuenta con experiencia y conocimiento en el area suficientes para innovar y ofrecer soluciones
               ecoamigables con el fin de cuidar nuestro medio ambiente, tenemos una politica de trabajo orientada al cliente.</p>
            </div>

            <div class="col-6">
              <img src="{{asset('img/familia.jpg')}}">
            </div>
          </div>
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