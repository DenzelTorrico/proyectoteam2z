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

//* GET

Route::get('/', 'ProductController@index')->name('index');
Route::get('/editProduct/create', 'ProductController@createProduct')->name('product.create');
Route::get('/editProduct/{id}', 'ProductController@editProduct')->name('product.edit');
Route::get('/editProfile/{id}','UserController@editProfile')->name('profile.edit');
Route::get('/publishProduct', 'ProductController@publishProduct')->name('product.publish');
Route::get('/terminos', 'ProductController@terminos')->name('index.terminos');
Route::get('/login', 'UserController@login')->name('index.login');
Route::get('/register','UserController@register')->name('index.register');


//? POST

Route::post('/', 'ProductController@saveProduct')->name('product.save');
Route::post('/', 'UserController@saveProfile')->name('profile.save');


// UPDATE

Route::match(['PATCH','PUT'],'/updateProduct/{id}', 'ProductController@updateProduct')->name('product.update');
Route::match(['PATCH','PUT'],'/updateProfile/{id}','UserController@updateProfile')->name('profile.update');


//! DELETE

Route::delete('/deleteProduct/{id}', 'ProductController@deleteProduct')->name('product.destroy');
Route::delete('/deleteProfile/{id}','UserController@deleteProfile')->name('profile.destroy');