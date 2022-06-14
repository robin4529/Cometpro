<?php

namespace App\Http\Controllers\Patient;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Patient;



class PatientLogin extends Controller
{
    // pateint login form

   public function Pateintlogin(Request $request)
    {
      $this->validate($request,[
        'email' => 'required|email',
          'password' => 'required|min:5',
      ]);
        if(Auth::guard('patient')->attempt(['email'=>$request-> email ,'password' =>$request-> password]))
        {
            return redirect('/patient/dashboard');

        }else if(Auth::guard('doctor')->attempt(['email' =>$request->email ,'password'=>$request->password])){
            return redirect('/doctor/dashboard');
        }        
        else{
          return back()->with('danger','Wrong email and password');
        }
}
    //Pateint Middleware checking function
    public function logout()
    {
      Auth::guard('patient')->logout();
      return redirect('/login');
    }
}
