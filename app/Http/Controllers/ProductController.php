<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

//*GET

    public function index(){
        return view("index");
    }

    public function createProduct(){
        return view("createProduct");
    }

    public function editProduct($id){
        return view("editProduct");
    }

    public function publishProduct(){
        return view('publishProduct');
    }

    public function terminos(){
        return view('terminos');
    }


//? POST

    public function saveProduct(){
        //
    }


// UPDATE

    public function updateProduct($id){
        //
    }


//! DELETE

    public function deleteProduct($id){
        //
    }

}