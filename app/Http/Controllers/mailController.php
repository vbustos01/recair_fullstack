<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendMail;

class mailController extends Controller
{
    public function send()
    {
    	Mail::send(new SendMail());
    }
    public function contacto(){
    	return view('contacto');
    }
}
