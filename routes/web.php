<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::post("save",[UserController::class,'save'])->name('save');
Route::post("check",[UserController::class,'check'])->name('check');
Route::get("logout",[UserController::class,'logout'])->name('logout');

Route::group(['middleware'=>['AuthCheck']],function(){
    Route::get("login",[UserController::class,'Login'])->name('login');
    Route::get("register",[UserController::class,'register'])->name('register');
    Route::get("dashboard",[UserController::class,'dashboard']);  
});