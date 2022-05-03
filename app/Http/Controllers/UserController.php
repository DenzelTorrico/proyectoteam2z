<?php

namespace App\Http\Controllers;

use App\Models\Historial;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function historial(){
        $historial = Historial::select('historial.id','historial.idVenta','p.nombre','v.precioUnitario','v.cantidad','v.igv','v.costoEnvio','v.estadoVenta','v.fechaPago','v.fechaEnvio')->join('venta as v','historial.idVenta','=','v.id')->join('productos as p','v.idProducto','=','p.id')->where('idUsuario',1)->get();
        return view('profile.historial',compact('historial'));
    }
//* GET

    public function editProfile($id){
        $profile = User::find($id);
        return view('editProfile',compact('profile'));
    }


//? POST

    public function saveProfile(){
        //
    }


// UPDATE

    public function updateProfile(Request $request,User $profile){
        $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
        ]);
        $profile -> update($request->all());
        return redirect()->route('index');
    }


//! DELETE

    public function deleteProfile($id){
        //
    }

}
