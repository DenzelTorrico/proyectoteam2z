<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
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
