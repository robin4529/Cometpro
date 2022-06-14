<?php

namespace App\Http\Controllers\Doctor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class Doctorlogin extends Controller
{
    // Doctor  Loginout methoad
    public function doctorlogout(Request $request)
    {
       Auth::guard('doctor')->logout(); 
       return redirect('/login') ;   
}
}