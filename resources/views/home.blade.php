@extends('layouts.app2')

@section('content')

@php
    $a = Auth::user()->name
@endphp

      <hr class="my-5">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if($a == 'vitocosmic' | $a == 'Admin')
                        <p>Bienvenido {{$a}}, esta es tu pagina personal de administracion.</p>
                        <a href="{{route('inventario')}}" class="btn btn-primary btn-lg" role="button">Inventario</a>
                        <a href="{{route('agregar')}}" class="btn btn-primary btn-lg" role="button">Agregar al inventario</a>
                        <a href="{{route('entrada')}}" class="btn btn-primary btn-lg" role="button">Agregar Entrada</a>
                        <a href="{{route('salida')}}" class="btn btn-primary btn-lg" role="button">Agregar Salida</a>
                        <a href="{{route('proyectos')}}" class="btn btn-primary btn-lg" role="button">Proyectos</a>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
