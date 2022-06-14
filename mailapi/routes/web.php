<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;


/*
|--------------------------------------------------------------------------
| Web Routes

*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('user/{name?}/{email?}',[MailController::class, 'regis']);
