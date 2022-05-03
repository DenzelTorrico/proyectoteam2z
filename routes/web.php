<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::controller(Controller::class)->group(function(){
    Route::get('/login', 'login')->name('login')->middleware("guest");
    Route::post('/logeado', 'logeado')->name('logeado');
    Route::get('/register', 'register')->name('register')->middleware("guest");
    Route::post('/registrado', 'registrado')->name('registrado');
    //Route::get("/welcome", [Controller::class, 'welcome'])/*->middleware('auth')*/;
    Route::get("/logout", 'logout')->name('logout');
});

Route::controller(SearchController::class)->group(function(){
    route::get("/search", 'search')->name('search');
    route::get("searchcategory","searchcategory")->name('searchcategory');
    route::get("searchpricecategory","searchpricecategory")->name('searchpricecategory');
    route::get("searchprice","searchprice")->name('searchprice');
});

Route::controller(ProductController::class)->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/product/create', 'createProduct')->name('product.create');
    Route::get('/product/detail/{producto}', 'detailProduct')->name('product.detail');
    Route::get('/product/edit/{id}', 'editProduct')->name('product.edit');
    Route::get('/product/publish/{id}', 'publishProduct')->name('product.publish');
    Route::get('/terminos', 'terminos')->name('index.terminos');
    Route::get('/checkout/{id}', 'checkout')->name('product.checkout');

    Route::get('/paypal', 'paypal')->name('product.paypal');
    Route::get('/paypal/process/{orderId}','process')->name('paypal.process');


    Route::post('/create', 'saveProduct')->name('product.save');
    Route::delete('/deleteProduct/{id}', 'deleteProduct')->name('product.destroy');
    Route::put('/updateProduct/{producto}', 'updateProduct')->name('product.update');
});

Route::controller(UserController::class)->group(function(){
    Route::get('/profile/edit/{id}','editProfile')->name('profile.edit');
    Route::get('/profile/historial','historial')->name('profile.historial');
    
    Route::post('/profile/edit', 'saveProfile')->name('profile.save');
    Route::put('/updateProfile/{profile}','updateProfile')->name('profile.update');
    Route::delete('/deleteProfile/{id}','deleteProfile')->name('profile.destroy');
});

// Paypal SDK JS (Card)