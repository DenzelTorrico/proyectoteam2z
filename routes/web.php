<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/editProduct', function () {
    return view('editProduct');
});
Route::get('/editProfile', function () {
    return view('editProfile');
});
Route::get('/publishProduct', function () {
    return view('publishProduct');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/terminos', function () {
    return view('terminos');
});
Route::get('/register', function () {
    return view('register');
});
