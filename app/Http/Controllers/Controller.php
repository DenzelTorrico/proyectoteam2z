<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Productos;
use App\Models\Rols;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Validator;



class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function login(){
        return view('login');
    }
    
    public function logeado(Request $request){
       /* $nombre = $request->usuario;
        $contra = $request->password;*/
        $request->validate([
            "correo"=>"required|email",
            "password"=>"required",
        ]);
        
        $credentials = $request->only('correo', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            request()->session()->regenerate();
          // $sesion = $request->session()->put(["usuario"=>$request->email]);
          // session(["Denzel"=>"Admin"]); 
           //$request->session()->forget("Denzel");
           //$request->session()->flush();
           //return $request->session()->all();
           
            return redirect()->action([ProductController::class, 'index']);
           //return view("welcome",compact("sesion"));
            
        }else{
            return redirect()->action([Controller::class, 'login']);
        }

    }

    public function logout(Request $request){

       /* $request->session()->forget("usuario");
        
        //return $request->session()->all();*/
        Auth::logout();
        return redirect()->action([ProductController::class, 'index']);
    }

    public function register(){
        //$role = Rols::all();
        return view("register");
    }
    
    public function registrado(Request $request){

       // $ingresado = $request->all();
       // $guardar=User::create([$request->all()]);

        $request->validate([
            "nombre"=>"required",
            "apellidos"=>"required",
            "usuario"=>"required",
            "telefono"=>"required",
            "correo"=>"required|email",
            "password"=>"required",
            'confirmcontra'=>'required|same:password',
            "direccion"=>"required"
        ]);
        
        $guardar = new User();
        $guardar->nombre = $request->nombre;
        $guardar->apellidos = $request->apellidos;
        $guardar->telefono = $request->telefono;
        $guardar->correo = $request->correo;
        $guardar->usuario = $request->usuario;
        $guardar->password = bcrypt($request->password);
        $guardar->direccion = $request->direccion;
        $guardar->id_role = $request->id_role;

        $guardar->save();

        return redirect()->action([ProductController::class, 'index']);
    }
}
