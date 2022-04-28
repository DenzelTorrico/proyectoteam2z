<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }
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
        $product = Productos::select('productos.nombre as nombre','productos.precio as precio','productos.descuento as descuento','productos.estadoproducto as estado','productos.stock as stock','productos.foto as foto','categories.nombre as categoria')->join('categories','productos.idcategoria','=','categories.id')->where('productos.id',$producto)->get();
        //$product = Productos::findOrFail($producto);
        //$idCategoria = Categories::findOrFail($producto);
        return view("product.detailProduct", compact('product'));
    }

    public function editProduct($producto){
        $producto = Productos::find($producto);
        $categories = Categories::all();
        return view("product.editProduct", compact('producto','categories'));
    }

    public function publishProduct($id){
        $productos = Productos::where('iduser',$id)->get();
        if(Auth::user()->id==$id){
            return view('product.publishProduct',compact('productos'));
        }else{
            return redirect()->route('product.publish',Auth::user()->id);
        }
       
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
        return redirect()->route('product.publish',Auth::user()->id);
    }


//! DELETE

    public function deleteProduct($id){
        $product = Productos::destroy($id);
        return redirect()->route('product.publish',Auth::user()->id);
    }

}