<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    // show Admin Dashboard
    public function dashboard(){
        return view('admin.dashboard');
    }
}
