<?php

namespace App\Traits;

use App\Mail\Mailer;
use Illuminate\Support\Facades\Mail;

trait EmailTrait{

    public function sendMail($data)  // data must contain [subject , from , view, to]
    {
        Mail::to($data['to'])->send(new Mailer($data));
    }

}