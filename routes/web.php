<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within ad group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', [Controller::class, 'login'])->middleware("guest");
Route::post('/logeado', [Controller::class, 'logeado']);
Route::get('/register', [Controller::class, 'register'])->middleware("guest");
Route::post('/registrado', [Controller::class, 'registrado']);
Route::get("/welcome", [Controller::class, 'welcome'])/*->middleware('auth')*/;
Route::get("/logout",[Controller::class, 'logout']);
