<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App;
use Auth;


class PagesController extends Controller
{

	public function inicio(){
		return view('inicio');
	}

    public function about(){
    	return view('about');
    }

    public function servicios(){
    	return view('servicios');
    }

}
