<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
//* GET

    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function editProfile($id){
        return view('editProfile');
    }


//? POST

    public function saveProfile(){
        //
    }


// UPDATE

    public function updateProfile($id){
        //
    }


//! DELETE

    public function deleteProfile($id){
        //
    }

}
