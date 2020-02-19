@extends('layouts.app2')

@section('content')

{{-- ################################## tablas ######################################## --}}
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <!--Card-->
          <div class="card">

			<div class="card-header"> Mis Herramientas </div>
            <div class="card-body">

              <!-- Tabla  -->
		          <table class="table table-hover">
		            <!-- Table head -->
		            <thead class="blue-grey lighten-4">
		              <tr>
		                <th>nombre</th>
		                <th>Codigo</th>
		                <th>Portador</th>
		                <th>descripcion</th>
		              </tr>
		            </thead>
		            <!-- Table head -->

		            <!-- Table body -->
		            <tbody>
			            @foreach($herramienta as $item)
			            	<tr>
			            		<th scope="row">{{$item->nombre}}</th>
			            		<td>{{$item->id}}</td>
			            		<td>{{$item->portador}}</td>
			            		<td><button type="button" class="btn btn-info">ver ficha</button></td>
			            	</tr>

			            @endforeach
		            </tbody>
		            <!-- Table body -->
		          </table>
              <!-- Tabla  -->

            </div>

          </div>
          <!--/.Card-->

        </div>


		{{-- SEGUNDA COLUMNA --}}

        <div class="col-md-6 mb-4">

          <!--Card-->
          <div class="card">
			<div class="card-header"> Mis cajas de herramientas </div>
            <div class="card-body">

		<!-- Tabla 2  -->
		<table class="table table-hover">
			<thead class="blue lighten-4">
				<tr>
				<th>#</th>
				<th>Lorem</th>
				<th>Ipsum</th>
				<th>Dolor</th>
				</tr>
			</thead>

			<tbody>
				<tr>
				<th scope="row">1</th>
				<td>Cell 1</td>
				<td>Cell 2</td>
				<td>Cell 3</td>
				</tr>
				<tr>
				<th scope="row">2</th>
				<td>Cell 4</td>
				<td>Cell 5</td>
				<td>Cell 6</td>
				</tr>
				<tr>
				<th scope="row">3</th>
				<td>Cell 7</td>
				<td>Cell 8</td>
				<td>Cell 9</td>
				</tr>
				</tbody>
				<!-- Table body -->
		</table>

            </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

      </div>
{{-- ###################################### fin tablas ################################################## --}}
@endsection