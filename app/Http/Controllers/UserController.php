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
    function save(Request $request)
    {
$request->validate([
    'name'=>'required',
    'email'=>'required | email | unique:admins',
    'password'=>'required | min:8',
]);
//inserting data into database
$admin=new Admin;
$admin->name=$request->name;
$admin->email=$request->email;
$admin->password=Hash::make($request->password);
$result=$admin->save();

if($result)
{
return back()->with('success','New User has been successfully added to database');
}else{
    return back()->with('fail','Something went wrong, try again later');

}
    }
public function check(Request $request)
{
    //validate request data
    $request->validate([
        'email'=>'required | email ',
        'password'=>'required | min:8',
    ]);
    $userInfo = Admin::where('email','=',$request->email)->first();
    if(!$userInfo)
{
    return back()->with('fail','We donot recognize your email address');
}else{
    //check password
    if(Hash::check($request->password,$userInfo->password)){
        $request->session()->put('LoggedUser',$userInfo->id);
        return redirect('dashboard');
    }
    else{
        return back()->with('fail','Incorrect password');

    }
    

}
}
public function dashboard(){
    $data=['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
    return view('dashboard',$data);
}
public function logout(){
    if(session()->has('LoggedUser')){
        session()->pull('LoggedUser');
        return redirect('login');
    }
}
}