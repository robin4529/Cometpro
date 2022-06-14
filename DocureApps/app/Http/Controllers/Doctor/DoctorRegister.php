<?php

namespace App\Http\Controllers\Doctor;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class DoctorRegister extends Controller
{
    // doctor registertration form

    public function doctorregister(Request $request)
    {
        $this->validate( $request ,[
            'name'=> 'required' ,
            'email' => 'required|email',
            'password' =>'required|min:5',
        ]);
        Doctor::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>  Hash::make($request->password),
        ]);
        return back()->with('success','Congraculation youre successfully Register');
    }
}
