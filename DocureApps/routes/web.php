<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Doctor\Doctorlogin;
use App\Http\Controllers\Patient\PatientLogin;
use App\Http\Controllers\Doctor\DoctorRegister;
use App\Http\Controllers\frontenDocureController;
use App\Http\Controllers\Patient\PatientRegister;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/**
 * frontend Routes
 */
Route::get('/',[frontenDocureController::class,'homePage']);
Route::get('/login',[frontenDocureController::class,'loginPage'])->middleware(['patient.redirect','doctor.redirect']);

//Pateints Route
Route::get('login/patient',[frontenDocureController::class,'PateintLogin'])->middleware('patient.redirect');
Route::get('patient/dashboard',[frontenDocureController::class,'Pateintdashboard'])->middleware('patient');
Route::post('patient/register',[PatientRegister::class,'Pateintregister']);
Route::post('patient/login',[ PatientLogin::class,'Pateintlogin']);
Route::get('patient/logout',[ PatientLogin::class,'logout']);

//Doctor Routes
Route::get('login/doctor',[frontenDocureController::class,'doctorLogin'])->middleware('doctor.redirect');;
Route::get('doctor/dashboard',[frontenDocureController::class,'doctordashboard'])->middleware('doctor');;
Route::post('doctor/register',[DoctorRegister::class,'doctorregister']);
Route::post('doctor/login',[Doctorlogin::class,'doctorlogin']);
Route::get('doctor-logout',[Doctorlogin::class,'doctorlogout']);
