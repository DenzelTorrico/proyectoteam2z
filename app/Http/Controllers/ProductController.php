<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Historial;
use App\Models\Productos;
use App\Models\User;
use App\Models\Venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index','detailProduct','terminos']);
    }

    //*GET
    public function index(Request $request){
        $ofertas = Productos::inRandomOrder()->take(6)->get();
        $categories = Categories::all();
        $productos = Productos::inRandomOrder()->take(8)->get();
        return view("index", compact(['ofertas','productos','categories']));
    }

    public function createProduct(){
        $categories = Categories::all();
        return view("product.createProduct",compact('categories'));
    }

    public function detailProduct(Request $request ,$producto){
        $product = Productos::select('productos.id','productos.nombre as nombre','productos.descripcion','productos.precio as precio','productos.descuento as descuento','productos.estadoproducto as estado','productos.stock as stock','productos.foto as foto','categories.nombre as categoria')->join('categories','productos.idcategoria','=','categories.id')->where('productos.id',$producto)->get();
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

    public function checkout(Request $request, $id){
        $producto = Productos::findOrFail($id);
        return view('product.checkout',compact('id','producto','request'));
    }

    public function paypal(Request $request, Venta $venta, Historial $historial){
        $venta->idUsuario = Auth::user()->id;
        $venta->idProducto = $request->idProducto;
        $venta->precioUnitario = $request->precioUnitario;
        $venta->cantidad = $request->cantidad;
        $venta->descuento = $request->descuento;
        $venta->igv = '0.18';
        $venta->costoEnvio = '16';
        $venta->estadoVenta = '0';
        $venta->idMetodoPago = '1';
        $venta->fechaPago = now();
        $venta->fechaEnvio = $request->fechaEnvio;
        $venta->save();

        $historial->idVenta = $venta->id;
        $historial->save();
        return view('paypal',compact('request'));
    }

    public function process(){

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
            'file'=> 'image|mimes:jpg,png,jpeg|max:2048',
            'foto' => '',
            'idcategoria' => 'required',
        ]);
        $image = $request->file->storeOnCloudinary('products');
        $request->merge(['iduser' => ''.Auth::user()->id.'']);
        $request->merge(['foto' => $image->getPath()]);
        $request->merge(['idFoto' => $image->getPublicId()]);
        //$response = cloudinary()->upload($request->file('file')->getRealPath())->getSecurePath();

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
            'file'=> '',
            'foto' => '',
            'idcategoria' => 'required',
        ]);
        $productoAll = Productos::select('idFoto')->where('id',$producto->id)->get();
        foreach ($productoAll as $prod) {
            $idFoto = $prod->idFoto;
        }
        cloudinary()->uploadApi()->destroy($idFoto);

        if ($request->file) {
            $image = $request->file->storeOnCloudinary('products');
            $request->merge(['foto' => $image->getPath()]);
            $request->merge(['idFoto' => $image->getPublicId()]);
        }
        $producto -> update($request->all());
        return redirect()->route('product.publish',Auth::user()->id);
    }


//! DELETE

    public function deleteProduct($id){
        $productoAll = Productos::select('idFoto')->where('id',$id)->get();
        foreach ($productoAll as $producto) {
            $idFoto = $producto->idFoto;
        }
        cloudinary()->uploadApi()->destroy($idFoto);
        $product = Productos::destroy($id);
        return redirect()->route('product.publish',Auth::user()->id);
    }

}