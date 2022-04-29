<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Productos;

class SearchController extends Controller
{
    public function searchprice(Request $request){
        $categories = Categories::all();
        $buscador = $request->buscador;
        $precio = $request->ranges;
        $buscar = Productos::where("nombre","LIKE","%$buscador%")->where("precio","<","$precio")->get();
        //return $precio;
        return view('search',compact("buscar","categories","buscador"));
    }
    public function searchpricecategory(Request $request){
        $categories = Categories::all();
        $buscador = $request->id;
        $precio = $request->ranges;
        $buscar = Productos::where('idcategoria',"$buscador")->where("precio","<","$precio")->get();
        return view("searchpricecategory",compact("categories","buscar","buscador"));
    }
    public function searchcategory(Request $request){
        $categories = Categories::all();
        $buscador = $request->categoria;
        $buscar = Productos::where('idcategoria',"$buscador")->get();
        return view('searchcategory',compact("categories","buscar","buscador"));
    }
    public function search(Request $request){
        $categories = Categories::all();
        $buscador = $request->buscador;
        $buscar = Productos::where("nombre","LIKE","%$buscador%")->get();
        return view('search',compact("buscar","categories","buscador"));
    }
}
