<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

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

/*Route::get('/s', function () {
    return view('saludos');
});
Route::get('/login', function () {
    return view('login');
});*/
Route::get('/login', [Controller::class, 'login'])->middleware("guest");
Route::post('/logeado', [Controller::class, 'logeado']);
Route::get('/register', [Controller::class, 'register'])->middleware("guest");
Route::post('/registrado', [Controller::class, 'registrado']);
Route::get("/welcome", [Controller::class, 'welcome'])/*->middleware('auth')*/;
Route::get("/logout",[Controller::class, 'logout']);
/*Route::get('/terminos', function () {
    return view('terminos');
});
Route::get('/register', function () {
    return view('register');
});