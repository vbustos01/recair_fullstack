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
    <hr class="mb-5">

    <!--Pagination-->
    <nav class="d-flex justify-content-center wow fadeIn">
      <ul class="pagination pg-blue">

        <!--Arrow left-->
        <li class="page-item disabled">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>

        <li class="page-item active">
          <a class="page-link" href="#">1
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">4</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">5</a>
        </li>

        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>
    </nav>
    <!--Pagination-->

</section>



<!--Grid row-->
{{-- GRAFICOS --}}
<div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-9 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card content-->
            <div class="card-body">
              <h1>Proyectos este año</h1>
              <canvas id="myChart"></canvas>

            </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 mb-4">

          <!--Card-->
          <div class="card mb-4">

            <!-- Card header -->
            <div class="card-header text-center">
              <h4>Ventas anuales</h4>
            </div>

            <!--Card content-->
            <div class="card-body">

              <canvas id="pieChart"></canvas>

            </div>

          </div>
          <!--/.Card-->

          <!--Card-->
          <div class="card mb-4">

            <div class="card-header">
              <h4>Este mes</h4>
            </div>

            <!--Card content-->
            <div class="card-body">

              <!-- List group links -->
              <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action waves-effect">Sales
                  <span class="badge badge-success badge-pill pull-right">22%
                    <i class="fas fa-arrow-up ml-1"></i>
                  </span>
                </a>
                <a class="list-group-item list-group-item-action waves-effect">Traffic
                  <span class="badge badge-danger badge-pill pull-right">5%
                    <i class="fas fa-arrow-down ml-1"></i>
                  </span>
                </a>
                <a class="list-group-item list-group-item-action waves-effect">Orders
                  <span class="badge badge-primary badge-pill pull-right">14</span>
                </a>
                <a class="list-group-item list-group-item-action waves-effect">Issues
                  <span class="badge badge-primary badge-pill pull-right">123</span>
                </a>
                <a class="list-group-item list-group-item-action waves-effect">Messages
                  <span class="badge badge-primary badge-pill pull-right">8</span>
                </a>
              </div>
              <!-- List group links -->

            </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->
</div>


<!-- Modal -->
<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="miModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="miModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection
