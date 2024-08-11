<?php

namespace App\Http\Controllers;

use App\Mail\RegistrationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function RegisterSuccessMail()
    {
        $to = "";
        $msg = "";
        $subject = "";
        Mail::to($to)->send(new RegistrationMail($msg, $subject));
    }
}
