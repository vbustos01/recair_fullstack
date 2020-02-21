<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\request;
use Illuminate\Http\RedirectResponse;


class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(request $req)
    {


        \Mail::send('mail',
            array(
                'msg'=>$req->mensaje,
                'num'=>$req->numero,
                'email'=>$req->email,
                'name'=>$req->nombre
            ), function ($body) {
                $body->to('v.bustos01@ufromail.cl')->subject('Nuevo contacto de RECAIR.cl');
            });
        return redirect('/');
    }
}
