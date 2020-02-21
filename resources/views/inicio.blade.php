@extends('layouts.app')

@section('content')

	<hr class="my-5">
  	<!--INICIO-->
	<section class="mt-5 wow fadeIn">

	        <!--Grid row-->
	        <div class="row">

	          <!--Grid column-->
	          <div class="col-md-6 mb-4">

	            <img src="{{asset('img/logo.jpg')}}" class="img-fluid z-depth-1-half"
	              alt="Recair">

	          </div>
	          <!--Grid column-->

	          <!--Grid column-->
	          <div class="col-md-6 mb-4">
	            <h3 class="h3 mb-3">En recair conocemos la mejor solucion para climatizar tu hogar y tu negocio.</h3>
	            <hr>
	            <p>Nuestro equipo esta conformado por Ingenieros y tecnicos especializados en el area de la refrigeración y calefacción, ademas contamos con 
	            años de experiencia en el rubro, por lo cual somos una opción seria para cumplir tus requerimientos.</p>
	            <a  href="{{route('contacto')}}" class="btn btn-grey btn-md">Contactanos</a>
	            <a  href="{{route('servicios')}}" class="btn btn-grey btn-md">Nuestros servicios</a>

	          </div>
	          <!--Grid column-->

	        </div>
	        <!--Grid row-->
	</section>
  	<!--INICIO-->	

	<hr class="my-5">

	<!--Servicios principales-->
	<section>
	        <h3 class="h3 text-center mb-5 text">La Climatización es lo nuestro</h3>

	        <div class="row wow fadeIn">

	          <div class="col-lg-6 col-md-12 px-4">

	            <div class="row">
	              <div class="col-1 mr-3">
	                <i class="fas fa-snowflake fa-2x indigo-text"></i>
	              </div>
	              <div class="col-10">
	                <h5 class="feature-title">Refrigeración</h5>
	                <p class="grey-text">El calor no es un problema, contamos con diversos equipos que pueden disminuir la temperatura ya sea de 
	                una habitación o de una cámara preservante de alimentos, ademas realizamos reparación y mantención de dichos equipos.</p>
	              </div>
	            </div>

	            <div style="height:30px"></div>

	            <div class="row">
	              <div class="col-1 mr-3">
	                <i class="fas fa-fire fa-2x blue-text"></i>
	              </div>
	              <div class="col-10">
	                <h5 class="feature-title">Calefacción</h5>
	                <p class="grey-text">Preparate para el invierno junto a nosotros, trabajamos con sistemas de calefacción central, estufas
	                a pellet y una diversidad de equipos eléctricos, no pases más frío con Recair.</p>
	              </div>
	            </div>

	            <div style="height:30px"></div>
	            <div class="row">
	              <div class="col-1 mr-3">
	                <i class="fas fa-cog fa-2x cyan-text"></i>
	              </div>
	              <div class="col-10">
	                <h5 class="feature-title">Soluciones e Ingeniería</h5>
	                <p class="grey-text">Aca en Recair ofrecemos soluciones integrales con el fin de satisfacer los requirimientos
	                funcionales de nuestros clientes.</p>
	              </div>
	            </div>

	          </div>

	          <div class="col-lg-6 col-md-12">

	            <p class="h5 text-center mb-4">¡Encuentranos en nuestras oficinas!</p>
	            <p class="text-center">nuestro personal te atendera con mucho gusto</p>
	            <div class="embed-responsive embed-responsive-16by9">
					<iframe src="https://www.google.com/maps/embed?pb=!4v1582050944887!6m8!1m7!1s5YM6o3xt9cvIiVKuY_JgMQ!2m2!1d-37.80469546633981!2d-72.69496416341909!3f70.86991!4f0!5f0.7820865974627469" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
	            </div>
	          </div>

	        </div>
	        <!--/Grid row-->
	</section>
	<!--Servicios principales-->

@endsection