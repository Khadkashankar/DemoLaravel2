<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
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
    'email'=>'required | email | unique:admins',
    'password'=>'required | min:8',
]);
//inserting data into database
$admin=new Admin;
$admin->name=$req->name;
$admin->email=$req->email;
$admin->password=Hash::make($req->password);
$result=$admin->save();

if($result)
{
return back()->with('success','New User has been successfully added to database');
}else{
    return back()->with('fail','Something went wrong, try again later');

}
    }
public function check(Request $req)
{
    //validate request data
    $req->validate([
        'email'=>'required | email ',
        'password'=>'required | min:8',
    ]);
    $userInfo = Admin::where('email','=',$req->email)->first();
    if(!$userInfo)
{
    return back()->with('fail','We donot recognize your email address');
}else{
    //check password
    if(Hash::check($req->password,$userInfo->password)){
        $req->session()->put('LoggedUser',$userInfo->id);
        return redirect('admin/dashboard');
    }
    else{
        return back()->with('fail','Incorrect password');

    }
    

}
}
}