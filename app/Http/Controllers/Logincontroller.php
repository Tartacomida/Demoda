<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Logincontroller extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store() {
        $user = User::create(request(['user','password']));
        
    }
}
