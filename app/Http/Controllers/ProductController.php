<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Productos;
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

/*    public function __construct()
    {
        
    }*/
//*GET

    public function index(){
        return view("index");
    }

    public function createProduct(){
        return view("product.createProduct");
    }

    public function detailProduct($producto){
        $product = Productos::findOrFail($producto);
        $idCategoria = Categories::findOrFail($producto);

        return view("product.detailProduct")->with([
            'producto' =>  $product,
            //'idCat' => $idCategoria,
        ]);
    }

    public function editProduct($id){
        return view("product.editProduct");
    }

    public function publishProduct(){
        return view('product.publishProduct');
    }

    public function terminos(){
        return view('terminos');
    }


//? POST

    public function saveProduct(){
        $producto = Productos::create(request()->all());
        return redirect()->route('index');
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