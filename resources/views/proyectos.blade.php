@extends('layouts.app2')

@section('content')

<!--Section: Cards-->
<section class="pt-5">

    <!-- Heading & Description -->
    <div class="wow fadeIn">
      <!--Section heading-->
      <h2 class="h1 text-center mb-5">Proyectos</h2>
      <!--Section description-->
      <p class="text-center">En esta pagina podras revisar los proyectos y saber el estado en que se encuentran</p>
      <p class="text-center mb-5 pb-5"><strong>Tambien podras seleccionar los materiales y revisar si cuentas con stock.</strong></p>
    </div>
    <!-- Heading & Description -->
    {{-- ################################################################################################## --}}

    @foreach( $proyectos as $item)
      <!--Grid row-->
      <div class="row mt-3 wow fadeIn">

        <!--Grid column-->
        <div class="col-lg-5 col-xl-4 mb-4">
          <!--Featured image-->
          <div class="view overlay rounded z-depth-1">
            <img src="{{asset('img/proyecto.png')}}" class="img-fluid"
              alt="">
            <a href="https://mdbootstrap.com/education/tech-marketing/automated-app-introduction/" target="_blank">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
          <h3 class="mb-3 font-weight-bold dark-grey-text"><strong>{{$item->titulo}}</strong></h3>
          <h5>Cliente: {{$item->cliente}}</h5>
          <p class="grey-text">{{$item->descripcion}}</p>
          <a href="#" target="_blank" class="btn btn-primary btn-md" data-toggle="modal" data-target="#miModal">Revisar Ficha completa<i class="fas fa-play ml-2"></i></a>
        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      {{-- MODAL --}}
      <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="miModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="miModalLabel">Detalles del proyecto {{$item->titulo}}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            {{-- Cuerpo del Modal --}}
            <div class="modal-body">
              {{$item->descripcion}}
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>
    @endforeach()


    {{-- ####################################################################################################### --}}
    <hr>

    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeUkxj1OXVz62lFQDwagxnrUz0wqp6m1c2LoTfH_m5hO5kczw/viewform?embedded=true" width="100%" height="812" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>

@endsection
