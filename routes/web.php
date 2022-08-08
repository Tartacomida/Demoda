<?php

use App\Http\Controllers\Homepagecontroller;
use App\Http\Controllers\Inventariocontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\FuncCall;

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
    return view('Login');
});

Route::get('/login',[Logincontroller::class,'create'])->name('login.index');
Route::get('/register',[RegisterController::class,'create'])->name('register.index');
Route::get('/home',[Homepagecontroller::class,'create'])->name('home.index');
Route::get('/inventario',[Inventariocontroller::class,'create'])->name('invetario.index');
Route::post('/register',[RegisterController::class,'store'])->name('register.store');
Route::post('/login',[Logincontroller::class,'store'])->name('login.store');