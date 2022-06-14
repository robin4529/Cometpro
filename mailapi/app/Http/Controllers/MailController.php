<?php

namespace App\Http\Controllers;

use App\Mail\ThankyouMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function regis($name, $email)
    {
    Mail::to($email)->send(new ThankyouMail());
    }
}
