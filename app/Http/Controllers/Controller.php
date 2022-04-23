<?php

namespace App\Http\Controllers;

use App\Models\Rols;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function login(){
        return view('login');
    }
    public function logeado(Request $request){
       /* $nombre = $request->usuario;
        $contra = $request->password;*/
        $credentials = $request->only('email', 'password');

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
       $guardar = new User;
       $guardar->name = $request->name;
       $guardar->email = $request->email;
       $guardar->usuario = $request->usuario;
       $guardar->password = bcrypt($request->password);
       $guardar->apellidos = $request->apellidos;
       $guardar->telefono = $request->telefono;
       $guardar->direccion = $request->direccion;
       $guardar->id_role = $request->id_role;
     
       $guardar->save();

       return redirect()->action([ProductController::class, 'index']);
        //return $guardar;

    }
}
