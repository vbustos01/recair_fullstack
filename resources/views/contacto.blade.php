@extends('layouts.app')

@section('content')

	<hr class="my-5">

    <section>
        <div class="row">
            <div class="col-md-6 mb-4 text-center">
                <h2 class="text-center">Formulario de contacto:</h2>
                <hr>
                <p>Mediante este formulario te pondras en contacto con nosotros inmediatamente, deja tu numero de telefono y se descriptivo con lo 
                que deseas cotizar, de esa forma te podremos ayudar de manera más agil.</p>
                <hr>
                <h3>Encuentranos en Whatsapp</h3>
                <a href="https://api.whatsapp.com/send?phone=123456789&text=caca">
                    <div class="btn btn-success text-center">
                        <i class="fab fa-whatsapp"> Whatsapp </i>
                    </div>
                </a>

            </div>

            {{-- formulario de contacto --}}
            <div class="col-md-6 mb-4">
                <form action="{{route('send')}}" method="post">
                    {{csrf_field()}}
                    <div class="card border-primary rounded-0">
                        <div class="card-header p-0">
                            <div class="bg-info text-white text-center py-2">
                                <h3><i class="fa fa-envelope"></i> Contactanos</h3>
                                <p class="m-0">Con gusto te ayudaremos</p>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                    </div>
                                    <input type="text" class="form-control" name="nombre" placeholder="Nombre y Apellido" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-phone text-info"></i></div>
                                    </div>
                                    <input type="tel" class="form-control" name="numero" placeholder="+56912345678 (todo junto)" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                    </div>
                                    <input type="email" class="form-control" name="email" placeholder="ejemplo@gmail.com" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                    </div>
                                    <textarea name="mensaje" class="form-control" placeholder="Envianos tu Mensaje" required></textarea>
                                </div>
                            </div>
                            <div class="text-center">
                                <input type="submit" value="Enviar" class="btn btn-info btn-block rounded-0 py-2">
                            </div>
                        </div>
                    </div>
                </form>
            </div>



        </div>
    </section>

  <section class="mt-5 wow fadeIn">

          <div class="row">
              <img src="{{asset('img/reca.jpg')}}" class="img-fluid z-depth-1-half"
                alt="Recair">
          </div>

          <hr>

        <div class="row">
            <div class="col-md-6 mb-4">
              <h3 class="h3 mb-3">Visita nuestras oficinas</h3>
              <hr>
              <p>Tenemos oficinas en angol donde te podremos ayudar con tu proyecto, o si necesitas ayuda tecnica no dudes en visitarnos en <strong>Rancagua, esquina los Maquis</strong></p>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://www.google.com/maps/embed?pb=!4v1582050944887!6m8!1m7!1s5YM6o3xt9cvIiVKuY_JgMQ!2m2!1d-37.80469546633981!2d-72.69496416341909!3f70.86991!4f0!5f0.7820865974627469" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>

  </section>


@endsection