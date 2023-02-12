<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function Login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    function save(Request $req)
    {
$req->validate([
    'name'=>'required',
    'email'=>'required | email',
    'password'=>'required | min:8',
]);
    }
   
}
