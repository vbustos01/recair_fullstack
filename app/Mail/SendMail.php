<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\request;

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
        return $this->view('mail',
        [
            'msg'=>$req->mensaje,
            'num'=>$req->numero,
            'email'=>$req->email,
            'name'=>$req->nombre
        ])->to('v.bustos01@ufromail.cl');
    }
}
