<?php

use App\Http\Controllers\Homepagecontroller;
use App\Http\Controllers\Inventariocontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Logincontroller;
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
Route::get('/home',[Homepagecontroller::class,'create'])->name('home.index');
Route::get('/inventario',[Inventariocontroller::class,'create'])->name('invetario.index');