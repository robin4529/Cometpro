<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontenDocureController extends Controller
{
    // forntend show docure 

    public function homePage()
    {
       return view('docure.pages.home');
    }

    // login page show

    public function loginPage()
    {
        return view('docure.pages.login');
    }
    // parients Login page
    public function PateintLogin()
    {
        return view('docure.pages.patient.register');
    }
      // patients Dashboard for view
      public function Pateintdashboard()
      {
          return view('docure.pages.patient.dashboard');
      }
    // doctor login page for views
    public function doctorLogin()
    {
        return view('docure.pages.doctor.signin');
    }
    // doctor dashboard for view
    public function doctordashboard()
    {
       
        return view('docure.pages.doctor.dashboard');
    }
  
}
