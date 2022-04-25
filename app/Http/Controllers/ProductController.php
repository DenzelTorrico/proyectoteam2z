<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Productos;
use Illuminate\Http\Request;

//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

/*    public function __construct()
    {
        
    }*/
//*GET

    public function index(){
        $productos = Productos::all();
        return view("index", compact('productos'));
    }

    public function createProduct(){
        $categories = Categories::all();
        return view("product.createProduct",compact('categories'));
    }

    public function detailProduct($producto){
        $product = Productos::select('productos.nombre as nombre','productos.precio as precio','productos.descuento as descuento','productos.estadoproducto as estado','productos.stock as stock','productos.foto as foto','categories.nombre as categoria')->join('Categories','productos.idcategoria','=','categories.id')->where('productos.id',$producto)->get();
        //$product = Productos::findOrFail($producto);
        //$idCategoria = Categories::findOrFail($producto);
        return view("product.detailProduct", compact('product'));
    }

    public function editProduct($producto){
        $producto = Productos::find($producto);
        $categories = Categories::all();
        return view("product.editProduct", compact('producto','categories'));
    }

    public function publishProduct(){
        return view('product.publishProduct');
    }

    public function terminos(){
        return view('terminos');
    }


//? POST

    public function saveProduct(Request $request){

        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required|min:20',
            'precio' => 'required',
            'descuento' => '',
            'estadoProducto' => 'required',
            'stock' => 'required',
            'foto' => 'url',
            'idcategoria' => 'required',
        ]);

        $producto = Productos::create($request->all());
        return redirect()->route('index');
    }


// UPDATE

    public function updateProduct(Request $request,Productos $producto){
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required|min:20',
            'precio' => 'required',
            'descuento' => '',
            'estadoProducto' => 'required',
            'stock' => 'required',
            'foto' => 'url',
            'idcategoria' => 'required',
        ]);
        $producto -> update($request->all());
        return redirect()->route('index');
    }


//! DELETE

    public function deleteProduct($id){
        //
    }

}