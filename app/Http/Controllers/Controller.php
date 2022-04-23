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
    
    public function welcome(Request $request){

      /*  if($request->session()->has('usuario')){
            $user = $request->session()->get('usuario');
        return  view('welcome',compact('user'));
        
        }*/
      // view('welcome');
       return view('welcome');
        
    }
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
           
           return redirect()->action([Controller::class, 'welcome']);
           //return view("welcome",compact("sesion"));
            // return "logeado";
        }
        
    }

    public function logout(Request $request){

       /* $request->session()->forget("usuario");
        
        //return $request->session()->all();*/
        Auth::logout();
        return redirect()->action([Controller::class, 'welcome']);
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

        return $guardar;

    }
}
