<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Logincontroller extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(Request $request){
        
        if(auth()->attempt($request->only(['username','password']))== false){
            return back()->withErrors([
           'message'=>'The email or password is incorrect,please try again',
            ]);
       }
       return redirect()->to('/home');
       //return request()->only(['username','password']);
    }

    public function destroy(){
        auth()->logout();
        return redirect()->to('/home');
    }
}
