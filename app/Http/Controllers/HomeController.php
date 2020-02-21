<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function herramientas(){
        $herramienta = App\Tool::all();
        return view('herramientas', compact('herramienta'));
    }

    public function proyectos(){
        $proyectos = App\Proyecto::all();
        return view('proyectos', compact('proyectos'));
    }

    public function inventario(){
        return view('inventario');
    }

    public function agregar(){
        return view('agregar');
    }

    public function entrada(){
        return view('entrada');
    }
    public function salida(){
        return view('salida');
    }    
}
