<?php

namespace App\Http\Controllers\Patient;


use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class PatientRegister extends Controller
{
    //Patient Register
   public function Pateintregister(Request $request)
   {
     $this->validate($request,[
            'name' =>'required',
            'email' => 'required|email',
            'password' =>'required|min:5 ' ,
      ]);
      Patient::create([
         'name' => $request->name ,
         'email' => $request->email ,
         'password' => Hash::make( $request->password),

      ]);
      return back()->with('success','Patient account created successfully');
   }
}
 